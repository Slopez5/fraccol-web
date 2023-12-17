<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Metadata extends Model
{
    use HasFactory;

    protected $table = 'metadata';
    protected $fillable = ['metadatable_type','metadatable_id','key','value'];

    public function metadatable(): MorphTo {
        return $this->morphTo();
    }
}
