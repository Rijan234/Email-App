<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('send-mail', [MailController::class, 'sendEmail']);
Route::post('send-email', [MailController::class, 'sendMail']);
Route::view('send-email', 'send-email');

Route::get('send-mail-job', [MailController::class, 'sendEmailJob']);