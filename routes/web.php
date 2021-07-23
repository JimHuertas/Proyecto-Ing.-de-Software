<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParticipanteController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\EdicionController;

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
Route::get('/home/registrarse',[ParticipanteController::class,'create'])->name('registro');
Route::get('/home/buscar',[HomeController::class,'buscar'])->name('buscar');
Route::get('/home/ingresar',[HomeController::class,'login'])->name('login');
Route::resource('home', HomeController::class);
Route::resource('edicion', EdicionController::class);
Route::resource('persona', PersonaController::class);
Route::resource('participante', ParticipanteController::class);