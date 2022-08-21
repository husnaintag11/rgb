<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminCategoriesController;

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
Route::get('tables', [AdminCategoriesController::class, 'tables']);
Route::get('template', [AdminCategoriesController::class, 'template']);
Route::get('tpy', [AdminCategoriesController::class, 'tpy']);
Route::get('v_r', [AdminCategoriesController::class, 'v_r']);




