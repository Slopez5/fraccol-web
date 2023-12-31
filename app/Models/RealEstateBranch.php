<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class RealEstateBranch extends Model
{
    use HasFactory;

    protected $table = 'real_estate_branches';

    protected $fillable = ['name','email','phone','address_id'];

    public function address() : BelongsTo {
        return $this->belongsTo(Address::class);
    }
}
