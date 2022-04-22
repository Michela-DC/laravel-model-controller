<?php

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

Route::get('/', 'MovieController@index' )->name('home');
//In questo modo creo il collegamento tra la rotta e il metodo index del controller, quindi quando arriva una richiesta alla rotta '/', dico a laravel che deve andare a recuperare la funzione index che è dentro al controller (che in questo progetto ho chiamato MovieController)
