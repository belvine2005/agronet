<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view ('accueil');
});





Route::get('/home',[UserController::class,'home'])->name('home');
// route pour la page d'acceuil

Route::get('/prices',[ProductController::class,'prices'])->name('products.prices');

Route::resource('users', UserController::class);
Route::resource('products', ProductController::class);
Route::resource('ads', AdController::class);


Route::view('/accueil', 'accueil')
    ->name('accueil');

Route::view('/prix-marche', 'prix-marche')
    ->name('prix-marche');

Route::view('/annonces', 'annonces')
    ->name('annonces');

Route::view('/engrais', 'engrais')
    ->name('engrais');

Route::view('/semences', 'semences')
    ->name('semences');

Route::view('/produits-agri', 'produits-agri')
    ->name('produits-agri');

Route::view('/panier', 'panier')
    ->name('panier');

Route::get('/login', function () {
    return view('users.login');
})->name('users.login');

Route::get('/create', function () {
    return view('users.create');
})->name('users.create');



use App\Http\Controllers\AcheteurController;
use App\Http\Controllers\AgriculteurController;


// Route pour la page des acheteurs dans le dashboard admin
Route::get('/admin/acheteurs', [AcheteurController::class, 'index'])->name('admin.acheteurs');


// Route pour la page des agriculteurs dans le dashboard admin
Route::get('/admin/agriculteurs', [AgriculteurController::class, 'index'])->name('admin.agriculteurs');

use App\Http\Controllers\AnnonceController;
// Route pour la page des annonces dans le dashboard admin
Route::get('/admin/annonces', [AnnonceController::class, 'index'])->name('admin.annonces');

use App\Http\Controllers\CommandeController;
// Route pour la page des commandes dans le dashboard admin
Route::get('/admin/commandes', [CommandeController::class, 'index'])->name('admin.commandes');

use App\Http\Controllers\ProduitController;
// Route pour la page des produits dans le dashboard admin
Route::get('/admin/produits', [ProduitController::class, 'index'])->name('admin.produits');









Route::prefix('admin')->group(function () {

    Route::view('/dashboard', 'admin.dashboard')
        ->name('admin.dashboard');

   // Route::view('/produits', 'admin.produits')
     //   ->name('admin.produits');

  //  Route::view('/annonces', 'admin.annonces')
    //    ->name('admin.annonces');

  //  Route::view('/commandes', 'admin.commandes')
    //    ->name('admin.commandes');

  //  Route::view('/agriculteurs', 'admin.agriculteurs')
  //      ->name('admin.agriculteurs');

 //   Route::view('/acheteurs', 'admin.acheteurs')
 //       ->name('admin.acheteurs');

    Route::view('/parametres', 'admin.parametres')
        ->name('admin.parametres');

    Route::view('/profils', 'admin.profils')
        ->name('admin.profils');

});