<?php

namespace App\Http\Controllers\RealEstate;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\ExpenseCategory;
use App\Models\RealEstateAgency;
use App\Models\RealEstateBranch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{
    //

    public function activityCategories()
    {
        return view('realEstates.settings.activityCategories.index');
    }

    public function createActivityCategory()
    {
        return view('realEstates.settings.activityCategories.create');
    }

    public function expenseCategories()
    {
        $expenseCategories = ExpenseCategory::all();
        return view('realEstates.settings.expenseCategories.index', compact('expenseCategories'));
    }

    public function createExpenseCategory()
    {
        return view('realEstates.settings.expenseCategories.create');
    }

    public function storeExpenseCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);

        ExpenseCategory::create($request->all());

        return redirect()->route('realEstate.settings.expenseCategories');
    }



    public function editExpenseCategory(ExpenseCategory $expenseCategory)
    {
        return view('realEstates.settings.expenseCategories.edit', compact('expenseCategory'));
    }

    public function updateExpenseCategory(Request $request, ExpenseCategory $expenseCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $expenseCategory->update($request->all());

        return redirect()->route('realEstate.settings.expenseCategories');
    }

    public function deleteExpenseCategory($id)
    {
        $expenseCategory = ExpenseCategory::find($id);
        $expenseCategory->delete();

        return redirect()->route('realEstate.settings.expenseCategories');
    }

    public function realEstateAgencies()
    {
        $realEstateAgencies = Auth::user()->realEstates;
        return view('realEstates.settings.realEstateAgencies.index', compact('realEstateAgencies'));
    }

    public function createRealEstateAgency()
    {
        return view('realEstates.settings.realEstateAgencies.create');
    }

    public function storeRealEstateAgency(Request $request)
    {
        $user = Auth::user();
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'website' => 'nullable|string|max:255',
        ]);

        $realEstateAgency = new RealEstateAgency();
        $realEstateAgency->admin()->associate($user);
        $realEstateAgency->name = $request->name;
        $realEstateAgency->email = $request->email;
        $realEstateAgency->phone = $request->phone;
        if ($request->website) {
            $realEstateAgency->website = $request->website;
        }
        $realEstateAgency->save();
        return redirect()->route('realEstate.settings.realEstateAgencies');
    }

    public function editRealEstateAgency($id)
    {
        $realEstateAgency = RealEstateAgency::find($id);
        return view('realEstates.settings.realEstateAgencies.edit', compact('realEstateAgency'));
    }

    public function updateRealEstateAgency(Request $request, $id)
    {
        $realEstateAgency = RealEstateAgency::find($id);
        $realEstateAgency->name = $request->name;
        $realEstateAgency->email = $request->email;
        $realEstateAgency->phone = $request->phone;
        if ($request->website) {
            $realEstateAgency->website = $request->website;
        }
        $realEstateAgency->save();
        return redirect()->route('realEstate.settings.realEstateAgencies');
    }

    public function deleteRealEstateAgency($id)
    {
        $realEstateAgency = RealEstateAgency::find($id);
        $realEstateAgency->delete();
        return redirect()->route('realEstate.settings.realEstateAgencies');
    }

    public function realEstateBranches()
    {
        $realEstateBranches = Auth::user()->realEstates->first()->branches;
        return view('realEstates.settings.realEstateBranches.index', compact('realEstateBranches'));
    }

    public function createRealEstateBranch()
    {
        return view('realEstates.settings.realEstateBranches.create');
    }

    public function storeRealEstateBranch(Request $request)
    {
        $user = Auth::user();
        
        

        logger($request->all());

        $realEstateBranch = new RealEstateBranch();
        $realEstateBranch->realEstate()->associate($user->realEstates->first());
        $realEstateBranch->name = $request->name;
        $realEstateBranch->email = $request->email;
        $realEstateBranch->phone = $request->phone;
        $address = new Address();
        $address->street = $request->street;
        $address->neighborhood = $request->neighborhood;
        $address->country_id = $request->country;
        $address->state_id = $request->state;
        $address->city_id = $request->city;
        $address->zip_code = $request->zip_code;
        $address->save();
        $realEstateBranch->address()->associate($address);
        
        $realEstateBranch->save();
        return redirect()->route('realEstate.settings.realEstateBranches');
    }

    public function invoiceStatuses()
    {
        return view('realEstates.settings.invoiceStatuses.index');
    }

    public function lotStatuses()
    {
        return view('realEstates.settings.lotStatuses.index');
    }

    public function lotTypes()
    {
        return view('realEstates.settings.lotTypes.index');
    }

    public function paymentPlans()
    {
        return view('realEstates.settings.paymentPlans.index');
    }

    public function paymentMethods()
    {
        return view('realEstates.settings.paymentMethods.index');
    }

    public function paymentStatuses()
    {
        return view('realEstates.settings.paymentStatuses.index');
    }

    public function countries()
    {
        return view('realEstates.settings.countries.index');
    }

    public function contracts()
    {
        return view('realEstates.settings.contracts.index');
    }

    public function unitTypes()
    {
        return view('realEstates.settings.unitTypes.index');
    }




}
