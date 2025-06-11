<?php

namespace VictorKipkoech\Portfolio\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactData;

    public function __construct(array $contactData)
    {
        $this->contactData = $contactData;
    }

    public function build()
    {
        return $this->subject('New Contact Form Submission - ' . $this->contactData['subject'])
                    ->view('portfolio::emails.contact')
                    ->with('data', $this->contactData);
    }
}