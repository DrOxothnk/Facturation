<?php

use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommandeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('index');
});*/

// categorie
Route::get('/categories', [CategorieController::class, 'index'])->name('admin.categories');
Route::get('/categories/create', [CategorieController::class, 'create'])->name('admin.categories.create');
Route::post('/categories/store', [CategorieController::class, 'store'])->name('admin.categories.store');
Route::get('/categories/edit/{categorie}', [CategorieController::class, 'edit'])->name('admin.categories.edit');
Route::put('/categories/update/{categorie}', [CategorieController::class, 'update'])->name('admin.categories.update');
Route::delete('/categories/destroy/{category}', [CategorieController::class, 'destroy'])->name('admin.categories.destroy');


//produit
Route::get('/', [ProduitController::class, 'index'])->name('admin.produits');
Route::get('/Produits', [ProduitController::class, 'index'])->name('admin.produits');
Route::get('/Produits/create', [ProduitController::class, 'create'])->name('admin.Produits.create');
Route::post('/Produits/store', [ProduitController::class, 'store'])->name('admin.Produits.store');
Route::get('/Produits/edit/{produit}', [ProduitController::class, 'edit'])->name('admin.Produits.edit');
Route::put('/Produits/update/{produit}', [ProduitController::class, 'update'])->name('admin.Produits.update');
Route::delete('/Produits/destroy/{produit}', [ProduitController::class, 'destroy'])->name('admin.Produits.destroy');
//commande
Route::get('/commandes', [CommandeController::class, 'index'])->name('admin.commandes');
Route::get('/commandes/create', [CommandeController::class, 'create'])->name('admin.commandes.create');
Route::post('/commandes/store', [CommandeController::class, 'store'])->name('admin.commandes.store');
Route::get('/commandes/edit/{commande}', [CommandeController::class,'edit'])->name('admin.commandes.edit');
Route::put('/commandes/update/{commande}', [CommandeController::class,'update'])->name('admin.commandes.update');
Route::delete('/commandes/destroy/{commande}', [CommandeController::class, 'destroy'])->name('admin.commandes.destroy');





//commandes

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //route::get('/produit',[ProduitController::class,'index'])->name('produits');
});

require __DIR__.'/auth.php';
