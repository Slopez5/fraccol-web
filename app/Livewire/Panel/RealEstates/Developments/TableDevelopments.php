<?php

namespace App\Livewire\Panel\RealEstates\Developments;

use Livewire\Component;

class TableDevelopments extends Component
{

    public $developments = [];

    public function mount($developments = []){
        $this->developments = $developments;
    }

    public function render()
    {
        return view('livewire.panel.real-estates.developments.table-developments');
    }
}
