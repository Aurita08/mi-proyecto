<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;                           
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('clases/maestros/{nombre}/{apellido}',[HomeController::class ,'inicio']);

Route::get('/clases/{nombre}/{seccion?}', [HomeController::class,'show']);