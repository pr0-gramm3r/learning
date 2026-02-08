<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    //
    function sendMail(){
        $to = "";//recipient email address here
        $subject = "Subject Mail";
        $message = "Main message from Laravel.";
        
        Mail::to($to)->send(new TestMail($subject, $message));
        return redirect()->back()->with("message","Mail sent successfully!");
    }
}