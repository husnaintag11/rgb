<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DasController;

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










//
//Dashboard

//Route::get('/',[DasController::class,'index'])->name('/');
//new home
Auth::routes();
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
    Route::get('/detail',[ListingController::class,'detail'])->name('details');
   // Route::get('/redirect', [ListingController::class, 'redirect'])->name('redirect');




});
// countries
Route::get('/create',[ListingController::class,'country']);
Route::post('/fetch-states/{id}',[ListingController::class,'fetchStates']);
Route::post('/fetch-cities/{id}',[ListingController::class,'fetchCities']);
Route::post('/fetch-streets/{id}',[ListingController::class,'fetchStreets']);


