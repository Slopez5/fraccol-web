<?php

namespace App\Livewire\LandingPage\Development;

use Livewire\Component;

class SectionReviews extends Component
{

    public $reviews = [
        [
            "id" => 1,
            "name" => "Juan Pérez",
            "review" => "\"¡Excelente lugar para vivir! Disfruto de la tranquilidad y las hermosas vistas todos los días. Las amenidades son fantásticas y la comunidad es muy amigable. ¡Lo recomiendo totalmente!\""
        ],
        [
            "id" => 2,
            "name" => "María Gómez",
            "review" => "\"Llevo viviendo aquí por varios años y no podría estar más feliz con mi elección. La ubicación es perfecta, rodeada de naturaleza y cerca de todo lo que necesito. Sin duda, el mejor fraccionamiento en el que he vivido.\""
        ]
    ];
    public function render()
    {
        return view('livewire.landing-page.development.section-reviews');
    }
}
