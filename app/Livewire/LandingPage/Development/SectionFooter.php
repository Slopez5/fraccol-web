<?php

namespace App\Livewire\LandingPage\Development;

use Livewire\Component;

class SectionFooter extends Component
{
    public $name = "Fraccionamiento Campestre";
    public $email = "info@fraccionamientocampestre.com";
    public $phone = "+123 456 789";
    public function render()
    {
        return view('livewire.landing-page.development.section-footer');
    }
}
