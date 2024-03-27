<?php

namespace App\Livewire\LandingPage;

use Livewire\Component;

class PopularPlace extends Component
{
    public $places = [
        [
            "delay" => 150,
            "image" => 'https://cuauhtemoc-col.gob.mx/portal/assets/images/carousel/3.jpg',
            "place" => 'Cuauhtemoc',
            "properties" => 3,
        ],
        [
            "delay" => 250,
            "image" => 'https://i1.wp.com/www.conocemanzanillo.com/wp-content/uploads/2020/06/Colima-Manzanillo.jpg?fit=925%2C540&ssl=1',
            "place" => 'Colima',
            "properties" => 1,
        ],
        [
            "delay" => 350,
            "image" => 'https://www.entornoturistico.com/wp-content/uploads/2023/06/Letras-monumentales-de-Comala-660x330.jpg',
            "place" => 'Comala',
            "properties" => 4,
        ]
    ];
    public function render()
    {
        return view('livewire.landing-page.popular-place');
    }
}
