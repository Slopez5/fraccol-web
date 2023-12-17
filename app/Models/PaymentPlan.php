<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentPlan extends Model
{
    use HasFactory;

    protected $table = 'payment_plans';
    protected $fillable = ['development_id','lot_type_id','name','description','price_per_sqm','financing_months','down_payment'];
}
