<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('component.login'); // Ensure you have a `login.blade.php` file in the `resources/views` directory.
})->name('login');