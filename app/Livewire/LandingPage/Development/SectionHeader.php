<?php

namespace App\Livewire\LandingPage\Development;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class SectionHeader extends Component
{
    public $development_name = 'Fraccionamiento Verde Ladera';
    public $slogan = 'Bienvenido al lugar perfecto para vivir rodeado de naturaleza.';
    public $images = [];
    public $width = 0;


    public function mount() {
        $this->images = [
            [
                "id" => 1,
                "image" => Storage::url('developments/Palmares/Foto_1.jpeg')
            ],
            [
                "id" => 2,
                "image" => Storage::url('developments/Palmares/Foto_2.jpeg')
            ],
            [
                "id" => 3,
                "image" => Storage::url('developments/Palmares/Foto_3.jpeg')
            ]
        ];
        $this->width = count($this->images)*100;
    }
    public function render()
    {
        return view('livewire.landing-page.development.section-header');
    }
}
