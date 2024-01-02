<?php

namespace App\Livewire;

use App\Models\Development;
use Livewire\Component;

class MenuFraccol extends Component
{
    public $developments = [];

    public function render()
    {
        $this->developments = Development::all();
        return view('livewire.menu-fraccol');
    }
}
