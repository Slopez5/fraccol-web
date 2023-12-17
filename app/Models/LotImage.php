<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LotImage extends Model
{
    use HasFactory;

    protected $table = 'lot_images';
    protected $fillable = ['lot_id','image_url','title','description'];
}
