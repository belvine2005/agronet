<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view ('welcome');
});

Route::get('/home', function () {
    return view ('home');
});

Route::get('/annonces', function () {
    return view ('annonces');
});

Route::resource('users', UserController::class);

