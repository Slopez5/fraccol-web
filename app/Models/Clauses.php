<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Clauses extends Model
{
    use HasFactory;

    protected $table = 'clauses';
    protected $fillable = ['part_id','number','description'];

    public function party(): BelongsTo {
        return $this->belongsTo(Parties::class,'party_id');
    }
}
