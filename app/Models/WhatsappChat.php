<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhatsappChat extends Model
{
    use HasFactory;

    protected $table = 'whatsapp_chats';
     protected $fillable = ['phoneID','whatsapp_question_id','whatsapp_business_id','phone','profile_name','value','is_answer'];
}
