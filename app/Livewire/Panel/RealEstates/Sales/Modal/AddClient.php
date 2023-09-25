<?php

namespace App\Livewire\Panel\RealEstates\Sales\Modal;

use App\Models\Lead;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class AddClient extends Component
{
    public $leads;
    public $leadSelected;

    public function mount() {
        //Todo validar leads de la inmobiliaria
        $this->leads = Lead::all();
    }

    public function render()
    {
        return view('livewire.panel.real-estates.sales.modal.add-client');
    }

    public function selectLead($id) {
        logger('select lead');
        $this->leadSelected = Lead::find($id);
        $this->dispatch('select-lead', lead: $this->leadSelected); 
    }

    #[On('update-leads')]
    public function updateLeads() {
        $this->leads = Lead::all();
    }
}
