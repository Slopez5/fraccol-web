<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comission extends Model
{
    use HasFactory;

    protected $table = 'commissions';
    protected $fillable = ['lead_agent_id','appointment_id','commission','paid'];
}
