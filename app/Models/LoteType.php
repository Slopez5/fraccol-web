<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class LoteType extends Model
{
    use HasFactory;

    protected $table = 'lote_types';
    protected $fillable = ['name', 'description'];
    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function developments(): BelongsToMany
    {
        return $this->belongsToMany(Development::class, 'development_lote_type', 'lote_type_id', 'development_id');
    }

    public function paymentPlans(): belongsToMany
    {
        return $this->belongsToMany(PaymentPlan::class, 'development_lote_type_payment_plan', 'lote_type_id', 'payment_plan_id')->withPivot(['price_per_sqm', 'down_payment']);
    }

    public function metadata(): MorphMany
    {
        return $this->MorphMany(Metadata::class, 'metadatable');
    }
}
