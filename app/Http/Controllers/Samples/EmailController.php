<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\welcomeemail;

class EmailController extends Controller
{
    public function sendEmail(){
        $toemail = "ramanshrestha79@gmail.com";
        $message = "This is test email from laravel";
        $subject = "Welcome to newslaravel";
        
        $request = Mail::to($toemail)->send(new welcomeemail($message,$subject));
        dd($request);
    }
}
