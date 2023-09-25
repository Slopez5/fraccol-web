<?php

namespace App\Livewire\Forms\Panel\RealEstates\Sales;

use App\Models\Lead;
use Carbon\Carbon;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Rule;
use Livewire\Form;

class LeadForm extends Form
{
    //
    public $id;
    #[Rule('required')]
    public $first_name;
    public $last_name;
    public $birthDay;
    public $birthPlace;
    public $maritalStatus;
    public $occupation;
    public $unofficialManager;
    public $beneficiary;
    public $email;
    #[Rule('required')]
    public $phone;
    public $address_id = 1;
    public $source = "";
    public $status = "";
    public $ine_file;
    public $lead_agent_id = 1;
    public $notes = "";

    public function store()
    {
        $lead = new Lead($this->all());
        $lead->save();
        $this->ine_file->storeAs("public/Leads/lead_" . $lead->id . "/ine", "ine.jpg");
    }

    public function update()
    {

        $lead = Lead::find($this->id);
        $lead->first_name = $this->first_name;
        $lead->last_name = $this->last_name;
        $lead->birthDay = $this->birthDay;
        $lead->birthPlace = $this->birthPlace;
        $lead->maritalStatus = $this->maritalStatus;
        $lead->occupation = $this->occupation;
        $lead->unofficialManager = $this->unofficialManager;
        $lead->beneficiary = $this->beneficiary;
        $lead->email = $this->email;
        $lead->phone = $this->phone;
        $lead->address_id = $this->address_id;
        $lead->source = $this->source;
        $lead->status = $this->status;
        $lead->lead_agent_id = $this->lead_agent_id;
        $lead->notes = $this->notes;
        $this->ine_file->storeAs("public/Leads/lead_" . $lead->id . "/ine", "ine.jpg");
        $lead->save();
        
    }

    public function setLead($lead)
    {
        $this->id = $lead["id"];
        $this->first_name = $lead["first_name"];
        $this->last_name = $lead["last_name"];
        $date = Carbon::createFromFormat('Y-m-d', $lead["birthDay"])->format('Y-m-d');
        $this->birthDay = $date;
        $this->birthPlace = $lead["birthPlace"];
        $this->maritalStatus = $lead["maritalStatus"];
        $this->occupation = $lead["occupation"];
        $this->unofficialManager = $lead["unofficialManager"];
        $this->beneficiary = $lead["beneficiary"];
        $this->email = $lead["email"];
        $this->phone = $lead["phone"];
    }

    public function clear()
    {
        $this->first_name = "";
        $this->last_name = "";
        $this->birthDay = "";
        $this->birthPlace = "";
        $this->maritalStatus = "";
        $this->occupation = "";
        $this->unofficialManager = "";
        $this->beneficiary = "";
        $this->email = "";
        $this->phone = "";
        $this->address_id = 1;
        $this->source = "";
        $this->status = "";
        $this->ine_file = "";
        $this->lead_agent_id = 1;
        $this->notes = "";
    }

    public function toJSON()
    {
        return json_encode($this->all());
    }
}
