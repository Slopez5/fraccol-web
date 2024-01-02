<?php

namespace App\Livewire;

use Livewire\Component;

class DevelopmentConfigurationView extends Component
{
    public $development;
    public $loteTypes = [];
    public $paymentPlans = [];
    public $lotes = [];
    public $contracts = [];
    public $metadata = [];
    public $loteTypeSelected = 1;
    public $loteSelected = 1;

    public function render()
    {
        $this->loteTypes = $this->development->lotTypes;
        $this->paymentPlans = $this->development->lotTypes->where('id', '=', $this->loteTypeSelected)->first()->paymentPlans;
        $this->metadata = $this->development->metadata;
        $this->lotes = $this->development->lotes;
        return view('livewire.development-configuration-view');
    }

    public function selectLoteType($loteType)
    {
        $this->loteTypeSelected = $loteType;
    }

    public function selectLote($lote)
    {
        return redirect()->route('test');
        // $this->loteSelected = $lote;
    }
}
