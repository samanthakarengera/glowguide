<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }


    public function send(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        // Bericht opslaan in de database
        $contactMessage = ContactMessage::create([
            'email' => $request->email,
            'message' => $request->message,
        ]);


        // Admin krijgt die mail
        Mail::raw(
            "Nieuw contactbericht van: {$contactMessage->email}\n\n" .
            $contactMessage->message,
            function ($mail) {

                $mail->to('admin@ehb.be');

                $mail->subject('Nieuw GlowGuide contactbericht');
            }
        );


        return redirect()
            ->route('contact')
            ->with('success', 'Your message has been sent successfully!');
    }
}