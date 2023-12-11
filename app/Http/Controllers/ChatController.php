<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function index()
    {
        // baca tabel data
        $messages = DB::table('chat')->get();

        // Replace emoticon dengan images pada message
        foreach ($messages as $message) {
            $message->pesan = $this->convertEmoticonsToImages($message->pesan);
        }

        return view('viewchat', compact('messages'));
    }

    private function convertEmoticonsToImages($text)
    {
        // definisikan emoticons dan corresponding image names
        $emoticons = [':))' => '1.png', ':C' => '4.png', ':3' => '2.png', ';)' => '5.png', ':P' => '3.png'];

        // Replace emoticon with image tag using asset function
        foreach ($emoticons as $emoticon => $imageName) {
            $text = str_replace($emoticon, "<img src='" . asset("images/$imageName") . "' alt='$emoticon'>", $text);
        }

        return $text;
    }
}
