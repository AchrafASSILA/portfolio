<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Contact extends Controller
{
    public function contactUs(Request $request)
    {

        $details = [

            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ];
        Mail::to('achrafassila678@gmail.com')->send(new ContactMail($details));
        return redirect('/')->with('message_sent', 'your message has been sent succesfully');
    }
}
