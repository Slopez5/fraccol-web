<?php

namespace App\Livewire\Panel\RealEstates\DevelopmentManager;

use Livewire\Component;

class FormEdit extends Component
{

    public $user;

    public function mount($user){
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.panel.real-estates.development-manager.form-edit');
    }
}
