<?php

use Illuminate\Support\Facades\Route;
 use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

//Home page routes
Route::get('/home', function () {
    return view('home');
});
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/camion', [App\Http\Controllers\CamionController::class, 'index'])->name('camion.index');
 Route::get('/camion/create', [App\Http\Controllers\CamionController::class, 'create'])->name('camion.forme');
Route::post('/add', [App\Http\Controllers\CamionController::class, 'store'])->name('camion.store');
Route::get('/camion/{id}', [App\Http\Controllers\CamionController::class, 'show'])->name('camion.detail');
Route::get('/camion/destroy/{id}', [App\Http\Controllers\CamionController::class, 'destroy'])->name('camion.destroy');

Route::get('/lieu', [App\Http\Controllers\LieuController::class, 'index'])->name('lieu.index');
Route::get('/lieu/create', [App\Http\Controllers\LieuController::class, 'create'])->name('lieu.forme');
Route::post('/addLieu', [App\Http\Controllers\LieuController::class, 'store'])->name('lieu.store');
Route::get('/lieu/destroy/{id}', [App\Http\Controllers\LieuController::class, 'destroy'])->name('lieu.destroy');

Route::get('/categorie', [App\Http\Controllers\CategorieController::class, 'index'])->name('categorie.index');
Route::get('/categorie/create', [App\Http\Controllers\CategorieController::class, 'create'])->name('categorie.forme');
Route::post('/add', [App\Http\Controllers\CategorieController::class, 'store'])->name('categorie.store');
Route::get('/categorie/destroy/{id}', [App\Http\Controllers\CategorieController::class, 'destroy'])->name('categorie.destroy');


