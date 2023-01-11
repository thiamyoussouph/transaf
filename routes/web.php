<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LieuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CamionController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ChauffeurController;
use App\Http\Controllers\MouvementController;
use App\Http\Controllers\Mouvement_lieuController;
use App\Http\Controllers\chauffeur_CammionController;

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
Route::middleware('auth')->prefix('camion')->name('camion.')->group(function(){

Route::get('/', [CamionController::class, 'index'])->name('index');
Route::get('/create', [CamionController::class,  'create'])->name('create');
Route::post('/ajout', [CamionController::class,  'store'])->name('store');
Route::get('/{id}', [CamionController::class,  'show'])->name('detail');
Route::get('/destroy/{id}', [CamionController::class,  'destroy'])->name('destroy');

});
Route::middleware('auth')->prefix('lieu')->name('lieu.')->group(function(){
Route::get('/', [LieuController::class, 'index'])->name('index');
Route::get('/create',  [LieuController::class, 'create'])->name('create');
Route::post('/addLieu',  [LieuController::class, 'store'])->name('store');
Route::get('/destroy/{id}',  [LieuController::class, 'destroy'])->name('destroy');
});
//Route Categories

Route::middleware('auth')->prefix('categorie')->name('categorie.')->group(function(){
Route::get('/', [CategorieController::class, 'index'])->name('index');
Route::get('/create', [CategorieController::class, 'create'])->name('create');
Route::post('/add', [CategorieController::class,'store'])->name('store');
Route::get('/destroy/{id}', [CategorieController::class, 'destroy'])->name('destroy');
});

//Route Mouvement

Route::middleware('auth')->prefix('mouvement')->name('mouvement.')->group(function(){
Route::get('/', [MouvementController::class, 'index'])->name('index');
Route::get('/create', [MouvementController::class, 'create'])->name('forme');
Route::get('/create/decharger', [MouvementController::class, 'createDecharge'])->name('formeDecharger');
Route::post('/mouvementadd', [MouvementController::class,'store'])->name('store');
Route::post('/mouvementadddecharge', [MouvementController::class, 'decharger'])->name('store.decharge');
Route::get('/destroy/{id}', [MouvementController::class,'destroy'])->name('destroy');
Route::get('/details', [MouvementController::class, 'details'])->name('details');
});
// Route Mouvement_lieu

Route::middleware('auth')->prefix('mouvement_lieu')->name('mouvement_lieu.')->group(function(){
Route::get('/', [Mouvement_lieuController::class, 'index'])->name('index');
Route::get('/create', [Mouvement_lieuController::class, 'create'])->name('forme');
Route::post('mouvement_lieuadd', [Mouvement_lieuController::class, 'store'])->name('store');
Route::get('/destroy/{id}', [Mouvement_lieuController::class, 'destroy'])->name('destroy');
});

// Route Chauffeur
Route::middleware('auth')->prefix('chauffeur')->name('chauffeur.')->group(function(){
Route::get('/', [ChauffeurController::class, 'index'])->name('index');
Route::get('/create', [ChauffeurController::class, 'create'])->name('forme');
Route::post('/chauffeuradd', [ChauffeurController::class, 'store'])->name('store');
Route::get('/destroy/{id}', [ChauffeurController::class, 'destroy'])->name('destroy');
});
//Route Chauffeur_Camion
Route::middleware('auth')->prefix('chauffeur_Camion')->name('chauffeur_Camion.')->group(function(){
Route::get('/', [chauffeur_CammionController::class, 'index'])->name('index');
Route::get('/create', [chauffeur_CammionController::class, 'create'])->name('forme');
Route::post('/chauffeur_Camionadd', [chauffeur_CammionController::class, 'store'])->name('store');
Route::get('/destroy/{id}',  [chauffeur_CammionController::class, 'destroy'])->name('destroy');
});