<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;

class ContactController extends Controller
{
    public function submitContact(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Send email using Mailable
        Mail::to('adhi.wirahardi@gmail.com') // Replace with your email address
            ->send(new ContactFormSubmitted($validatedData));

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
