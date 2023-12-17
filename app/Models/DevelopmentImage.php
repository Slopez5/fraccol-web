<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DevelopmentImage extends Model
{
    use HasFactory;

    protected $table = 'development_images';
    protected $fillable = ['development_id','file_url','width','height','description'];
}
