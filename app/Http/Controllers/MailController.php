<?php

namespace App\Http\Controllers;

use App\Mail\MyMail;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail() {
        $to = "rijanrai881@gmail.com";
        $msg = "Hello HR, this is rijan rai";
        $subject = "Job Application Letter";
        Mail::to($to)->send(new SendEmail($msg, $subject));
    }

}
