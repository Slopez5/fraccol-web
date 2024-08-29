<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointment extends Model
{
    use HasFactory;

    protected $table = 'appointments';
    protected $fillable = ['lead_id','customer_name','customer_phone','customer_email','appointment_date','status','notes','development_id','sale_closer_agent_id','lead_agent_id'];

    public function development():BelongsTo
    {
        return $this->belongsTo(Development::class,'development_id');
    }
    
}
