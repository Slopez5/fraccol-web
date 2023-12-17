<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LotStatus extends Model
{
    use HasFactory;

    protected $table = 'lot_status';
    protected $fillable = ['name','description','is_active'];
}
