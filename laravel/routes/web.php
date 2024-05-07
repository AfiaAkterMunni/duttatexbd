<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SubcategoryController;
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

// frontend contact page route
Route::get('/contact', [ContactController::class, 'show'])->name('contact');

// frontend category page route
Route::get('/category', [CategoryController::class, 'show'])->name('category');

// frontend category page route
Route::get('/subcategory', [SubcategoryController::class, 'show'])->name('subcategory');
