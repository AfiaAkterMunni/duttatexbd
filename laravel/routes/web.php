<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Dashboard\CategoryController as DashboardCategoryController;
use App\Http\Controllers\Dashboard\HomeController as DashboardHomeController;
use App\Http\Controllers\Dashboard\ProductController as DashboardProductController;
use App\Http\Controllers\Dashboard\QuickInquiryController;
use App\Http\Controllers\Dashboard\SubCategoryController as DashboardSubCategoryController;
use App\Http\Controllers\Dashboard\SubscriberController;
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
    // Dashboard home
    Route::get('/', [DashboardHomeController::class, 'show'])->name('dashboard');

    // Dashboard category
    Route::get('/category', [DashboardCategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [DashboardCategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [DashboardCategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id}', [DashboardCategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [DashboardCategoryController::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}', [DashboardCategoryController::class, 'delete'])->name('category.delete');


    // Dashboard subcategory
    Route::get('/subcategory', [DashboardSubCategoryController::class, 'index'])->name('subcategory.index');
    Route::get('/subcategory/create', [DashboardSubCategoryController::class, 'create'])->name('subcategory.create');
    Route::post('/subcategory/store', [DashboardSubCategoryController::class, 'store'])->name('subcategory.store');
    Route::get('/subcategory/edit/{id}', [DashboardSubCategoryController::class, 'edit'])->name('subcategory.edit');
    Route::post('/subcategory/update/{id}', [DashboardSubCategoryController::class, 'update'])->name('subcategory.update');


    // Dashboard product
    Route::get('/product', [DashboardProductController::class, 'show'])->name('product.index');
    Route::get('/product/create', [DashboardProductController::class, 'create'])->name('product.create');
    Route::get('/product/edit', [DashboardProductController::class, 'edit'])->name('product.edit');

    // Dashboard Quick Inquiry
    Route::get('/quickinquiry', [QuickInquiryController::class, 'show'])->name('quickinquiry');

    // Dashboard subscriber
    Route::get('/subscriber', [SubscriberController::class, 'show'])->name('subscriber');



});
