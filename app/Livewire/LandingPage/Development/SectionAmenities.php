<?php

namespace App\Livewire\LandingPage\Development;

use Livewire\Component;

class SectionAmenities extends Component
{
    public $amenities = [
        [
            "id" => 1,
            "name"=>"Piscina al aire libre",
            "description"=>"Disfruta de nuestra amplia piscina rodeada de áreas verdes, perfecta para relajarte y disfrutar de días soleados."
        ],
        [
            "id" => 2,
            "name"=>"Áreas recreativas",
            "description"=>"Contamos con espacios recreativos para toda la familia, ideales para realizar actividades al aire libre y convivir con amigos y vecinos."
        ],
        [
            "id" => 3,
            "name"=>"Canchas deportivas",
            "description"=>"Practica tu deporte favorito en nuestras canchas de tenis y básquetbol, diseñadas para que disfrutes del deporte rodeado de naturaleza."
        ]
    ];


    public function render()
    {
        return view('livewire.landing-page.development.section-amenities');
    }
}
