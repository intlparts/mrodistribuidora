<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceivedFile;
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
        $file = $request->file('file');

        if ($file != '') {
            $fileName = $file->getClientOriginalName();
            $mime = $file->getMimeType();
            \Storage::disk('public')->put($fileName,  \File::get($file));
        } else {
            $fileName = 'Sin Archivo';
            $mime = '';
        }

        $data = [
            'name' => $request['name'],
            'email' => $request['email'],
            'subject' => $request['subject'],
            'message' => $request['message'],
            'file' => $fileName,
            'mime' => $mime,
        ];

        $to = 'jonathanch1991@gmail.com';

        if ($file != '') {
            Mail::to([$to])->send(new MessageReceivedFile($data));
        } else {
            Mail::to([$to])->send(new MessageReceived($data));
        }

        return response()->json('Correo enviado');
    }
}
