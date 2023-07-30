<?php

namespace App\Livewire\LandingPage\Development;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class SectionBlueprint extends Component
{
    public $image = "";

    public function mount() {
        $this->image = Storage::url('planos/Palmares.png');
    }

    public function render()
    {
        return view('livewire.landing-page.development.section-blueprint');
    }
}
