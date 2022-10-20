<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;

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


Route::get('/', [RouteController::class, 'Home']);

Route::get('/news', [RouteController::class, 'News'])->name('news');
Route::get('/news/detail/1', [RouteController::class, 'NewsDetail'])->name('news-detail');
Route::get('/galeries', [RouteController::class, 'Galeries'])->name('galeries');
Route::get('/galeries/detail/1', [RouteController::class, 'GaleriesDetail'])->name('galeries-detail');
Route::get('/about/{who}', [RouteController::class, 'About'])->name('about');
Route::get('/competition/{what}', [RouteController::class, 'Competition'])->name('competition');
