<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Development extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'developments';
    protected $fillable = ['name', 'real_estate_id', 'real_estate_branch_id', 'location', 'total_land_area', 'total_lotes', 'available_lotes','logo','blueprint','start_date','end_date','sort_description','full_description','status','image'];
    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function subdomain(): MorphOne
    {
        return $this->morphOne(Subdomain::class, 'subdomainable');
    }

    public function realEstatesAgency(): BelongsTo
    {
        return $this->belongsTo(RealEstateAgency::class, 'real_estate_id', 'id');
    }

    public function realEstatesBranch(): BelongsTo
    {
        return $this->belongsTo(RealEstateBranch::class, 'real_estate_branch_id', 'id');
    }

    public function loteTypes(): BelongsToMany
    {
        return $this->belongsToMany(LoteType::class, 'development_lote_type', 'development_id', 'lote_type_id')->withPivot('price')->withTimestamps();
    }

    public function lotes(): HasMany
    {
        return $this->hasMany(Lote::class, 'development_id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(DevelopmentImage::class, 'development_id');
    }

    public function paymentPlans(): belongsToMany
    {
        return $this->belongsToMany(PaymentPlan::class, 'development_lote_type_payment_plan')->withPivot(['lote_type_id','price_per_sqm','down_payment'])->using(DevelopmentPaymentPlan::class)->withTimestamps();
    }

    public function contracts(): HasMany
    {
        return $this->hasMany(Contract::class, 'development_id');
    }

    public function appointments(): HasMany {
        return $this->hasMany(Appointment::class,'development_id');
    }

    public function metadata(): MorphMany
    {
        return $this->MorphMany(Metadata::class,'metadatable');
    }
}
