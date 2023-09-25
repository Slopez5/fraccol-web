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

    
    public $currentTab = 1;

    public function render()
    {
        return view('livewire.panel.real-estates.sales.form-create-sale');
    }

    public function save()
    {
        /*if (empty($this->leadSelected)) {
            logger('crear');
            $this->lead->store();
            $this->dispatch('update-leads');
            $this->clearForm();
            
        } else {
            logger('editar');
            $this->leadSelected = $this->lead;
            $this->leadSelected->update();
            $this->dispatch('update-leads');
            $this->clearForm();
            
        }*/
    }

    public function back() {
        if ($this->currentTab == 3) {
            $this->dispatch('back-developments-tab');
        } else {
            $this->dispatch('back-leads-tab');
        }
        $this->currentTab--;
    }

    public function next() {

        if ($this->currentTab == 1) {
            $this->dispatch('next-developments-tab');
        } else {
            $this->dispatch('next-sales-tab');
        }
        $this->currentTab++;
    }

    public function clearForm()
    {
        $this->leadSelected->clear();
        $this->lead->clear();
    }
}
