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
use App\Http\Controllers\Dashboard\GalleryController;
use App\Http\Controllers\Dashboard\SeoController;
use App\Http\Controllers\HomeController2;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SubcategoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Frontend Start
|--------------------------------------------------------------------------
*/

// frontend home page route
Route::get('/', [HomeController2::class, 'show'])->name('homepage');

// frontend about page route
Route::get('/about', [AboutController::class, 'show'])->name('about');

// frontend service page route
Route::get('/service', [ServiceController::class, 'show'])->name('service');

// frontend contact page route
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

// frontend category page route
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/categories/{slug}', [CategoryController::class, 'show'])->name('categories.show');

// frontend subcategory page route
// Route::get('/subcategories/{slug}', [SubcategoryController::class, 'show'])->name('subcategories.show');

// frontend product page route
Route::get('/products/{slug}', [ProductController::class, 'show'])->name('product.show');

// frontend subscriber
Route::post('/subscribe/store', [SubscriberController::class, 'store'])->name('subscribe.store');

/*
|--------------------------------------------------------------------------
| Dashboard Start
|--------------------------------------------------------------------------
*/

Route::prefix('dashboard')->middleware('auth')->group(function(){
    // Dashboard home
    Route::get('/', [DashboardHomeController::class, 'show'])->name('dashboard');

    // Dashboard category
    Route::get('/category', [DashboardCategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [DashboardCategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [DashboardCategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id}', [DashboardCategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [DashboardCategoryController::class, 'update'])->name('category.update');
    // Route::get('/category/delete/{id}', [DashboardCategoryController::class, 'delete'])->name('category.delete');
    Route::get('/category/search', [DashboardCategoryController::class, 'search'])->name('category.search');


    // Dashboard subcategory
    // Route::get('/subcategory', [DashboardSubCategoryController::class, 'index'])->name('subcategory.index');
    // Route::get('/subcategory/create', [DashboardSubCategoryController::class, 'create'])->name('subcategory.create');
    // Route::post('/subcategory/store', [DashboardSubCategoryController::class, 'store'])->name('subcategory.store');
    // Route::get('/subcategory/edit/{id}', [DashboardSubCategoryController::class, 'edit'])->name('subcategory.edit');
    // Route::post('/subcategory/update/{id}', [DashboardSubCategoryController::class, 'update'])->name('subcategory.update');
    // Route::get('/subcategory/search', [DashboardSubCategoryController::class, 'search'])->name('subcategory.search');
    // Route::get('/subcategory/delete/{id}', [DashboardSubCategoryController::class, 'delete'])->name('subcategory.delete');

    // Dashboard product
    Route::get('/product', [DashboardProductController::class, 'show'])->name('product.index');
    Route::get('/product/create', [DashboardProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [DashboardProductController::class, 'store'])->name('product.store');
    Route::get('/product/edit/{id}', [DashboardProductController::class, 'edit'])->name('product.edit');
    Route::post('/product/update/{id}', [DashboardProductController::class, 'update'])->name('product.update');
    Route::get('/product/delete/{id}', [DashboardProductController::class, 'delete'])->name('product.delete');
    Route::get('/product/search', [DashboardProductController::class, 'search'])->name('product.search');
    // Route::get('/categoryBySubcategory/{id}', [DashboardProductController::class, 'categoryBySubcategory'])->name('categoryBySubcategory');


    // Dashboard Quick Inquiry
    Route::get('/quickinquiry', [QuickInquiryController::class, 'show'])->name('quickinquiry');

    // Dashboard subscriber
    Route::get('/subscriber', [SubscriberController::class, 'index'])->name('subscriber');
    Route::get('/subscriber/delete/{id}', [SubscriberController::class, 'delete'])->name('subscriber.delete');

    // Dashboard Contact
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/contact/delete/{id}', [ContactController::class, 'delete'])->name('contact.delete');
    Route::get('/contact/search', [ContactController::class, 'search'])->name('contact.search');

    // Dashboard Gallery
    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::get('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
    Route::post('/gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
    Route::get('/gallery/search', [GalleryController::class, 'search'])->name('gallery.search');
    Route::get('/gallery/paginate', [GalleryController::class, 'paginate'])->name('gallery.paginate');
    Route::get('/gallery/ajaxSearch', [GalleryController::class, 'ajaxSearch'])->name('gallery.search.ajax');

    // Dashboard Seo
    Route::get('seo', [SeoController::class, 'index'])->name('seo.index');
    Route::post('seo/update', [SeoController::class, 'update'])->name('seo.update');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
