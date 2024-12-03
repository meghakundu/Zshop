<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\SendMail;
use Mail;
use Illuminate\Http\Request;

class ContactUs extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;

    public function add_contact_us_request(Request $request){
        $this->validate([
            'name' => 'required',
            'subject' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

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

        
        \App\Models\contactus::create([
            'name'         => $this->name,
            'subject'         => $this->subject,
            'email'         => $this->email,
            'message'         => $this->message,
        ]);




        $this->email="";
        $this->name="";
        $this->subject="";
        $this->subject="";
        $this->message="";
       
        session()->flash('success', '');
    }


    public function render()
    {
        return view('livewire.contact-us');
    }
}
