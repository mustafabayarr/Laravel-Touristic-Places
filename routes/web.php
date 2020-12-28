<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Back-End Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin',[App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_index')->middleware('auth');
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
