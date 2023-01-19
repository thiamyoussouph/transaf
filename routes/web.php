<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Profile Routes
Route::prefix('profile')->name('profile.')->middleware('auth')->group(function(){
    Route::get('/', [HomeController::class, 'getProfile'])->name('detail');
    Route::post('/update', [HomeController::class, 'updateProfile'])->name('update');
    Route::post('/change-password', [HomeController::class, 'changePassword'])->name('change-password');
});

// Roles
Route::resource('roles', App\Http\Controllers\RolesController::class);

// Permissions
Route::resource('permissions', App\Http\Controllers\PermissionsController::class);


// Users 
Route::middleware('auth')->prefix('users')->name('users.')->group(function(){
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    Route::get('/edit/{user}', [UserController::class, 'edit'])->name('edit');
    Route::put('/update/{user}', [UserController::class, 'update'])->name('update');
    Route::delete('/delete/{user}', [UserController::class, 'delete'])->name('destroy');
    Route::get('/update/status/{user_id}/{status}', [UserController::class, 'updateStatus'])->name('status');

    
    Route::get('/import-users', [UserController::class, 'importUsers'])->name('import');
    Route::post('/upload-users', [UserController::class, 'uploadUsers'])->name('upload');

    Route::get('export/', [UserController::class, 'export'])->name('export');

});
Route::middleware('auth')->group(function(){

Route::get('/camion', [App\Http\Controllers\CamionController::class, 'index'])->name('camion.index');
Route::get('/camion/create', [App\Http\Controllers\CamionController::class, 'create'])->name('camion.forme');
Route::post('/ajout', [App\Http\Controllers\CamionController::class, 'store'])->name('camion.store');
Route::get('/camion/{id}', [App\Http\Controllers\CamionController::class, 'show'])->name('camion.detail');
Route::get('/camion/destroy/{id}', [App\Http\Controllers\CamionController::class, 'destroy'])->name('camion.destroy');

});
Route::get('/lieu', [App\Http\Controllers\LieuController::class, 'index'])->name('lieu.index');
Route::get('/lieu/create', [App\Http\Controllers\LieuController::class, 'create'])->name('lieu.forme');
Route::post('/addLieu', [App\Http\Controllers\LieuController::class, 'store'])->name('lieu.store');
Route::get('/lieu/destroy/{id}', [App\Http\Controllers\LieuController::class, 'destroy'])->name('lieu.destroy');

Route::get('/categorie', [App\Http\Controllers\CategorieController::class, 'index'])->name('categorie.index');
Route::get('/categorie/create', [App\Http\Controllers\CategorieController::class, 'create'])->name('categorie.forme');
Route::post('/add', [App\Http\Controllers\CategorieController::class, 'store'])->name('categorie.store');
Route::get('/categorie/destroy/{id}', [App\Http\Controllers\CategorieController::class, 'destroy'])->name('categorie.destroy');


Route::get('/mouvement', [App\Http\Controllers\MouvementController::class, 'index'])->name('mouvement.index');
Route::get('/mouvement/create', [App\Http\Controllers\MouvementController::class, 'create'])->name('mouvement.forme');
Route::get('/mouvement/create/decharger', [App\Http\Controllers\MouvementController::class, 'createDecharge'])->name('mouvement.formeDecharger');
Route::post('/mouvementadd', [App\Http\Controllers\MouvementController::class, 'store'])->name('mouvement.store');
Route::post('/mouvementadddecharge', [App\Http\Controllers\MouvementController::class, 'decharger'])->name('mouvement.store.decharge');
Route::get('/mouvement/destroy/{id}', [App\Http\Controllers\MouvementController::class, 'destroy'])->name('mouvement.destroy');
Route::get('/mouvement/details', [App\Http\Controllers\MouvementController::class, 'details'])->name('mouvement.details');



Route::get('mouvement_lieu', [App\Http\Controllers\Mouvement_lieuController::class, 'index'])->name('mouvement_lieu.index');
Route::get('mouvement_lieu/create', [App\Http\Controllers\Mouvement_lieuController::class, 'create'])->name('mouvement_lieu.forme');
Route::post('mouvement_lieuadd', [App\Http\Controllers\Mouvement_lieuController::class, 'store'])->name('mouvement_lieu.store');
Route::get('mouvement_lieu/destroy/{id}', [App\Http\Controllers\Mouvement_lieuController::class, 'destroy'])->name('mouvement_lieu.destroy');


Route::get('/chauffeur', [App\Http\Controllers\ChauffeurController::class, 'index'])->name('chauffeur.index');
Route::get('/chauffeur/create', [App\Http\Controllers\ChauffeurController::class, 'create'])->name('chauffeur.forme');
Route::post('/chauffeuradd', [App\Http\Controllers\ChauffeurController::class, 'store'])->name('chauffeur.store');
Route::get('/chauffeur/destroy/{id}', [App\Http\Controllers\ChauffeurController::class, 'destroy'])->name('chauffeur.destroy');

Route::get('/chauffeur_Camion', [App\Http\Controllers\chauffeur_CammionController::class, 'index'])->name('chauffeur_Camion.index');
Route::get('/chauffeur_Camion/create', [App\Http\Controllers\chauffeur_CammionController::class, 'create'])->name('chauffeur_Camion.forme');
Route::post('/chauffeur_Camionadd', [App\Http\Controllers\chauffeur_CammionController::class, 'store'])->name('chauffeur_Camion.store');
Route::get('/chauffeur_Camion/destroy/{id}', [App\Http\Controllers\chauffeur_CammionController::class, 'destroy'])->name('chauffeur_Camion.destroy');