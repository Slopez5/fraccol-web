<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Subdomain extends Model
{
    use HasFactory;

    public function subdomainable(): MorphTo {
        return $this->morphTo();
    }
}
