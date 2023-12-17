<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lot extends Model
{
    use HasFactory, SoftDeletes;

     protected $table = 'lots';
    protected $fillable = ['lot_type_id','lot_number','block_number','lot_size'];

    public function metadata(): MorphMany {
        return $this->morphMany(Metadata::class,'metadatable');
    }

}
