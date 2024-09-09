<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClaseController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioRolController;


Route::get('/', function () {
    return view('dashboard.index');
});
Route::resource('cursos', CursoController::class);
Route::resource('users', UserController::class);
Route::resource('clases', ClaseController::class);
Route::resource('roles', RolController::class);
Route::resource('usuario-rol', UsuarioRolController::class);

