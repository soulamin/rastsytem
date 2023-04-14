<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

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

Route::post('/usuario/login',[UsuarioController::class,'login'])->name('usuarios.login');
Route::get('/usuario',[UsuarioController::class,'index'])->name('usuarios.index');
Route::get('/usuario/cadastro',[UsuarioController::class,'cadastro'])->name('usuarios.add');