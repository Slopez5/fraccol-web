<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalePayment extends Model
{
    use HasFactory;

    protected $table = 'sale_payments';
    protected $fillable = ['sale_id','payment_date','payment_amonut','balance','notes'];
}
