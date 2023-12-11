<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CrearController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\EditarController;



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
    return view('layout.app');
});


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/home', [HomeController::class, 'index'])->name('home.index');

Route::get('/crear', [CrearController::class, 'index'])->name('crear');
Route::post('/crear', [EmpleadosController::class, 'store'])->name('empleados.store');

oute::get('/editar/{id}', [EditarController::class, 'index'])->name('editar.index');
Route::post('/editar/{id}', [EmpleadosController::class, 'edit'])->name('editar.edit');

Route::get('/eliminar/{id}', [EmpleadosController::class, 'delete'])->name('delete');