<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact-us');
    }

    public function contactSubmit(Request $request)
    {
        Mail::send('emails.contactmail',[
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'msg'=>$request->msg,

        ],function($mail) use($request){
            $mail->from(env('MAIL_FROM_ADDRESS'),$request->name);
            $mail->to("natural.disact@outlook.fr")->subject('Contact US Message');
        });
        //return  "Message has been send successfully";
        return redirect('/contact-us')->with('success', $request->name . ' your message has been send successfully!!!!!!');

    }
}

