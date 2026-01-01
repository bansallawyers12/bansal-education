<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Show the contact form
     */
    public function show()
    {
        return view('contact');
    }

    /**
     * Handle contact form submission
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'preferredCourse' => ['nullable', 'string', 'max:255'],
            'educationLevel' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string'],
        ]);

        ContactRequest::create([
            'first_name' => $validated['firstName'],
            'last_name' => $validated['lastName'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'preferred_course' => $validated['preferredCourse'] ?? null,
            'education_level' => $validated['educationLevel'] ?? null,
            'message' => $validated['message'],
            'is_read' => false,
        ]);

        return redirect()->route('contact')->with('success', 'Thank you for contacting us! We will get back to you within 24 hours.');
    }
}
