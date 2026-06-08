<?php

use App\Http\Controllers\AdministratorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view ('welcome');
});



Route::get('/login', [UserController::class, 'login'])->name('users.login');
// route pour la page de connexion

Route::get('/home',[UserController::class,'home'])->name('home');
// route pour la page d'acceuil

Route::get('/prices',[ProductController::class,'prices'])->name('products.prices');
// route pour la page des prix
Route::get('/admin',[AdministratorController::class,'admin'])->name('admin.page');

Route::resource('users', UserController::class);
Route::resource('products', ProductController::class);
Route::resource('ads', AdController::class);

Route::post('create-products', function(){
    return 'hello';
});


