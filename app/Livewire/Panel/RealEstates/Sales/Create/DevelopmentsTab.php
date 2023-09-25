<?php

namespace App\Livewire\Panel\RealEstates\Sales\Create;

use App\Models\Development;
use Livewire\Attributes\On;
use Livewire\Component;

class DevelopmentsTab extends Component
{
    public $developments;
    public $lote = 1;
    public $block = 1;
    public $area;
    public $precio;
    public $plan_financing_id_selected = 2;
    public $plan_financing_selected = [
        "id" => 2,
        "name" => "1 año",
        "meses" => 12
    ];
    public $enganche = 5000;
    public $mensualidad = 0;
    public $plan_financing = [
        [
            "id" => 1,
            "name" => "Contado",
            "meses" => null
        ],
        [
            "id" => 2,
            "name" => "1 año",
            "meses" => 12
        ],
        [
            "id" => 3,
            "name" => "2 años",
            "meses" => 24
        ],
        [
            "id" => 4,
            "name" => "3 años",
            "meses" => 36
        ],
        [
            "id" => 5,
            "name" => "4 años",
            "meses" => 48
        ],
        [
            "id" => 6,
            "name" => "5 años",
            "meses" => 60
        ],
        [
            "id" => 7,
            "name" => "6 años",
            "meses" => 72
        ]
    ];

    public function updated($name, $value)
    {
        logger($name);
        logger($value);
    }

    public function mount()
    {
        $this->developments = Development::all();
    }

    public function render()
    {
        return view('livewire.panel.real-estates.sales.create.developments-tab');
    }

    public function back()
    {

        $this->dispatch('back-leads-tab');
    }

    public function saveDevelopment()
    {
        $this->calculateMonthly();
    }

    public function calculateMonthly() {
        $plan_financing_index = array_search($this->plan_financing_id_selected, array_column($this->plan_financing, "id"));
        $this->plan_financing_selected = $this->plan_financing[$plan_financing_index];
        $this->mensualidad = ($this->precio - $this->enganche ) / $this->plan_financing_selected["meses"];
    }

    public function next()
    {
        $this->dispatch('next-sales-tab');
    }

    #[On('select-lote')]
    public function selectLote($loteString, $area)
    {

        $this->area = $area["area"];
        $pattern = '/L(\d+)M(\d+)/';
        $this->precio = 640 * $this->area;
        if (preg_match($pattern, $loteString["loteString"], $matches)) {
            $this->lote = $matches[1];
            $this->block = $matches[2];
        }
        $this->calculateMonthly();
    }
}
