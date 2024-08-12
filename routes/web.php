<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

//rota para exibir a home
Route::get('/home',function () {return view ('home');});


// Rota para exibir o formulário de login
Route::get('/login', [UsuarioController::class, 'showLoginForm'])->
name('usuarios.login');


// Rota para processar o login
Route::post('/login', [UsuarioController::class, 'login'])->
name('usuarios.login');


// Rota para exibir o formulário de registro
Route::get('/registro', [UsuarioController::class, 'showRegistroForm'])->
name('usuarios.registro');


// Rota para processar o registro
Route::post('/registro', [UsuarioController::class, 'registro'])->
name('usuarios.registro');


// Rota para logout
Route::post('/logout', [UsuarioController::class, 'logout'])->
name('usuarios.logout');


// Rota para o dashboard, protegida por autenticação
Route::get('/dashboard', function () {
    return view('usuarios.dashboard');
})->middleware('auth')->name('dashboard');

// // Rota para o dashboard, protegida por autenticação
// Route::get('/', function () {
//     return view('layouts.app');
// });
