<?php

namespace App\Livewire\LandingPage\Development;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class SectionGallery extends Component
{
    public $photos = [];

    public function mount($gallery) {
        $this->photos = $gallery;
    }
    public function render()
    {
        return view('livewire.landing-page.development.section-gallery');
    }
}
