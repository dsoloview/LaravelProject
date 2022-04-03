<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TaskController;

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
