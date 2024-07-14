<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login', ['title' => 'Login']);
});

Route::get('/register', function () {
    return view('register', ['title' => 'Register']);
});

Route::get('/dashboard', function () {
    return view('dashboard', ['title' => 'Dashboard']);
});

Route::get('/forgot-password', function () {
    return abort(500);
    // return view('forgot-password', ['title' => 'Forgot Password']);
});