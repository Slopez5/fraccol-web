<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Development extends Model
{
    use HasFactory;

    public function realStateAgency(): BelongsTo
    {
        return $this->belongsTo(realStateAgency::class,'real_state_id','id');
    }
}
