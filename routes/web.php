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
    return view('auth.login');
});

//Home page routes
Route::get('/home', function () {
    return view('home');
});
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/camion', [App\Http\Controllers\CamionController::class, 'index'])->name('camion.index');
Route::get('/camion/create', [App\Http\Controllers\CamionController::class, 'create'])->name('camion.forme');
Route::post('/ajout', [App\Http\Controllers\CamionController::class, 'store'])->name('camion.store');
Route::get('/camion/{id}', [App\Http\Controllers\CamionController::class, 'show'])->name('camion.detail');
Route::get('/camion/destroy/{id}', [App\Http\Controllers\CamionController::class, 'destroy'])->name('camion.destroy');

Route::get('/lieu', [App\Http\Controllers\LieuController::class, 'index'])->name('lieu.index');
Route::get('/lieu/create', [App\Http\Controllers\LieuController::class, 'create'])->name('lieu.forme');
Route::post('/add', [App\Http\Controllers\LieuController::class, 'store'])->name('lieu.store');
Route::get('/lieu/destroy/{id}', [App\Http\Controllers\LieuController::class, 'destroy'])->name('lieu.destroy');

Route::get('/categorie', [App\Http\Controllers\CategorieController::class, 'index'])->name('categorie.index');
Route::get('/categorie/create', [App\Http\Controllers\CategorieController::class, 'create'])->name('categorie.forme');
Route::post('/add', [App\Http\Controllers\CategorieController::class, 'store'])->name('categorie.store');
Route::get('/categorie/destroy/{id}', [App\Http\Controllers\CategorieController::class, 'destroy'])->name('categorie.destroy');


Route::get('/chauffeur', [App\Http\Controllers\ChauffeurController::class, 'index'])->name('chauffeur.index');
Route::get('/chauffeur/create', [App\Http\Controllers\ChauffeurController::class, 'create'])->name('chauffeur.forme');
Route::post('/chauffeuradd', [App\Http\Controllers\ChauffeurController::class, 'store'])->name('chauffeur.store');
Route::get('/chauffeur/destroy/{id}', [App\Http\Controllers\ChauffeurController::class, 'destroy'])->name('chauffeur.destroy');

Route::get('/chauffeur_Camion', [App\Http\Controllers\chauffeur_CammionController::class, 'index'])->name('chauffeur_Camion.index');
Route::get('/chauffeur_Camion/create', [App\Http\Controllers\chauffeur_CammionController::class, 'create'])->name('chauffeur_Camion.forme');
Route::post('/chauffeur_Camionadd', [App\Http\Controllers\chauffeur_CammionController::class, 'store'])->name('chauffeur_Camion.store');
Route::get('/chauffeur_Camion/destroy/{id}', [App\Http\Controllers\chauffeur_CammionController::class, 'destroy'])->name('chauffeur_Camion.destroy');


Route::get('/mouvement', [App\Http\Controllers\MouvementController::class, 'index'])->name('mouvement.index');
Route::get('/mouvement/create', [App\Http\Controllers\MouvementController::class, 'create'])->name('mouvement.forme');
Route::post('/mouvementadd', [App\Http\Controllers\MouvementController::class, 'store'])->name('mouvement.store');
Route::get('/mouvement/destroy/{id}', [App\Http\Controllers\MouvementController::class, 'destroy'])->name('mouvement.destroy');
Route::get('/mouvement/details', [App\Http\Controllers\MouvementController::class, 'details'])->name('mouvement.details');



Route::get('mouvement_lieu', [App\Http\Controllers\Mouvement_lieuController::class, 'index'])->name('mouvement_lieu.index');
Route::get('mouvement_lieu/create', [App\Http\Controllers\Mouvement_lieuController::class, 'create'])->name('mouvement_lieu.forme');
Route::post('mouvement_lieuadd', [App\Http\Controllers\Mouvement_lieuController::class, 'store'])->name('mouvement_lieu.store');
Route::get('mouvement_lieu/destroy/{id}', [App\Http\Controllers\Mouvement_lieuController::class, 'destroy'])->name('mouvement_lieu.destroy');

