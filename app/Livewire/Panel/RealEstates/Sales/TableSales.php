<?php

namespace App\Livewire\Panel\RealEstates\Sales;

use Livewire\Component;

class TableSales extends Component
{
    public $sales = [];

    public function mount($sales)
    {
        $this->sales = $sales;
    }
    public function render()
    {
        return view('livewire.panel.real-estates.sales.table-sales');
    }
}
