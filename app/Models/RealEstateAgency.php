<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RealEstateAgency extends Model
{
    use HasFactory;

    protected $table = 'real_estate_agencies';

    public function branches(): HasMany {
        return $this->hasMany(RealStateBranch::class);
    }

    public function developments(): HasMany {
        return $this->hasMany(Development::class);
    }
}
