<?php

namespace App\Livewire\LandingPage\Development;

use Livewire\Component;

class SectionDevelopmentInfo extends Component
{
    public $welcome_info = "";

    public $outstanding_features = [];

    public $footer_info = "";

    public function mount($developmentInfo) {
        $this->welcome_info = $developmentInfo->welcome_info;
        $this->outstanding_features = $developmentInfo->outstanding_features;
        $this->footer_info = $developmentInfo->footer_info;
    }

    public function render()
    {
        return view('livewire.landing-page.development.section-development-info');
    }
}
