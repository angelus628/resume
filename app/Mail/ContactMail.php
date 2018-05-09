<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAILGUN_LOGIN'), config('app.name'))
                ->view('mail.contact')
                ->with(array(
                    'sender'  => $this->message['contactEmail'],
                    'name'    => $this->message['contactName'],
                    'subject' => $this->message['contactSubject'],
                    'content' => $this->message['contactMessage'],
                ));
    }
}
