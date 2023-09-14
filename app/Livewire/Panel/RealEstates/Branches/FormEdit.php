<?php

namespace App\Livewire\Panel\RealEstates\Branches;

use App\Models\State;
use Livewire\Component;

class FormEdit extends Component
{

    public $states = [];
    public $branch;

    public function mount($branch){
        $this->states = State::all();
        $this->branch = $branch;
    }

    public function render()
    {
        return view('livewire.panel.real-estates.branches.form-edit');
    }
}
