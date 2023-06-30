<?php

namespace App\Http\Controllers;

use App\Models\WhatsappChat;
use App\Models\WhatsappQuestion;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    static public function getResponse($data) {
        $phone = $data["from"];
        $wbId = $data["whatsapp_business_account_id"];
        $message = $data["message"];

        $chats = WhatsappChat::where('whatsapp_bussiness_id',$wbId)->get();

        if (count($chats) > 0) {

        } else {
            $questionResponse = WhatsappQuestion::with("answers")->where('is_first_question',true)->first();
            $question = "$questionResponse->title\n";
            $question .= "$questionResponse->question\n\n\n";
            foreach ($questionResponse->answers as $index => $answer) {
                $question .= "$index.- $answer->answer\n";
            }
            return $question;
        }


    }
}
