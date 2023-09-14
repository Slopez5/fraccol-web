<?php

namespace App\Livewire\Panel\RealEstates\Branches;

use Livewire\Component;

class TableBranches extends Component
{
    public  $branches = [];

    public function mount($branches = []) {
        $this->branches = $branches;
    }

    public function render()
    {
        return view('livewire.panel.real-estates.branches.table-branches');
    }
}
