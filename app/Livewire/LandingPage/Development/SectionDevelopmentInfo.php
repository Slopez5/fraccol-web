<?php

namespace App\Livewire\LandingPage\Development;

use Livewire\Component;

class SectionDevelopmentInfo extends Component
{
    public $welcome_info = "Bienvenido al Fraccionamiento Campestre, un lugar paradisíaco rodeado de naturaleza y tranquilidad.
    Nuestro fraccionamiento está ubicado en la hermosa región campestre, a solo 30 minutos de la ciudad,
    lo que te permitirá disfrutar de la serenidad del campo sin sacrificar la comodidad de la vida urbana.";

    public $outstanding_features = [
        [
            "id"=>1,
            "name" => "Extensas áreas verdes y paisajes impresionantes."
        ],
        [
            "id"=>2,
            "name" => "Seguridad las 24 horas para la tranquilidad de los residentes."
        ],
        [
            "id"=>3,
            "name" => "Amenidades para toda la familia, incluyendo piscinas, áreas recreativas y canchas deportivas."
        ],
        [
            "id"=>4,
            "name" => "Senderos para caminatas y actividades al aire libre."
        ],
        [
            "id"=>5,
            "name" => "Acceso cercano a atracciones turísticas y centros comerciales."
        ],
        [
            "id"=>6,
            "name" => "Variedad de opciones de vivienda para satisfacer tus necesidades y gustos."
        ],
    ];

    public $footer_info = "Descubre la armonía entre la vida moderna y la naturaleza en el Fraccionamiento Campestre. ¡Ven y sé
    parte
    de nuestra comunidad!";

    public function render()
    {
        return view('livewire.landing-page.development.section-development-info');
    }
}
