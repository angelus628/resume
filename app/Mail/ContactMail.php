<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    private array $message;

    /**
     * Create a new message instance.
     *
     * @param array $message
     */
    public function __construct(array $message)
    {
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): Mailable
    {
        return $this->from(env('MAILGUN_LOGIN'), config('app.name'))
                ->view('mail.contact')
                ->with([
                    'sender'  => $this->message['contactEmail'],
                    'name'    => $this->message['contactName'],
                    'subject' => $this->message['contactSubject'],
                    'content' => $this->message['contactMessage'],
                ]);
    }
}
