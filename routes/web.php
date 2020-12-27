<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Back-End Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin','App\Http\Controllers\Admin\HomeController@index');


/*
|--------------------------------------------------------------------------
| Front-End Routes
|--------------------------------------------------------------------------
*/

Route::get('/','App\Http\Controllers\HomeController@index')->name('homepage');
Route::get('/about','App\Http\Controllers\HomeController@about')->name('about');
Route::get('/categories','App\Http\Controllers\HomeController@categories')->name('categories');
Route::get('/listing','App\Http\Controllers\HomeController@listing')->name('listing');
Route::get('/contact','App\Http\Controllers\HomeController@contact')->name('contact');
Route::get('/listing_details','App\Http\Controllers\HomeController@listing_details')->name('listing_details');
/*
Route::get('/', function () {
    return view('homepage');
})->name('homepage');*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
