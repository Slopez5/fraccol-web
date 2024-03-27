<?php

namespace App\Livewire\LandingPage;

use Livewire\Component;

class TabItemSearch extends Component
{

    public string $id;
    public string $type;
    public string $status;
    public $dataTabItem;


    public function mount($id, $type, $status = "", $dataTabItem = null) {
        $this->id = $id;
        $this->type = $type;
        $this->status = $status;
        $this->dataTabItem = $dataTabItem;
    }

    public function render()
    {
        return view('livewire.landing-page.tab-item-search');
    }
}
