<?php

namespace App\Livewire\Panel\RealEstates\Sales;

use App\Livewire\Forms\Panel\RealEstates\Sales\LeadForm;
use Carbon\Carbon;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class FormCreateSale extends Component
{
    use WithFileUploads;

    public LeadForm $leadSelected;
    public LeadForm $lead;

    public function render()
    {
        return view('livewire.panel.real-estates.sales.form-create-sale');
    }

    public function save() {
        if ($this->leadSelected->toJSON() != $this->lead->toJSON()) {
            logger("usare lead");
        } else {
            logger("usare leadSelected");
        }
    }

    #[On('save-lead')]
    public function saveLead($lead) {
        $this->leadSelected->setLead($lead);
        $this->lead->setLead($lead);
    }
}
