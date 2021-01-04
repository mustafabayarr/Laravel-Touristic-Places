<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Back-End Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get('/',[App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_index');

    Route::get('/category',[App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
    Route::post('/category/create',[App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
    Route::get('/category/add',[App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
    Route::get('/category/store',[App\Http\Controllers\Admin\CategoryController::class,'store'])->name('admin_category_store');
    Route::get('/category/show',[App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');
    Route::get('/category/edit/{id}',[App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
    Route::post('/category/update/{id}',[App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('/category/destroy/{id}',[App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_destroy');
});




Route::get('/admin/login',[App\Http\Controllers\Admin\HomeController::class,'login'])->name('admin_login');
Route::post('/admin/login_check',[App\Http\Controllers\Admin\HomeController::class,'login_check'])->name('admin_login_check');
Route::get('/admin/logout',[App\Http\Controllers\Admin\HomeController::class,'logout'])->name('admin_logout');


/*
|--------------------------------------------------------------------------
| Front-End Routes
|--------------------------------------------------------------------------
*/

Route::get('/',[App\Http\Controllers\HomeController::class,'index'])->name('homepage');
Route::get('/about',[App\Http\Controllers\HomeController::class,'about'])->name('about');
Route::get('/categories',[App\Http\Controllers\HomeController::class,'categories'])->name('categories');
Route::get('/listing',[App\Http\Controllers\HomeController::class,'listing'])->name('listing');
Route::get('/contact',[App\Http\Controllers\HomeController::class,'contact'])->name('contact');
Route::get('/listing_details',[App\Http\Controllers\HomeController::class,'listing_details'])->name('listing_details');
/*
Route::get('/', function () {
    return view('welcome');
})->name('welcome');*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
