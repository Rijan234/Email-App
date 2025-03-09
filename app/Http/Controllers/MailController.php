<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
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
    public function sendMail(Request $request) {
        $to = $request->to;
        $msg = $request->message;
        $subject = $request->subject;
        Mail::to($to)->send(new SendEmail($msg, $subject));
        return "Email sent";
    }

    public function sendEmailJob(Request $request){
        $to = "rijanrai881@gmail.com";
        $msg = "Hello HR, this is Rijan Rai";
        $subject = "Job Application Letter";

        // Dispatch the job to the queue
        dispatch(new SendEmailJob($to, $msg, $subject));

        return response()->json(['message' => 'Email is being processed in the queue!']);
    }
}
