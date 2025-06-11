<?php

namespace VictorKipkoech\Portfolio\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use VictorKipkoech\Portfolio\Http\Requests\ContactRequest;
use VictorKipkoech\Portfolio\Services\ContactService;

class ContactController extends Controller
{
    protected $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }

    public function store(ContactRequest $request)
    {
        try {
            $this->contactService->handleContactForm($request->validated());
            
            return response()->json([
                'success' => true,
                'message' => 'Thank you for your message! I\'ll get back to you soon.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, there was an error sending your message. Please try again.'
            ], 500);
        }
    }
}