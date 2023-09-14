<?php

namespace App\Livewire\Panel\RealEstates\Sales\Modal;

use Livewire\Attributes\Rule;
use Livewire\Component;

class AddClient extends Component
{
    #[Rule('required')]
    public $firstName;
    #[Rule('required')]
    public $lastName;
    public $birthDate;
    public $birthPlace;
    public $maritalStatus;
    public $occupation;
    public $unofficialManager;
    public $beneficiary;
    public $email;
    public $phone;
    public $country;
    public $state;
    public $city;
    public $street;
    public $zipCode;


    public function mount()
    {
    }

    public function save()
    {
        $this->validate();
        $this->firstName = "Hola mundo";
        $this->js("document.getElementById('addNewLead').modal('hide')"); 
        logger("test");
    }

    public function render()
    {
        return view('livewire.panel.real-estates.sales.modal.add-client');
    }
}
