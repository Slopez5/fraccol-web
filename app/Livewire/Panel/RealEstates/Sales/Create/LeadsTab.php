<?php

namespace App\Livewire\Panel\RealEstates\Sales\Create;

use App\Livewire\Forms\Panel\RealEstates\Sales\LeadForm;
use Livewire\Attributes\On;
use Livewire\Component;

class LeadsTab extends Component
{
    public LeadForm $leadSelected;
    public LeadForm $lead;

    public function render()
    {
        return view('livewire.panel.real-estates.sales.create.leads-tab');
    }

    #[On('select-lead')]
    public function saveLead($lead)
    {

        $this->leadSelected->setLead($lead);
        $this->lead->setLead($lead);
        logger($this->lead);
    }

    public function next()
    {
        $this->dispatch('next-developments-tab');
    }
}
