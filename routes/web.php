<?php

use App\Models\Realisation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\RealisationController;
use App\Http\Controllers\CompetenceController;
use App\Http\Controllers\RealisationController as PublicRealisationController;

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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::post('/', 'getContact')->middleware('throttle:5,2');
});
Route::get('realisations', [PublicRealisationController::class, 'index'])->name('realisation');
Route::get('realisation/{realisation}', [PublicRealisationController::class, 'show'])->name('showRealisation');
Route::view('veille', 'veille.index')->name('veille');
Route::get('competences', [CompetenceController::class, 'index'])->name('competences');
Route::get('competences/{competence}', [CompetenceController::class, 'show'])->name('competence');

Route::middleware('guest')->group(function () {  //guest verifie si le visiteur n'est pas connecter
    //premier paramètre => URL | deuxième => chemin vers la vue
    Route::get('login', [AuthController::class, 'index'])->name('login'); // la method GET sert à envoyer ressource du site (ex: page HTML vers le client)
    Route::post('login', [AuthController::class, 'login'])->middleware('throttle:5,2');
});

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::view('/', 'admin.index')->name('homeAdmin');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('realisations', [RealisationController::class, 'index'])->name('realisationAdmin');

    Route::get('realisation/edit/{realisation}', [RealisationController::class, 'edit'])->name('realisationEdit'); //model binding
    Route::post('realisation/edit/{realisation}', [RealisationController::class, 'update']);

    Route::get('/realisation/add', [RealisationController::class, 'add'])->name('add');
    Route::post('/realisation/validateadd', [RealisationController::class, 'validateAdd'])->name('validate');

    Route::get('/realisation/delete/{realisation}', [RealisationController::class, 'delete'])->name('delete');
});
