<?php

namespace App\Livewire\LandingPage\Development;

use Livewire\Component;

class SectionLocation extends Component
{
    public $name = "Fraccionamiento Campestre";
    public $address = "Calle de la Naturaleza, Número 123";
    public $city_country = "Ciudad Campestre, País";
    public $nearby_attractions = [
        [
            "id" => 1,
            "name" => "Parque Natural \"Bosque Encantado\" (2 km)",
        ],
        [
            "id" => 2,
            "name" => "Lago Sereno (3 km)",
        ],
        [
            "id" => 3,
            "name" => "Centro Comercial \"La Pradera\" (5 km)",
        ]
    ];
    public $directions = "Desde la Ciudad Principal, toma la carretera X y sigue las señales hacia Ciudad Campestre. Una vez en
    la ciudad, sigue las señales hacia Fraccionamiento Campestre.";
    public $lat = 19.314809;
    public $lon = -103.675632;

    public function render()
    {
        return view('livewire.landing-page.development.section-location');
    }
}
