<?php

namespace App\Livewire\Panel\RealEstates\Secretaries;

use Livewire\Component;

class TableSecretaries extends Component
{

    public  $users = [];

    public function mount($users = []) {
        $this->users = $users;
    }
    
    public function render()
    {
        return view('livewire.panel.real-estates.secretaries.table-secretaries');
    }
}
