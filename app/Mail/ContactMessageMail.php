<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessageMail extends Mailable
{
    use Queueable, SerializesModels;

    public string $messageContent;

    // Ontvang het bericht van de bezoeker
    public function __construct(string $messageContent)
    {
        $this->messageContent = $messageContent;
    }

    // Bepaal de inhoud van de mail
    public function build()
    {
        return $this
            ->subject('New GlowGuide contact message')
            ->view('emails.contact');
    }
}