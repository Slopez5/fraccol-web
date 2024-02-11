<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lot extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'lots';
    protected $fillable = ['lot_type_id', 'lot_number', 'block_number', 'lot_size'];
    protected $hidden = ['created_at','updated_at','deleted_at'];
   
   public function development(): BelongsTo {
    return $this->belongsTo(Development::class,'development_id');
   }

   public function loteType(): BelongsTo {
    return $this->belongsTo(LotType::class,'lot_type_id');
   }
   
    public function metadata(): MorphMany
    {
        return $this->morphMany(Metadata::class, 'metadatable');
    }
}
