<?php

namespace App\Http\Controllers\RealEstate;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\Lead;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;
use JeroenDesloovere\VCard\VCardParser;
use App\Classes\RoleType;
use App\Models\Address;

class LeadController extends Controller
{
    // Lead
    public function createLead()
    {
        $agents = User::where('role_id', RoleType::REAL_ESTATE_AGENT)->get();
        $countries = Country::all();
        $states = State::all();
        $cities = City::all();
        return view('realEstates.leads.create', compact('agents', 'countries', 'states', 'cities'));
    }

    public function storeLead(Request $request)
    {
        $lead = new Lead();
        $lead->first_name = $request->input('first_name');
        $lead->last_name = $request->input('last_name');
        $lead->birthDay = $request->input('birth_date');
        $lead->birthPlace = $request->input('birth_place');
        $lead->maritalStatus = $request->input('marital_status');
        $lead->occupation = $request->input('occupation');
        $lead->unofficialManager = $request->input('unofficial_manager');
        $lead->beneficiary = $request->input('beneficiary');
        $lead->email = $request->input('email');
        $lead->phone = $request->input('phone');
        if (!empty($request->input('address'))) {
            $address = new Address();
            $address->street = $request->address;
            $address->neighborhood = $request->neighborhood;
            $address->country_id = $request->country;
            $address->state_id = $request->state;
            $address->city_id = $request->city;
            $address->zip_code = $request->zip_code;
            $address->save();
            $lead->address()->associate($address);
        }
        // validate if the lead agent is a real estate agent and validate != -1
        if ($request->input('lead_agent_id') != -1) {
            $lead_agent = User::find($request->input('lead_agent_id'));
            if ($lead_agent && $lead_agent->role_id == RoleType::REAL_ESTATE_AGENT) {
                $lead->lead_agent_id = $request->input('lead_agent_id');
            }
        }
        $lead->source = $request->input('source');
        $lead->status = $request->input('status');
        $lead->notes = $request->input('notes');
        if ($request->hasFile('ine_file')) {
            $ineFile = $request->file('ine_file');
            $path = $ineFile->storeAs('leads', $ineFile->getClientOriginalName());
            $pathReplacePublicToStorage = str_replace('public', 'storage', $path);
            $lead->ine_file = $pathReplacePublicToStorage;
        }
        $lead->save();

        return redirect()->route('realEstate.leads');
    }

    public function editLead($id)
    {
        $lead = Lead::find($id);
        $agents = User::where('role_id', RoleType::REAL_ESTATE_AGENT)->get();
        $countries = Country::all();
        $states = State::all();
        $cities = City::all();
        return view('realEstates.leads.edit', compact('lead', 'agents', 'countries', 'states', 'cities'));
    }

    public function updateLead(Request $request, $id)
    {
        $lead = Lead::find($id);
        $lead->first_name = $request->input('first_name');
        $lead->last_name = $request->input('last_name');
        $lead->birthDay = $request->input('birth_date');
        $lead->birthPlace = $request->input('birth_place');
        $lead->maritalStatus = $request->input('marital_status');
        $lead->occupation = $request->input('occupation');
        $lead->unofficialManager = $request->input('unofficial_manager');
        $lead->beneficiary = $request->input('beneficiary');
        $lead->email = $request->input('email');
        $lead->phone = $request->input('phone');
        if (!empty($request->input('address'))) {
            $lead->address()->save([
                'street' => $request->input('address'),
                'neighborhood' => $request->input('neighborhood'),
                'zip_code' => $request->input('zip_code'),
                'country_id' => $request->input('country'),
                'state_id' => $request->input('state'),
                'city_id' => $request->input('city'),
            ]);
        }
        $lead->lead_agent_id = $request->input('lead_agent_id');
        $lead->source = $request->input('source');
        $lead->status = $request->input('status');
        $lead->notes = $request->input('notes');
        if ($request->hasFile('ine_file')) {
            $ineFile = $request->file('ine_file');
            $path = $ineFile->storeAs('leads', $ineFile->getClientOriginalName());
            $pathReplacePublicToStorage = str_replace('public', 'storage', $path);
            $lead->ine_file = $pathReplacePublicToStorage;
        }
        $lead->save();
        return redirect()->route('realEstate.leads');
    }

    public function deleteLead($id)
    {
        return redirect()->route('realEstate.leads');
    }

    public function showLead($id)
    {
        $lead = Lead::find($id);

        return view('realEstates.leads.show', compact('lead'));
    }

    public function importLead(Request $request)
    {
        if (!Storage::exists('vCards/test.vcf')) {
            $leadPaginate = [];
            return view('realEstates.leads.import', compact('leadPaginate'));
        }
        $leads = [];
        $path = Storage::path('vCards/test.vcf');
        $parser = VCardParser::parseFromFile($path);
        $phonesToCheck = [];
        $leads = [];
        foreach ($parser as $index => $vcard) {
            $firstName = $vcard->firstname;
            $lastName = $vcard->lastname;
            $phone = $vcard->phone;
            $phoneSelect = $phone[array_key_first($phone)][0];
            $phonesToCheck[] = $phoneSelect;
            $leads[] = [
                'id' => $index,
                'first_name' => $firstName,
                'last_name' => $lastName,
                'phone' => $phoneSelect
            ];
        }
        $existingLeads = Lead::whereIn('phone', $phonesToCheck)->pluck('phone')->toArray();
        $newLeads = [];
        foreach ($leads as $lead) {
            if (!in_array($lead['phone'], $existingLeads)) {
                $newLeads[] = $lead;
            }
        }
        $elementsPerPage = 100;
        $page = $request->query('page', 1);
        $leadsPaginate = array_chunk($newLeads, $elementsPerPage);
        if (empty($leadsPaginate)) {
            if (Storage::exists('vCards/test.vcf')) {
                Storage::delete('vCards/test.vcf');
            }
            $leadPaginate = [];
            return view('realEstates.leads.import', compact('leadPaginate'));
        }
        $leadPaginate = new LengthAwarePaginator($leadsPaginate[$page - 1], count($newLeads), $elementsPerPage, $page, ['path' => $request->url(), 'query' => $request->query()]);
        return view('realEstates.leads.import', compact('leadPaginate'));
    }

    public function importLeadStore(Request $request)
    {
        if (!$request->hasFile('file')) {
            $leads = $request->input('leads');
            $path = Storage::path('vCards/test.vcf');
            $parser = VCardParser::parseFromFile($path);
            foreach ($leads as $lead) {
                $vcard = $parser->getCardAtIndex($lead);
                $firstName = $vcard->firstname;
                $lastName = $vcard->lastname;
                $phone = $vcard->phone;
                $phoneSelect = $phone[array_key_first($phone)][0];
                $leadDB = new Lead();
                $leadDB->first_name = $firstName;
                $leadDB->last_name = $lastName;
                $leadDB->phone = $phoneSelect;
                $leadDB->save();
            }
            return redirect()->route('realEstate.leads');
        } else {
            $vCard = $request->file('file');
            $vCard->storeAs('vCards', 'test.vcf');
        }

        return redirect()->route('realEstate.lead.import');
    }
}
