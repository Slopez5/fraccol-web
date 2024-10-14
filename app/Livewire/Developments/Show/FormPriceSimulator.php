<?php

namespace App\Livewire\Developments\Show;

use App\Models\PaymentPlan;
use Livewire\Attributes\On;
use Livewire\Component;

class FormPriceSimulator extends Component
{
    public $development;
    public $loteSelected;

    public $lote_number;
    public $block_number;
    public $price = 0;
    public $lote_size;
    public $payment_plan_id = -1;
    public $payment_down = 0;

    public $price_per_sqm = 0;
    public $payment_monthly;
    public $anuality;


    public function updatedPaymentPlanId($value)
    {
        $this->getPrice();
        $this->payment_monthly = 0;
        $this->anuality = 0;
        $this->payment_down = $this->getPaymentDown($value);
    }

    private function getPaymentDown($value)
    {
        if ($value != -1) {
            if ($this->loteSelected) {
                $loteTypeSelected = $this->loteSelected->loteType;
                return $this->development->loteTypes->where('id', $loteTypeSelected->id)->first()->paymentPlans->where('id', $value)->first()->pivot->down_payment;
            }
        }
    }

    public function updatedPaymentDown($value)
    {
        $this->payment_monthly = 0;
        $this->anuality = 0;
    }

    private function getPrice()
    {
        $this->price_per_sqm = 0;
        if ($this->loteSelected) {
            $loteTypeSelected = $this->loteSelected->loteType;
            if ($this->payment_plan_id != -1) {
                $this->price_per_sqm = $this->development->loteTypes->where('id', $loteTypeSelected->id)->first()->paymentPlans->where('id', $this->payment_plan_id)->first()->pivot->price_per_sqm;
            } else {
                $this->price_per_sqm = $this->development->loteTypes->where('id', $loteTypeSelected->id)->first()->pivot->price;
            }
        }
        $this->price = $this->price_per_sqm * $this->lote_size;
    }

    public function mount($development)
    {
        $this->development = $development;
        $this->development->load('paymentPlans');
        $this->development->load('loteTypes.paymentPlans');
        $this->getPrice();
    }

    public function render()
    {
        return view('livewire.developments.show.form-price-simulator');
    }

    #[On('selectLote')]
    public function selectLote($lote)
    {
        $loteId = $lote["id"];
        $loteSize = $lote["area"];
        $this->lote_size = $loteSize;
        $this->lote_number = explode('L', explode('M', $loteId)[0])[1];
        $this->block_number = explode('M', $loteId)[1];
        $this->loteSelected = $this->development->lotes->where('lote_number', $this->lote_number)->where('block_number', $this->block_number)->first();

        $this->getPrice();
    }

    public function calculate()
    {
        $this->validate([
            'lote_number' => 'required',
            'block_number' => 'required',
            'lote_size' => 'required',
            'payment_plan_id' => 'required',
            'price' => 'required',
            'payment_down' => 'required',
        ]);
        $this->payment_monthly = str_replace(',', '', $this->payment_monthly);
        $this->anuality = str_replace(',', '', $this->anuality);

        $paymentPlanSelected = null;
        if ($this->payment_plan_id != -1) {
            $paymentPlanSelected = PaymentPlan::find($this->payment_plan_id);
            $this->payment_monthly = $this->updatePaymentMonthly($paymentPlanSelected);
            $this->anuality = $this->updateAnuality($paymentPlanSelected);
            // $this->payment_monthly format $ 1,000.00
            $this->payment_monthly = number_format($this->payment_monthly, 2, '.', ',');
            // Validate if anuality is not null or not numeric
            if ($this->anuality == null || !is_numeric($this->anuality)) {
                $this->anuality = 0;
            }
            $this->anuality = number_format($this->anuality, 2, '.', ',');
        } else {
            $this->payment_monthly = 0;
            $this->anuality = 0;
        }
    }

    private function updatePaymentMonthly(PaymentPlan $paymentPlanSelected)
    {
        $payment_monthly = ($this->price - $this->payment_down) / $paymentPlanSelected->financing_months;

        if ($this->payment_monthly != $payment_monthly) {
            if ($this->payment_monthly < 2000) {
                return $payment_monthly;
            }
        }
        return $this->payment_monthly;
    }

    private function updateAnuality(PaymentPlan $paymentPlanSelected)
    {
        $payment_monthly = ($this->price - $this->payment_down) / $paymentPlanSelected->financing_months;
        if (($payment_monthly - $this->payment_monthly) * 12 > 0) {
            return ($payment_monthly - $this->payment_monthly) * 12;
        } else {
            return 0;
        }
    }
}
