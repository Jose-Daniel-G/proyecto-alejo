<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/login', [UserController::class, 'login'])->name('login');
// Agrega esta línea para aceptar POST en el login:
Route::post('/login', [UserController::class, 'user_login'])->name('login');
Route::post('/user_login', [UserController::class, 'user_login']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/save_register', [UserController::class, 'save_register'])->name('save_user');


Route::post('save_task', [TaskController::class, 'save_task']);
// POSTS
// Route::resource('/tasks', 'App\Http\Controllers\TaskController');
Route::post('/tasks/store', [TaskController::class, 'store'])->name('tasks.store');

// Route::group(['middleware' => 'auth.user'], function () {
    Route::get('/', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');  
// });