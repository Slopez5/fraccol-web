<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contract extends Model
{
    use HasFactory;

    public function parties(): BelongsToMany {
        return $this->belongsToMany(Parties::class,'contracts_parties','contract_id','party_id')->withTimestamps();
    }

    public function declarations(): HasMany {
        return $this->hasMany(Declarations::class,'contract_id');
    }

    public function clauses(): HasMany {
        return $this->hasMany(Clauses::class,'contract_id');
    }
}
