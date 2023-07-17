<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\adminv2\AdminController;
use App\Http\Controllers\admin\StreetController;
use App\Http\Controllers\admin\StateController;
use App\Http\Controllers\admin\CityController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\CountryController;
use App\Http\Controllers\admin\AddressController;
use App\Http\Controllers\admin\Sub_CategoryController;
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








Route::prefix('adminv2')->group(function(){


 Route::get('/index',[AdminController::class,'index']);

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


    Route::prefix('address')->group(function(){
        Route::get('/',[AddressController::class,'index'])->name('address.index');

        Route::get('/create',[AddressController::class,'create'])->name('address.create');

        Route::post('/store',[AddressController::class,'store'])->name('address.store');

        Route::get('/edit/{id}',[AddressController::class,'edit'])->name('address.edit');

        Route::post('/update/{id}',[AddressController::class,'update'])->name('address.update');

        Route::get('/delete/{id}',[AddressController::class,'delete'])->name('address.delete');


    });

    Route::prefix('product')->group(function(){
        Route::get('/',[ProductController::class,'index'])->name('prdct.index');

        Route::get('/create',[ProductController::class,'create'])->name('prdct.create');

        Route::post('/store',[ProductController::class,'store'])->name('prdct.store');

        Route::get('/edit/{id}',[ProductController::class,'edit'])->name('prdct.edit');

        Route::post('/update/{id}',[ProductController::class,'update'])->name('prdct.update');

        Route::get('/delete/{id}',[ProductController::class,'delete'])->name('prdct.delete');


    });

    Route::prefix('city')->group(function(){
        Route::get('/',[CityController::class,'index'])->name('sta.index');

        Route::get('/create',[CityController::class,'create'])->name('sta.create');



        Route::post('/store',[CityController::class,'store'])->name('sta.store');

        Route::get('/edit/{id}',[CityController::class,'edit'])->name('sta.edit');
        Route::post('/filter-cities', [CityController::class, 'filterCities'])->name('filter-cities');
        Route::post('/update/{id}',[CityController::class,'update'])->name('sta.update');

        Route::get('/delete/{id}',[CityController::class,'delete'])->name('sta.delete');


    });


    Route::prefix('state')->group(function(){
        Route::get('/',[StateController::class,'index'])->name('sa.index');

        Route::get('/create',[StateController::class,'create'])->name('sa.create');

        Route::post('/store',[StateController::class,'store'])->name('sa.store');

        Route::get('/edit/{id}',[StateController::class,'edit'])->name('sa.edit');

        Route::post('/update/{id}',[StateController::class,'update'])->name('sa.update');

        Route::get('/delete/{id}',[StateController::class,'delete'])->name('sa.delete');


    });

    Route::prefix('street')->group(function(){
        Route::get('/',[StreetController::class,'index'])->name('st.index');

        Route::get('/create',[StreetController::class,'create'])->name('st.create');

        Route::post('/store',[StreetController::class,'store'])->name('st.store');

        Route::get('/edit/{id}',[StreetController::class,'edit'])->name('st.edit');

        Route::post('/update/{id}',[StreetController::class,'update'])->name('st.update');

        Route::get('/delete/{id}',[StreetController::class,'delete'])->name('st.delete');


    });
// countries

});




