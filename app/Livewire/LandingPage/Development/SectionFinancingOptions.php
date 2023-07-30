<?php

namespace App\Livewire\LandingPage\Development;

use Livewire\Component;

class SectionFinancingOptions extends Component
{

    public $financing_info = "En el Fraccionamiento Campestre, ofrecemos opciones de financiamiento flexibles para que puedas adquirir
    tu
    terreno de manera cómoda y adaptada a tus necesidades. Nuestros financiamientos se basan en el precio
    por
    metro cuadrado (m2) y varían según el plazo seleccionado por el cliente.";

    public $financing_price_base = "$50 USD";
    public $financing_lot_types = [
        [
            "id" => 1,
            "lot_type" => "Terrenos en esquina",
            "price" => "+$10 USD por m2"
        ],
        [
            "id" => 2,
            "lot_type" => "Terrenos con vista panorámica",
            "price" => "+$10 USD por m2"
        ],
        [
            "id" => 3,
            "lot_type" => "Terrenos cercanos a amenidades",
            "price" => "+$10 USD por m2"
        ]
    ];
    public function render()
    {
        return view('livewire.landing-page.development.section-financing-options');
    }
}
