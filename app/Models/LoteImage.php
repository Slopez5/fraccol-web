<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoteImage extends Model
{
    use HasFactory;

    protected $table = 'lote_images';
    protected $fillable = ['lote_id','image_url','title','description'];
}
