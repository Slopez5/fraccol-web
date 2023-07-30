<?php

namespace App\Livewire\LandingPage\Development;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class SectionHeader extends Component
{
    public $development_name = 'Fraccionamiento Verde Ladera';
    public $slogan = 'Bienvenido al lugar perfecto para vivir rodeado de naturaleza.';
    public $background = '';


    public function mount() {
        $this->background = Storage::url('developments/Palmares/Foto_5.jpeg');
    }
    public function render()
    {
        return view('livewire.landing-page.development.section-header');
    }
}
