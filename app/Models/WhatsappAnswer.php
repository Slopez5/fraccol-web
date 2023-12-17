<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WhatsappAnswer extends Model
{
    use HasFactory;
    protected $table = "whatsapp_answers";
     protected $fillable = ['whatsapp_question_id','whatsapp_next_question_id','answer','value'];

    function question() : BelongsTo {
        return $this->belongsTo(WhatsappQuestion::class,'whatsapp_next_question_id');
    }
}
