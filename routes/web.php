<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware('guest')->group(function() {  //guest verifie si le visiteur n'est pas connecter

    Route::view('/', 'admin.index'); //premier paramètre => URL | deuxième => chemin vers la vue
    Route::view('realisation', 'admin.realisation.index');
    Route::view('login', 'admin.login');

});
