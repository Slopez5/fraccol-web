<?php

namespace App\Livewire\Panel\RealEstates\Branches;

use App\Models\State;
use Livewire\Component;

class FormCreate extends Component
{
    public $states = [];

    public function mount(){
        $this->states = State::all();
    }

    public function render()
    {
        return view('livewire.panel.real-estates.branches.form-create');
    }
}
