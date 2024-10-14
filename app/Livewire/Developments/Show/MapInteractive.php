<?php

namespace App\Livewire\Developments\Show;

use Livewire\Attributes\On;
use Livewire\Component;

class MapInteractive extends Component
{

    // get id development from path url
    public $development;

    public function mount($development)
    {
        $this->development = $development;
       
    }

    public function render()
    {
        return view('livewire.developments.show.map-interactive');
    }

    // 
    

}
