<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
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
// frontend home page route
Route::get('/', [HomeController::class, 'show'])->name('home');

// frontend about page route
Route::get('/about', [AboutController::class, 'show'])->name('about');

// frontend service page route
Route::get('/service', [ServiceController::class, 'show'])->name('service');
