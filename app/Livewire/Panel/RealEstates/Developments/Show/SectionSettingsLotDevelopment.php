<?php

namespace App\Livewire\Panel\RealEstates\Developments\Show;

use Livewire\Component;

class SectionSettingsLotDevelopment extends Component
{
    public $lot_types = [];
    public $payment_plans = [];
    public $lotSize = 0;
    public $annuty = 0;
    public $lotTypeSelected;
    public $financingPlanSelected;
    public $priceLot = 0;
    public $development_id;

    public function mount($development)
    {
        $this->lot_types = $development->lotTypes;
        $this->development_id = $development->id;
    }

    public function updated() {
        if ($this->lotSize != '') {
            $this->priceLot = $this->lotSize * 990;
        } else {
            $this->priceLot = 0;
        }
       
    }

    public function selectLotType() {

    }

    public function selectPaymentPlan() {

    }

    public function render()
    {
        return view('livewire.panel.real-estates.developments.show.section-settings-lot-development');
    }
}
