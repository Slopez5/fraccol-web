<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Declarations extends Model
{
    use HasFactory;

    protected $table = 'declarations';
    protected $fillable = ['part_id','number','description'];

    public function party(): BelongsTo {
        return $this->belongsTo(Parties::class,'party_id');
    }

    public function metadata(): MorphMany {
        return $this->morphMany(Metadata::class,'metadatable');
    }
}
