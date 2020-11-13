<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageReceivedFile extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = $this->data['subject'];

        return $this->view('emails.messages-received')
                    ->subject($subject)
                    ->with([ 'data' => $this->data ])
                    ->attach(storage_path('app/public/'.$this->data['file']), [
                        'as' => $this->data['file'],
                        'mime' => $this->data['mime'],

                    ]);
;
    }
}
