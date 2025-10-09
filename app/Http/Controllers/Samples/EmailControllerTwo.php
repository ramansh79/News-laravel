<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\welcomeemail;

class EmailControllerTwo extends Controller
{
    public function sendEmail(){
        $toemail = "upuadhikari@gmail.com";
        $message = "This is test email from laravel";
        $subject = "Welcome to newslaravel";
        
        Mail::to($toemail)->send(new welcomeemail($message,$subject));
        
    }
}
