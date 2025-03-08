<?php

use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "RH MANGNT";
});

Route::get('/email', function () {
    Mail::raw('Test message of the HR Management', function ($message) {
        $message->to('test@gmail.com')
            ->subject('Welcome to the HR Management')
            ->from('hr@management.com');
    });

    echo 'Email sent successfully';
});

Route::get('/admin', function () {
    $admin = User::with('detail', 'department')->find(1);

    return view('admin', compact('admin'));
});
