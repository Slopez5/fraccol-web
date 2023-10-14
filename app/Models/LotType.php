<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class LotType extends Model
{
    use HasFactory;

    public function developments(): BelongsToMany
    {
        return $this->belongsToMany(Development::class, 'development_lot_type','lot_type_id','development_id');
    }
}
