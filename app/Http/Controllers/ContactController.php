<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    // contact pagina tonen
    public function index()
    {
        return view('contact.index');
    }

    // email versturen
    public function send(Request $request)
    {

        Mail::raw($request->message, function($mail){

            $mail->to('admin@ehb.be')
                ->subject('GlowGuide Contact Form');

        });

        return back()->with('success', 'Message sent!');
    }

}