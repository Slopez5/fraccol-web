<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $table = 'sales';
    protected $fillable = ['lead_id','lead_agent_id','sale_closer_id','activity_id,','development_id','total_price','down_payment','remaining_balance','sale_date','status'];
}
