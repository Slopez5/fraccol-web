<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Development extends Model
{
    use HasFactory;

    public function subdomain():MorphOne {
        return $this->morphOne(Subdomain::class,'subdomainable');
    }

    public function realStateAgency(): BelongsTo
    {
        return $this->belongsTo(realStateAgency::class, 'real_state_id', 'id');
    }

    public function lotTypes(): BelongsToMany
    {
        return $this->belongsToMany(LotType::class, 'development_lot_type', 'development_id', 'lot_type_id');
    }

    public function lots(): HasMany {
        return $this->hasMany(Lot::class,'id');
    }

}
