<?php

namespace App\Livewire\Panel\RealEstates\Developments;

use Livewire\Component;

class FormEditDevelopment extends Component
{

    public $development;

    public function mount($development){
        $this->development = $development;
    }

    public function render()
    {
        return view('livewire.panel.real-estates.developments.form-edit-development');
    }
}
