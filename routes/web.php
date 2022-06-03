<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmpleadosController;
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

Route::get('empleados', [EmpleadosController::class, "index"])->name('empleados.index');
Route::get('empleados/new', [EmpleadosController::class, "create"])->name('empleados.new');
Route::post('empleados', [EmpleadosController::class, "store"])->name('empleados.store');
Route::get('empleados/{empleado}/edit', [EmpleadosController::class, "edit"])->name('empleados.edit');
Route::delete('empleados/{empleado}', [EmpleadosController::class, "destroy"])->name('empleados.destroy');
Route::put('empleados/{empleado}', [EmpleadosController::class, "update"])->name('empleados.update');

Route::get('calculosalario/{calculo}', [CalculoSalarioController::class, "index"])->name('calculosalario.index');
