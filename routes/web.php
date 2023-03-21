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
Route::resource('facturas', App\Http\Controllers\FacturaController::class);

// Route::view('/', 'home')->name('home');
Auth::routes(['verify' => true]);
// se usa en unidad acedemica por que no tiene su propio controlador