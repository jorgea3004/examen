<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\CalculoSalarioController;

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

Route::get('/', HomeController::class)->name('home');
Route::get('/index', [HomeController::class, "index"])->name('home.index');
Route::post('home/login', [HomeController::class, "login"])->name('home.login');

Route::get('usuarios', [UsuariosController::class, "index"])->name('usuarios.index');
Route::get('usuarios/new', [UsuariosController::class, "create"])->name('usuarios.new');
Route::post('usuarios', [UsuariosController::class, "store"])->name('usuarios.store');
Route::get('usuarios/{usuario}/edit', [UsuariosController::class, "edit"])->name('usuarios.edit');
Route::delete('usuarios/{usuario}', [UsuariosController::class, "destroy"])->name('usuarios.destroy');
Route::put('usuarios/{usuario}', [UsuariosController::class, "update"])->name('usuarios.update');

Route::get('calculosalario/{calculo}', [CalculoSalarioController::class, "index"])->name('calculosalario.index');
