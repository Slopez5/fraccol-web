<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointment extends Model
{
    use HasFactory;

    protected $table = 'appointments';
    protected $fillable = ['development_id','customer_name','customer_phone','customer_email','customer_date','sattus','note','sale_closer_id','lead_agent_id'];

    public function development():BelongsTo
    {
        return $this->belongsTo(Development::class,'development_id');
    }
    
}
