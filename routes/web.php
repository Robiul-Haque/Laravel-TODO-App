<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'homeIndex'])->name('home');
Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'loginIndex'])->name('login');
Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::get('/logout', [\App\Http\Controllers\Auth\LogoutController::class, 'logout'])->name('logout');
Route::get('/sign-up', [\App\Http\Controllers\Auth\SignupController::class, 'sign_upIndex'])->name('sign.up');
Route::post('/sign-up', [\App\Http\Controllers\Auth\SignupController::class, 'sign_up']);

Route::middleware('user')->group(function () {
    Route::get('/user', [\App\Http\Controllers\UserController::class, 'userIndex'])->name('user');
    // task route
    Route::prefix('task')->group(function () {
    Route::get('/list', [\App\Http\Controllers\TaskListController::class, 'taskListIndex'])->name('task.list');
    Route::get('/edit', [\App\Http\Controllers\TaskEditController::class, 'taskEditIndex'])->name('task.edit');
    Route::get('/details', [\App\Http\Controllers\TaskDetailsController::class, 'taskDetailsIndex'])->name('task.details');
  });
});
