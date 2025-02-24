<?php

use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "RH MANGNT";
});

Route::get('/email', function () {
    Mail::raw('Test message of the HR Management', function (Message $message) {
        $message->to('test@gmail.com')
        ->subject('Welcome to the HR Management')
        ->from('hr@management.com');
    });

    echo 'Email sent successfully';
});
