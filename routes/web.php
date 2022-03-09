<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContatoController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/add', [ContatoController::class, 'index']);
Route::post('/add', [ContatoController::class, 'store'])->name('store');

Route::get('/edit/{id}', [ContatoController::class, 'editIndex']);
Route::post('/edit', [ContatoController::class, 'edit'])->name('edit');

Route::get('/delete/{id}', [ContatoController::class, 'delete']);
