<?php

use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\PlacesControlller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Back-End Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->prefix('admin')->group(function () {

    //Admin Role
    Route::middleware('roles')->group(function () {


        Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_index');

        //Categories
        Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
        Route::post('/category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
        Route::get('/category/add', [App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
        Route::get('/category/store', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('admin_category_store');
        Route::get('/category/show', [App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');
        Route::get('/category/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
        Route::post('/category/update/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
        Route::get('/category/destroy/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_destroy');

        //İmages
        Route::prefix('image')->group(function () {
            //create ve store daki id ler places taki idler oluyor. delete deki id image teki oluyor
            Route::get('/create/{places_id}', [App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_create');
            Route::post('/store/{places_id}', [App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
            Route::get('/delete/{id}/{places_id}', [App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_destroy');
        });

        //Places
        Route::prefix('places')->group(function () {
            Route::get('/', [App\Http\Controllers\Admin\PlacesController::class, 'index'])->name('admin_places');
            Route::get('/create', [App\Http\Controllers\Admin\PlacesController::class, 'create'])->name('admin_places_create');
            Route::post('/store', [App\Http\Controllers\Admin\PlacesController::class, 'store'])->name('admin_places_store');
            Route::get('/show', [App\Http\Controllers\Admin\PlacesController::class, 'show'])->name('admin_places_show');
            Route::get('/edit/{id}', [App\Http\Controllers\Admin\PlacesController::class, 'edit'])->name('admin_places_edit');
            Route::post('/update/{id}', [App\Http\Controllers\Admin\PlacesController::class, 'update'])->name('admin_places_update');
            Route::get('/destroy/{id}', [App\Http\Controllers\Admin\PlacesController::class, 'destroy'])->name('admin_places_destroy');
        });
        //Messages
        Route::prefix('messages')->group(function () {
            Route::get('/', [MessageController::class, 'index'])->name('admin_message');
            Route::get('/show', [MessageController::class, 'show'])->name('admin_message_show');
            Route::get('/edit/{id}', [MessageController::class, 'edit'])->name('admin_message_edit');
            Route::post('/update/{id}', [MessageController::class, 'update'])->name('admin_message_update');
            Route::get('/destroy/{id}', [MessageController::class, 'destroy'])->name('admin_message_destroy');
        });
        //Messages
        Route::prefix('reviews')->group(function () {
            Route::get('/', [ReviewController::class, 'index'])->name('admin_review');
            Route::get('/show/{id}', [ReviewController::class, 'show'])->name('admin_review_show');
            Route::post('/update/{id}', [ReviewController::class, 'update'])->name('admin_review_update');
            Route::get('/destroy/{id}', [ReviewController::class, 'destroy'])->name('admin_review_destroy');
        });
        //FAQ
        Route::prefix('faqs')->group(function () {
            Route::get('/', [FaqController::class, 'index'])->name('admin_faq');
            Route::get('/create', [FaqController::class, 'create'])->name('admin_faq_create');
            Route::post('/store', [FaqController::class, 'store'])->name('admin_faq_store');
            Route::get('/show', [FaqController::class, 'show'])->name('admin_faq_show');
            Route::get('/edit/{id}', [FaqController::class, 'edit'])->name('admin_faq_edit');
            Route::post('/update/{id}', [FaqController::class, 'update'])->name('admin_faq_update');
            Route::get('/destroy/{id}', [FaqController   ::class, 'destroy'])->name('admin_faq_destroy');
        });
        //Setting
        Route::get('/setting', [SettingController::class, 'index'])->name('admin_setting');
        Route::post('/setting/update', [SettingController::class, 'update'])->name('admin_setting_update');
        //Places
        Route::prefix('users')->group(function () {
            Route::get('/', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_users');
            Route::get('/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin_user_create');
            Route::post('/store', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_user_store');
            Route::get('/show/{id}', [App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');
            Route::get('/edit/{id}', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
            Route::post('/update/{id}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
            Route::get('/destroy/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_destroy');
            Route::get('/userrole/{id}', [App\Http\Controllers\Admin\UserController::class, 'user_roles'])->name('admin_user_roles');
            Route::post('/userrolestore/{id}', [App\Http\Controllers\Admin\UserController::class, 'user_roles_store'])->name('admin_user_role_add');
            Route::get('/userroledelete/{userid}/{roleid}', [App\Http\Controllers\Admin\UserController::class, 'user_roles_delete'])->name('admin_user_role_delete');
        });

    });//admin role

});//auth

Route::get('/admin/login', [App\Http\Controllers\Admin\HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/login_check', [App\Http\Controllers\Admin\HomeController::class, 'login_check'])->name('admin_login_check');
Route::get('/admin/logout', [App\Http\Controllers\Admin\HomeController::class, 'logout'])->name('admin_logout');


/*
|--------------------------------------------------------------------------
| Front-End Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->prefix('my_account')->namespace('my_account')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('my_account');
    Route::get('/my_reviews', [UserController::class, 'my_reviews'])->name('my_reviews');
    Route::get('/destroy/{id}', [UserController::class, 'destroy'])->name('reviews_destroy');
});

Route::middleware(['auth'])->prefix('user')->group(function () {
    Route::get('/profile', [UserController::class, 'index'])->name('profile.show');
    //User Places
    Route::prefix('places')->group(function () {
        Route::get('/', [PlacesControlller::class, 'index'])->name('user_places');
        Route::get('/create', [PlacesControlller::class, 'create'])->name('user_places_create');
        Route::post('/store', [PlacesControlller::class, 'store'])->name('user_places_store');
        Route::get('/show', [PlacesControlller::class, 'show'])->name('user_places_show');
        Route::get('/edit/{id}', [PlacesControlller::class, 'edit'])->name('user_places_edit');
        Route::post('/update/{id}', [PlacesControlller::class, 'update'])->name('user_places_update');
        Route::get('/destroy/{id}', [PlacesControlller::class, 'destroy'])->name('user_places_destroy');
    });
    //User Images
    Route::prefix('image')->group(function () {
        //create ve store daki id ler places taki idler oluyor. delete deki id image teki oluyor
        Route::get('/create/{places_id}', [App\Http\Controllers\ImageController::class, 'create'])->name('user_image_create');
        Route::post('/store/{places_id}', [App\Http\Controllers\ImageController::class, 'store'])->name('user_image_store');
        Route::get('/delete/{id}/{places_id}', [App\Http\Controllers\ImageController::class, 'destroy'])->name('user_image_destroy');
    });
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/categories', [App\Http\Controllers\HomeController::class, 'categories'])->name('categories');
Route::get('/listing', [App\Http\Controllers\HomeController::class, 'listing'])->name('listing');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::post('/sendmessage', [App\Http\Controllers\HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/references', [App\Http\Controllers\HomeController::class, 'references'])->name('references');
Route::get('/faq', [App\Http\Controllers\HomeController::class, 'faq'])->name('faq');
Route::get('/listing_details/{id}', [App\Http\Controllers\HomeController::class, 'listing_details'])->name('listing_details');
Route::get('/category_places/{id}/{slug}', [App\Http\Controllers\HomeController::class, 'category_places'])->name('category_places');
Route::post('/getplaces', [App\Http\Controllers\HomeController::class, 'get_places'])->name('get_places');


/*
Route::get('/', function () {
    return view('welcome');
})->name('welcome');*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
