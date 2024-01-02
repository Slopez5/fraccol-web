<?php

namespace App\Livewire;

use Livewire\Component;

class DevelopmentCardView extends Component
{
    public $development;
    public function render()
    {
        return view('livewire.development-card-view');
    }

    public function goToDevelopment()
    {
        $id = $this->development->id;
        return redirect()->route('show.development', $id);
    }
}
