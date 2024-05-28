<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Dashboard\CategoryController as DashboardCategoryController;
use App\Http\Controllers\Dashboard\HomeController as DashboardHomeController;
use App\Http\Controllers\Dashboard\SubCategoryController as DashboardSubCategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SubcategoryController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
//*********** Frontend Start *************/

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

// frontend product page route
Route::get('/product', [ProductController::class, 'show'])->name('product');

//*********** Frontend End *************/

//*********** Dashboard Start *************/

Route::prefix('dashboard')->group(function(){
    
    Route::get('/', [DashboardHomeController::class, 'show'])->name('dashboard');
    Route::get('/category', [DashboardCategoryController::class, 'show'])->name('category.index');
    Route::get('/category/create', [DashboardCategoryController::class, 'create'])->name('category.create');
    Route::get('/category/edit', [DashboardCategoryController::class, 'edit'])->name('category.edit');

    Route::get('/subcategory', [DashboardSubCategoryController::class, 'show'])->name('subcategory.index');
    Route::get('/subcategory/create', [DashboardSubCategoryController::class, 'create'])->name('subcategory.create');
    Route::get('/subcategory/edit', [DashboardSubCategoryController::class, 'edit'])->name('subcategory.edit');

});
