<?php

namespace App\Livewire\LandingPage\Development;

use Livewire\Component;

class SectionSocialMedia extends Component
{
    public $social_medias = [
        [
            "id" => 1,
            "name" => "Facebook",
            "url" => "",
            "icon" => ""
        ],
        [
            "id" => 2,
            "name" => "Instagram",
            "url" => "",
            "icon" => ""
        ],
        [
            "id" => 3,
            "name" => "Twitter",
            "url" => "",
            "icon" => ""
        ]
    ];
    public function render()
    {
        return view('livewire.landing-page.development.section-social-media');
    }
}
