<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Subdomain extends Model
{
    use HasFactory;

    protected $table = 'subdomains';
    protected $fillable = ['subdomain','notes','subdomainable_type','subdomainable_id'];

    public function subdomainable(): MorphTo {
        return $this->morphTo();
    }
}
