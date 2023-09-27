<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProfileController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Page Test Li Hiya Home
Route::get('/test',[ProduitController::class,'Home'])->name('home');
//Page Product Affichage Product
Route::get('/',[ProduitController::class,'index'])->name('afficahge');
//Affichage Details in product
Route::get('/view/{id}',[ProduitController::class,'Show'])->name('view');

//cart 
Route::get('/panier',[CartController::class,'index'])->name('panier')->middleware('auth');

Route::post('/cart',[CartController::class,'AjoutePanier'])->name('cart')->middleware('auth');


//------------------------------------------------------------
//Les methode de breez
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
