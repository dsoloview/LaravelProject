<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;

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

Route::get('/', [MainController::class, 'homepage'])->name('homepage');

Route::resource('/tasks', TaskController::class);
Route::get('/russian_cv', [\App\Http\Controllers\DownloadController::class, 'russianCV'])->name('russian_cv');
Route::get('/english_cv', [\App\Http\Controllers\DownloadController::class, 'englishCV'])->name('english_cv');


// Authentication Routes...
Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin');
    Route::resource('projects', \App\Http\Controllers\Admin\ProjectsController::class);
});

