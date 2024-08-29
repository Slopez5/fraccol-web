<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lote extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'lotes';
    protected $fillable = ['lote_type_id', 'lote_number', 'block_number', 'lote_size'];
    protected $hidden = ['created_at','updated_at','deleted_at'];
   
   public function development(): BelongsTo {
    return $this->belongsTo(Development::class,'development_id');
   }

   public function loteType(): BelongsTo {
    return $this->belongsTo(LoteType::class,'lote_type_id');
   }
   
    public function metadata(): MorphMany
    {
        return $this->morphMany(Metadata::class, 'metadatable');
    }
}
