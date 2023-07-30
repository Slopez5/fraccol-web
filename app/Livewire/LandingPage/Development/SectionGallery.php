<?php

namespace App\Livewire\LandingPage\Development;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class SectionGallery extends Component
{
    public $photos = [];

    public function mount() {
        $this->photos = [
            [
                "id"=>1,
                "photo"=>Storage::url("/developments/Palmares/Foto_1.jpeg"),
            ],
            [
                "id"=>2,
                "photo"=>Storage::url("/developments/Palmares/Foto_2.jpeg"),
            ],
            [
                "id"=>3,
                "photo"=>Storage::url("/developments/Palmares/Foto_3.jpeg"),
            ],
            [
                "id"=>4,
                "photo"=>Storage::url("/developments/Palmares/Foto_4.jpeg"),
            ],
            [
                "id"=>5,
                "photo"=>Storage::url("/developments/Palmares/Foto_5.jpeg"),
            ],
            [
                "id"=>6,
                "photo"=>Storage::url("/developments/Palmares/Foto_6.jpeg"),
            ],
            [
                "id"=>7,
                "photo"=>Storage::url("/developments/Palmares/Foto_7.jpeg"),
            ],
            [
                "id"=>8,
                "photo"=>Storage::url("/developments/Palmares/Foto_8.jpeg"),
            ]
        ];
    }
    public function render()
    {
        return view('livewire.landing-page.development.section-gallery');
    }
}
