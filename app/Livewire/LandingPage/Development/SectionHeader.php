<?php

namespace App\Livewire\LandingPage\Development;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class SectionHeader extends Component
{
    public $development_name = '';
    public $slogan = '';
    public $images = [];


    public function mount($header) {
        $this->development_name = $header->development_name;
        $this->slogan = $header->slogan;
        $this->images = $header->images;
    }
    public function render()
    {
        return view('livewire.landing-page.development.section-header');
    }
}
