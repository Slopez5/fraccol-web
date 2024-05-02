<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class RealEstateAgency extends Model
{
    use HasFactory;

    protected $table = 'real_estate_agencies';
    protected $fillable = ['admin_id', 'name', 'email', 'phone'];
    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function admin(): BelongsTo {
        return $this->BelongsTo(User::class,'admin_id');
    }

    public function agents(): BelongsToMany {
        return $this->belongsToMany(User::class,'real_estate_user','real_estate_id','user_id');
    }

    public function branches(): HasMany
    {
        return $this->hasMany(RealEstateBranch::class, 'real_estate_agency_id');
    }

    public function developments(): HasMany
    {
        return $this->hasMany(Development::class, 'real_estate_id');
    }
}
