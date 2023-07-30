<?php

namespace App\Livewire\LandingPage\Development;

use Livewire\Component;

class SectionPrices extends Component
{
    public $price_info = "En el Fraccionamiento Campestre, ofrecemos una variedad de terrenos disponibles para la construcción de tu hogar, todos ellos con diferentes medidas y ubicaciones. Nuestros precios se basan en el precio por metro cuadrado (m2) y varían según las características de cada lote.";
    public $price_base = "$850 MXN";
    public $price_lotTypes = [
        [
            "id" => 1,
            "lot_type" => "Terrenos en esquina",
            "price" => "+$10 USD por m2"
        ],
        [
            "id" => 2,
            "lot_type" => "Terrenos con vista panorámica",
            "price" => "+$15 USD por m2"
        ],
        [
            "id" => 3,
            "lot_type" => "Terrenos cercanos a amenidades",
            "price" => "+$5 USD por m2"
        ]
    ];
    public function render()
    {
        return view('livewire.landing-page.development.section-prices');
    }
}
