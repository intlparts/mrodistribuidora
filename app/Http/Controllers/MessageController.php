<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
        $data = ['message' => 'This is a test!'];

        Mail::to('john@example.com')->send(new MessageReceived($data));

        return response()->json('Correo enviado');
    }
}
