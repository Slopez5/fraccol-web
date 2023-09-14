<?php

namespace App\Livewire\Panel\RealEstates\RealEstateAgents;

use Livewire\Component;

class TableRealEstateAgents extends Component
{

    public  $users = [];

    public function mount($users = []) {
        $this->users = $users;
    }
    
    public function render()
    {
        return view('livewire.panel.real-estates.real-estate-agents.table-real-estate-agents');
    }
}
