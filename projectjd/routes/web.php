<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::post('/tasks/store', [TaskController::class, 'store'])->name('tasks.store');
// POSTS
// Route::resource('/tasks', 'App\Http\Controllers\TaskController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
