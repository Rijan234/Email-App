<?php

namespace App\Jobs;

use App\Mail\SendEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $to;
    public $msg;
    public $subject;

    /**
     * Create a new job instance.
     */
    public function __construct($to, $msg, $subject)
    {
        $this->to = $to;
        $this->msg = $msg;
        $this->subject = $subject;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        Mail::to($this->to)->send(new SendEmail($this->msg, $this->subject));
    }
}
