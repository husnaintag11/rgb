<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Multi_ImageController;


use App\Http\Controllers\FrontController;
use App\Http\Controllers\ListingController;

use App\Http\Controllers\ProfileController;


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








//Add to cart

Route::post('/add_to_cart', [HenchickController::class, 'add_to_cart']);


//new home
Route::prefix('/')->group(function(){

    Route::get('/',[FrontController::class,'index'])->name('/');
    Route::get('/contant',[FrontController::class,'contant'])->name('contant');
    Route::get('/about',[FrontController::class,'about'])->name('about');
    // profile
    Route::get('/profile',[ProfileController::class,'profile'])->name('profile');
    Route::post('/profile.update',[ProfileController::class,'update'])->name('profile.update');

    Route::get('/task',[FrontController::class,'task'])->name('/task');
});

Route::prefix('/profile')->group(function(){
    Route::get('/add_listing',[ListingController::class,'add_listing'])->name('add_listing');
    Route::post('/store',[ListingController::class,'store'])->name('listing.store');


    // Route::get('/country',[ListingController::class,'country'])->name('country');
    // Route::post('/state/{id}',[ListingController::class,'state'])->name('state');
    // Route::get('/city',[ListingController::class,'city'])->name('city');


});
// countries
Route::get('/create',[ListingController::class,'country']);
Route::post('/fetch-states/{id}',[ListingController::class,'fetchStates']);
Route::post('/fetch-cities/{id}',[ListingController::class,'fetchCities']);
Route::post('/fetch-streets/{id}',[ListingController::class,'fetchStreets']);
// routes/web.php
Route::get('/store', [Multi_ImageController::class,'store']);
