<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WhatsappQuestion extends Model
{
    use HasFactory;

    protected $table = "whatsapp_questions";

    public function answers(): HasMany {
        return $this->hasMany(WhatsappAnswer::class,'whatsapp_question_id','id');
    }
}
