<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

Route::get('/send-mail', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home.homepage');
});

Route::post('/messages/send', [MessageController::class, 'send'])->name('messages.send');
