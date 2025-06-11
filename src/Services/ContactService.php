<?php

namespace VictorKipkoech\Portfolio\Services;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use VictorKipkoech\Portfolio\Mail\ContactFormMail;
use VictorKipkoech\Portfolio\Models\Contact;

class ContactService
{
    public function handleContactForm(array $data)
    {
        // Store contact in database
        $contact = Contact::create($data);
        
        // Send email notification
        try {
            Mail::to(config('portfolio.email'))
                ->send(new ContactFormMail($data));
        } catch (\Exception $e) {
            Log::error('Failed to send contact form email: ' . $e->getMessage());
        }
        
        return $contact;
    }
}