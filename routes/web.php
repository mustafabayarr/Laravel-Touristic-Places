<?php

use App\Http\Controllers\UserController;
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

    Route::prefix('image')->group(function(){
        //create ve store daki id ler places taki idler oluyor. delete deki id image teki oluyor
        Route::get('/create/{places_id}',[App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_create');
        Route::post('/store/{places_id}',[App\Http\Controllers\Admin\ImageController::class,'store'])->name('admin_image_store');
        Route::get('/delete/{id}/{places_id}',[App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('admin_image_destroy');
    });

    Route::prefix('places')->group(function(){
        Route::get('/',[App\Http\Controllers\Admin\PlacesController::class,'index'])->name('admin_places');
        Route::get('/create',[App\Http\Controllers\Admin\PlacesController::class,'create'])->name('admin_places_create');
        Route::post('/store',[App\Http\Controllers\Admin\PlacesController::class,'store'])->name('admin_places_store');
        Route::get('/show',[App\Http\Controllers\Admin\PlacesController::class,'show'])->name('admin_places_show');
        Route::get('/edit/{id}',[App\Http\Controllers\Admin\PlacesController::class,'edit'])->name('admin_places_edit');
        Route::post('/update/{id}',[App\Http\Controllers\Admin\PlacesController::class,'update'])->name('admin_places_update');
        Route::get('/destroy/{id}',[App\Http\Controllers\Admin\PlacesController::class,'destroy'])->name('admin_places_destroy');
    });
    //Setting
    Route::get('/setting',[App\Http\Controllers\Admin\SettingController::class,'index'])->name('admin_setting');
    Route::post('/setting/update',[App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin_setting_update');


});




Route::get('/admin/login',[App\Http\Controllers\Admin\HomeController::class,'login'])->name('admin_login');
Route::post('/admin/login_check',[App\Http\Controllers\Admin\HomeController::class,'login_check'])->name('admin_login_check');
Route::get('/admin/logout',[App\Http\Controllers\Admin\HomeController::class,'logout'])->name('admin_logout');


/*
|--------------------------------------------------------------------------
| Front-End Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->prefix('my_account')->group(function () {
    Route::get('/',[UserController::class,'index'])->name('my_account');
});
Route::middleware(['auth'])->prefix('user')->group(function () {
    Route::get('/profile',[UserController::class,'index'])->name('user_profile');
});

Route::get('/',[App\Http\Controllers\HomeController::class,'index'])->name('homepage');
Route::get('/about',[App\Http\Controllers\HomeController::class,'about'])->name('about');
Route::get('/categories',[App\Http\Controllers\HomeController::class,'categories'])->name('categories');
Route::get('/listing',[App\Http\Controllers\HomeController::class,'listing'])->name('listing');
Route::get('/contact',[App\Http\Controllers\HomeController::class,'contact'])->name('contact');
Route::get('/references',[App\Http\Controllers\HomeController::class,'references'])->name('references');
Route::get('/listing_details',[App\Http\Controllers\HomeController::class,'listing_details'])->name('listing_details');
/*
Route::get('/', function () {
    return view('welcome');
})->name('welcome');*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
