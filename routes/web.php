<?php

use App\Mail\DataMail;
use App\Mail\FirstMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/send-first', function () {
    Mail::to('first@test.com')->send(new FirstMail());

    return to_route('home');
});

Route::get('/send-data', function () {
    Mail::to('data@test.com')->send(new DataMail("123 public", "456 private", "789 protected"));

    return to_route('home');
});
