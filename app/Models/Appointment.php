<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $table = 'appointments';
    protected $fillable = ['customer_name','customer_phone','customer_email','customer_date','sattus','note','sale_closer_id','lead_agent_id'];
}
