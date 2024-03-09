<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class DevelopmentPaymentPlan extends Pivot
{
    protected $table = 'development_lot_type_payment_plan';
    public function development(): BelongsTo
    {
        return $this->belongsTo(Development::class, 'development_id');
    }

    public function paymentPlans(): BelongsTo
    {
        return $this->belongsTo(PaymentPlan::class, 'payment_plan_id');
    }

    public function lotType(): BelongsTo
    {
        return $this->belongsTo(LotType::class,'lot_type_id');
    }
}