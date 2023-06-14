<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\DogController;
use App\Http\Controllers\BirdController;
use App\Http\Controllers\HenController;
use App\Http\Controllers\HenchickController;
use App\Http\Controllers\FrontController;
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



Route::get('/nav', [NavbarController::class, 'nav']);
Route::get('/persian', [CatController::class, 'persi']);
Route::get('/siamese', [CatController::class, 'sia']);
Route::get('/khaomanee', [CatController::class, 'khao']);
Route::get('/catkitten', [CatController::class, 'catk']);

Route::get('/germanshaphered', [DogController::class, 'german']);
Route::get('/labrador', [DogController::class, 'lab']);
Route::get('/pista', [DogController::class, 'pist']);

Route::get('/australian', [BirdController::class, 'aust']);
Route::get('/raw', [BirdController::class, 'ra']);
Route::get('/dove', [BirdController::class, 'dov']);
Route::get('/fancypigeon', [BirdController::class, 'fancy']);

Route::get('/bentom', [HenController::class, 'ben']);
Route::get('/goldenbuff', [HenController::class, 'golden']);
Route::get('/polish', [HenController::class, 'pol']);
Route::get('/milliflower', [HenController::class, 'milli']);

Route::get('/polishchick', [HenchickController::class, 'polchick']);
Route::get('/goldenbuffchick', [HenchickController::class, 'golchick']);
Route::get('/milliflowerchick', [HenchickController::class, 'millichick']);
Route::get('/englishgamechick', [HenchickController::class, 'englishchick']);
Route::get('/shamoaseelchick', [HenchickController::class, 'shamochick']);
Route::get('/goldenmesrichick', [HenchickController::class, 'mesrichick']);
Route::get('/desihenchick', [HenchickController::class, 'desichick']);
Route::get('/cardview', [HenchickController::class, 'car']);

//Add to cart

Route::post('/add_to_cart', [HenchickController::class, 'add_to_cart']);


//new home
    Route::group(['prefix'=>'/'],function() {
            Route::get('/',[FrontController::class,'index'])->name('/');
            Route::get('/contant',[FrontController::class,'contant'])->name('contant');
            Route::get('/about',[FrontController::class,'about'])->name('about');
            // profile
            Route::get('/profile',[ProfileController::class,'profile'])->name('profile');
            Route::post('/profile.update',[ProfileController::class,'update'])->name('profile.update');
            // Route::get('/edit',[ProfileController::class,'edit'])->name('edit');

// task
            Route::get('/task',[FrontController::class,'task'])->name('/task');
    });
