<?php

namespace App\Livewire\Forms\Panel\RealEstates\Sales;

use App\Models\Lead;
use Carbon\Carbon;
use Livewire\Attributes\Rule;
use Livewire\Form;

class LeadForm extends Form
{
    //

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
    public $phone;
    public $address_id;
    public $source;
    public $status;
    public $ine_file;
    public $lead_agent_id;
    public $notes;

    public function store(){
        Lead::created($this->all());
    }

    public function setLead($lead){
        $this->first_name = $lead["first_name"];
        $this->last_name = $lead["last_name"];
        $date = Carbon::createFromFormat('d/m/Y',$lead["birthDay"])->format('Y-m-d');
        $this->birthDay = $date;
        $this->birthPlace = $lead["birthPlace"];
        $this->maritalStatus = $lead["maritalStatus"];
        $this->occupation = $lead["occupation"];
        $this->unofficialManager = $lead["unofficialManager"];
        $this->beneficiary = $lead["beneficiary"];
        $this->email = $lead["email"];
        $this->phone = $lead["phone"];
    }

    public function toJSON() {
        return json_encode($this->all());
    }
}
