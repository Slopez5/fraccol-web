<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Development extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name','real_estate_id','real_estate_branch_id', 'location','total_land_area','total_lots','available_lots'];

    public function subdomain():MorphOne {
        return $this->morphOne(Subdomain::class,'subdomainable');
    }

    public function realEstatesAgency(): BelongsTo
    {
        return $this->belongsTo(RealEstateAgency::class, 'real_estate_id', 'id');
    }

    public function lotTypes(): BelongsToMany
    {
        return $this->belongsToMany(LotType::class, 'development_lot_type', 'development_id', 'lot_type_id')->withPivot('price');
    }

    public function lotes(): HasMany {
        return $this->hasMany(Lot::class,'development_id');
    }

    public function images(): HasMany {
        return $this->hasMany(DevelopmentImage::class,'development_id');
    }

    public function paymentPlans(): HasMany {
        return $this->hasMany(PaymentPlan::class,'development_id');
    }

}
