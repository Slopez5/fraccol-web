<?php

namespace App\Livewire\Panel\RealEstates\DevelopmentManager;

use Livewire\Component;

class TableDevelopmentManager extends Component
{
    public  $users = [];

    public function mount($users = []) {
        $this->users = $users;
    }

    public function render()
    {
        return view('livewire.panel.real-estates.development-manager.table-development-manager');
    }
}
