<?php

namespace App\Livewire\LandingPage\Development;

use Livewire\Component;

class SectionPrices extends Component
{
    public $price_info = "";
    public $prices = [];
    public function mount($prices){
        logger($prices->prices[0]->id);
        $this->price_info = $prices->price_info;
        $this->prices = $prices->prices;
    }
    public function render()
    {
        return view('livewire.landing-page.development.section-prices');
    }
}
