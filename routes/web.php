<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Route::view('/', 'home');

Route::get('/sendmail', [MailController::class, 'sendMail'])->name('sendmail');