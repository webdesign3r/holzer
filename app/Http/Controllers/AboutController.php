<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact;

class AboutController extends Controller
{
    public function create()
    {
        return view('about.contact');
    }

    public function store(ContactFormRequest $request)
    {

      \Mail::send('emails.contact',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ), function($message)
        {
            $message->from('info@holzer.dev');
            $message->to('info@holzer.dev', 'Admin')->subject('Kontaktformular Test');
        });

      return \Redirect::route('contact')->with('message', 'Thanks for contacting us!');

    }
}
