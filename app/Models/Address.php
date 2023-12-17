<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Address extends Model
{
    use HasFactory;

    protected $table = 'addresses';

    protected $fillable = ['street','country_id','state_id','city_id','zip_code'];

    public function branch(): HasOne {
        return $this->hasOne(RealStateBranch::class);
    }

    public function city(): BelongsTo {
        return $this->belongsTo(City::class);
    }

    public function state(): BelongsTo {
        return $this->belongsTo(State::class);
    }
}
