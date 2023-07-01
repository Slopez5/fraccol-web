<?php

namespace App\Http\Controllers;

use App\Models\WhatsappAnswer;
use App\Models\WhatsappChat;
use App\Models\WhatsappQuestion;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    static public function getResponse($data)
    {
        $phone = $data["from"];
        $wbId = $data["whatsapp_business_account_id"];
        $message = $data["message"];

        $chat = WhatsappChat::where('whatsapp_business_id', $wbId)->where('phone', $phone)->where('is_answer', 1)->latest()->first();

        if ($chat) {
            if ($chat->whatsapp_question_id) {
                $answer = WhatsappAnswer::where('whatsapp_question_id', $chat->whatsapp_question_id)->where('value', $message)->get();
                if ($answer) {
                    $questionResponse = $answer[0]->question;
                    $question = "$questionResponse->title\n";
                    $question .= "$questionResponse->question\n\n\n";
                    foreach ($questionResponse->answers as $index => $answer) {
                        $question .= $index + 1 . ".- $answer->answer\n";
                    }
                    $data["id"] = $questionResponse->id;
                    $data["message"] = $question;
                    return $data;
                } else {
                    $questionResponse = WhatsappQuestion::find($chat->whatsapp_question_id);
                    $question = "$questionResponse->title\n";
                    $question .= "$questionResponse->question\n\n\n";
                    foreach ($questionResponse->answers as $index => $answer) {
                        $question .= $index + 1 . ".- $answer->answer\n";
                    }
                    $data["id"] = $questionResponse->id;
                    $data["message"] = $question;
                    return $data;
                }
            } else {
                $questionResponse = WhatsappQuestion::with("answers")->where('is_first_question', true)->first();
                $question = "$questionResponse->title\n";
                $question .= "$questionResponse->question\n\n\n";
                foreach ($questionResponse->answers as $index => $answer) {
                    $question .= $index + 1 . ".- $answer->answer\n";
                }
                $data["id"] = $questionResponse->id;
                $data["message"] = $question;
                return $data;
            }
            return $data;
        } else {
            $questionResponse = WhatsappQuestion::with("answers")->where('is_first_question', true)->first();
            $question = "$questionResponse->title\n";
            $question .= "$questionResponse->question\n\n\n";
            foreach ($questionResponse->answers as $index => $answer) {
                $question .= $index + 1 . ".- $answer->answer\n";
            }
            $data["id"] = $questionResponse->id;
            $data["message"] = $question;
            return $data;
        }
    }

    static public function create()
    {
        $question = new WhatsappQuestion();
        $question->answers = [new WhatsappAnswer()];
        return view('admin.chatbot.create', compact('question'));
    }

    static public function store()
    {
        return;
    }
}
