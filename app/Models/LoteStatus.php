<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LoteStatus extends Model
{
    use HasFactory;

    protected $table = 'lote_statuses';
    protected $fillable = ['name','description','is_active'];

    public function lotes() : HasMany {
        return $this->hasMany(Lote::class);
    }
    
}
