<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    //

    public function mailform()
        {
        return view('mail');
        }
        public function maildata(Request $request)
        {
        $name = $request->name;
        $email = $request->email;
        $sub = $request->subject;
        $mess = $request->message;
        $mailData = [
        'url' => 'https://sandroft.com/',
        ];
        $send_mail = "meghakundu808@gmail.com";
        Mail::to($send_mail)->send(new SendMail($name, $email, $sub, $mess));
        return "Mail Send Successfully";
        }
}
