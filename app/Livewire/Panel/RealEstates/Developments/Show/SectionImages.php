<?php

namespace App\Livewire\Panel\RealEstates\Developments\Show;

use Livewire\Component;

class SectionImages extends Component
{
    public $development_name;
    public $active = false;
    public $images;
    public $imageSelected;

    public function mount($development){
        $this->development_name = $development->name;
        $this->images = $development->images;
        if (empty($this->images)) {
            $this->imageSelected = $this->images[0]->file_url;
        }
        
    }

    public function render()
    {
        return view('livewire.panel.real-estates.developments.show.section-images');
    }

    public function selectImage($image) {
        $this->imageSelected = $image;
        $this->active = !$this->active;
    }
}
