<?php

use App\Mail\FirstMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/send', function () {
    Mail::to('test@test.com')->send(new FirstMail());

    return to_route('home');
});
