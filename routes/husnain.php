<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\DogController;
use App\Http\Controllers\BirdController;
use App\Http\Controllers\HenController;
use App\Http\Controllers\HenchickController;



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



Route::get('/nav', [App\Http\Controllers\NavbarController::class, 'nav']);
Route::get('/persian', [App\Http\Controllers\CatController::class, 'persi']);
Route::get('/siamese', [App\Http\Controllers\CatController::class, 'sia']);
Route::get('/khaomanee', [App\Http\Controllers\CatController::class, 'khao']);
Route::get('/catkitten', [App\Http\Controllers\CatController::class, 'catk']);

Route::get('/germanshaphered', [App\Http\Controllers\DogController::class, 'german']);
Route::get('/labrador', [App\Http\Controllers\DogController::class, 'lab']);
Route::get('/pista', [App\Http\Controllers\DogController::class, 'pist']);

Route::get('/australian', [App\Http\Controllers\BirdController::class, 'aust']);
Route::get('/raw', [App\Http\Controllers\BirdController::class, 'ra']);
Route::get('/dove', [App\Http\Controllers\BirdController::class, 'dov']);
Route::get('/fancypigeon', [App\Http\Controllers\BirdController::class, 'fancy']);

Route::get('/bentom', [App\Http\Controllers\HenController::class, 'ben']);
Route::get('/goldenbuff', [App\Http\Controllers\HenController::class, 'golden']);
Route::get('/polish', [App\Http\Controllers\HenController::class, 'pol']);
Route::get('/milliflower', [App\Http\Controllers\HenController::class, 'milli']);

Route::get('/polishchick', [App\Http\Controllers\HenchickController::class, 'polchick']);
Route::get('/goldenbuffchick', [App\Http\Controllers\HenchickController::class, 'golchick']);
Route::get('/milliflowerchick', [App\Http\Controllers\HenchickController::class, 'millichick']);
Route::get('/englishgamechick', [App\Http\Controllers\HenchickController::class, 'englishchick']);
Route::get('/shamoaseelchick', [App\Http\Controllers\HenchickController::class, 'shamochick']);
Route::get('/goldenmesrichick', [App\Http\Controllers\HenchickController::class, 'mesrichick']);
Route::get('/desihenchick', [App\Http\Controllers\HenchickController::class, 'desichick']);
Route::get('/cardview', [App\Http\Controllers\HenchickController::class, 'car']);








