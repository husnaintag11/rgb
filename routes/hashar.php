<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CountryController;
use App\Http\Controllers\admin\Sub_CategoryController;
use App\Http\Controllers\admin\AdminCategoriesController;
use App\Http\Controllers\admin\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('gst', [AdminCategoriesController::class, 'view']);

Route::get('dash', [AdminCategoriesController::class, 'dashboard']);
Route::get('bill', [AdminCategoriesController::class, 'billing']);
Route::get('icon', [AdminCategoriesController::class, 'icon']);
Route::get(' map', [AdminCategoriesController::class, 'map']);
Route::get('notification', [AdminCategoriesController::class, 'notification']);
Route::get('profile', [AdminCategoriesController::class, 'profile']);
Route::get('rtl', [AdminCategoriesController::class, 'rtl']);
Route::get('sign_in', [AdminCategoriesController::class, 'sign_in']);
Route::get('sign_up', [AdminCategoriesController::class, 'sign_up']);

Route::get('template', [AdminCategoriesController::class, 'template']);
Route::get('tpy', [AdminCategoriesController::class, 'tpy']);
Route::get('v_r', [AdminCategoriesController::class, 'v_r']);


Route::prefix('categories')->group(function(){
    Route::get('/',[CategoryController::class,'index'])->name('cat.index');

    Route::get('/create',[CategoryController::class,'create'])->name('cat.create');

    Route::post('/store',[CategoryController::class,'store'])->name('cat.store');

    Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('cat.edit');

    Route::post('/update/{id}',[CategoryController::class,'update'])->name('cat.update');

    Route::get('/delete/{id}',[CategoryController::class,'delete'])->name('cat.delete');


});




Route::prefix('sub_categories')->group(function(){
    Route::get('/',[Sub_CategoryController::class,'index'])->name('sub_cat.index');

    Route::get('/create',[Sub_CategoryController::class,'create'])->name('sub_cat.create');

    Route::post('/store',[Sub_CategoryController::class,'store'])->name('sub_cat.store');

    Route::get('/edit/{id}',[Sub_CategoryController::class,'edit'])->name('sub_cat.edit');

    Route::post('/update/{id}',[Sub_CategoryController::class,'update'])->name('sub_cat.update');

    Route::get('/delete/{id}',[Sub_CategoryController::class,'delete'])->name('sub_cat.delete');


});



Route::prefix('country')->group(function(){
    Route::get('/',[CountryController::class,'index'])->name('cout.index');

    Route::get('/create',[CountryController::class,'create'])->name('cout.create');

    Route::post('/store',[CountryController::class,'store'])->name('cout.store');

    Route::get('/edit/{id}',[CountryController::class,'edit'])->name('cout.edit');

    Route::post('/update/{id}',[CountryController::class,'update'])->name('cout.update');

    Route::get('/delete/{id}',[CountryController::class,'delete'])->name('cout.delete');


});


