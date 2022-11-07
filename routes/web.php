<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\RegisterCotroller;
use App\Http\Controllers\SesionCotroller;
use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\CategoryController;
Route::get('/', [CategoryController::class, 'landingPage']);
Route::get('/categoria-prodotto/{slug}/', [ItemController::class, 'selectedCategoryItems']);
Route::get('/categoria-prodotto/{slug}/{slug1}/', [ItemController::class, 'selectedCategoryItems']);
Route::get('/categoria-prodotto/{slug}/{slug1}/{slug2}/', [ItemController::class, 'selectedCategoryItems']);

Route::get('/prodotto/{slug}/', [ItemController::class, 'selectedItem']);



Route::get('register', [RegisterCotroller::class, 'create'])->middleware('guest');
Route::post('registers', [RegisterCotroller::class, 'store'])->middleware('guest');
Route::get('login', [SesionCotroller::class, 'create'])->middleware('guest');
Route::post('login', [SesionCotroller::class, 'store'])->middleware('guest');
Route::post('logout', [SesionCotroller::class, 'destroy'])->middleware('auth');


//Route::get('/categoria-prodotto/{slug}/',       [ItemController::class, 'currentItem']);
