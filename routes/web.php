<?php

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PricesMarketController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;


Route::livewire('/post/create', 'pages::post.create');

Route::livewire('/auth/login', 'pages::auth.login')->name('auth.login');

Route::livewire('/auth/register', 'pages::auth.register')->name('auth.register');

Route::livewire('/products/create', 'pages::products.create')->name('products.create');

Route::livewire('/ads/create', 'pages::ads.create')->name('ads.create');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::post('/products', [ProductController::class, 'store'])->name('products.store');


Route::get('/', function () {
    return to_route('auth.login');
});


Route::get('/test', function(){
    return view ('test');
});

Route::get('/login', [AuthController::class, 'login']);
// alias historique : redirige vers la page de connexion (route nommée 'auth.login' = livewire ci-dessus)

Route::post('/login', [AuthController::class, 'doLogin'])->name('auth.doLogin');





//Route::get('/register',function(){
   // return view('authentic.register');
//})->name('auth.register');
// route pour la page d'inscription

Route::post('/register', [AuthController::class, 'doRegister'])->name('auth.doRegister');

Route::delete('/logout', [AuthController::class, 'logout'])->name('auth.logout');


Route::middleware('auth')->group(function() {           // middleware pour l'authentification(bootstrap/app.php)

    Route::resource('users', UserController::class);    
    //Route::resource('products', ProductController::class);
    //Route::resource('ads', AdController::class);
    Route::resource('prices-market',PricesMarketController::class);

});

Route::get('/home',[UserController::class,'home'])->name('home');
// route pour la page d'acceuil


// route pour la page des prix
Route::get('/admin',[AdministratorController::class,'admin'])->name('admin.page');






