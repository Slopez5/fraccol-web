<?php

namespace App\Livewire\Panel\RealEstates\Sales\Create;

use Livewire\Component;

class SalesTab extends Component
{
    public function render()
    {
        return view('livewire.panel.real-estates.sales.create.sales-tab');
    }

    public function back()
    {

        $this->dispatch('back-developments-tab');
    }

    public function save()
    {
        
    }
}
