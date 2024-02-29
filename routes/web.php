<?php

use App\Models\Realisation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RealisationController;

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

Route::view('/', 'index')->name('home');
Route::view('realisation', 'realisation')->name('realisation');

Route::view('veille', 'veille.index')->name('veille');
    
Route::middleware('guest')->group(function() {  //guest verifie si le visiteur n'est pas connecter
     //premier paramètre => URL | deuxième => chemin vers la vue
    Route::get('login', [AuthController::class, 'index'])->name('login'); // la method GET sert à envoyer ressource du site (ex: page HTML vers le client)
    Route::post('login', [AuthController::class, 'login']);
});

Route::middleware('auth')->group(function() {
    Route::view('admin', 'admin.index')->name('homeAdmin');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('realisation-admin', [RealisationController::class, 'index'])->name('realisationAdmin');
});

