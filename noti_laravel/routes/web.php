<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('dashboard');
// });
Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/user_login', [UserController::class, 'user_login']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/save_register', [UserController::class, 'save_register'])->name('save_user');


// Route::post('save_task', [TaskController::class, 'save_task']);
// POSTS
// Route::resource('/tasks', 'App\Http\Controllers\TaskController');
Route::post('/tasks/store', [TaskController::class, 'store'])->name('tasks.store');

// Route::group(['middleware' => 'auth.user'], function () {
//     Route::get('/', [UserController::class, 'dashboard'])->name('dashboard');
//     Route::get('/logout', [UserController::class, 'logout'])->name('logout');  
// });