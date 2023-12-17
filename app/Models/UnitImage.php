<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitImage extends Model
{
    use HasFactory;

    protected $table = 'unit_images';
    protected $fillable = ['unit_id','image_url','title','description'];
}
