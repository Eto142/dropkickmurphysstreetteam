<?php

namespace App\Http\Controllers;

use App\Mail\SendUserEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function send(Request $request)
    {
        // Validate the request input
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $message = $request->message;

        // Prepare the data for the email (escaping any HTML tags for safety)
        $data = "<p>" . e($message) . "</p>";

        $subject = $request->subject;

        // Send the email using the SendUserEmail mailable
        Mail::to($request->email)->send(new SendUserEmail($data, $subject));

        // Redirect back with a success message
        return back()->with('status', 'Email successfully sent!');
    }
}
