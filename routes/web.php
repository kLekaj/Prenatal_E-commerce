<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\RegisterCotroller;
use App\Http\Controllers\SesionCotroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;



Route::get('/', [CategoryController::class, 'landingPage']);
Route::get('/categoria-prodotto/{slug}/', [ItemController::class, 'selectedItems']);
Route::get('/categoria-prodotto/{slug}/{slug1}/', [ItemController::class, 'selectedItems']);
Route::get('/categoria-prodotto/{slug}/{slug1}/{slug2}/', [ItemController::class, 'selectedItems']);
Route::get('register', [RegisterCotroller::class, 'create'])->middleware('guest');
Route::post('registers', [RegisterCotroller::class, 'store'])->middleware('guest');
Route::get('login', [SesionCotroller::class, 'create'])->middleware('guest');
Route::post('login', [SesionCotroller::class, 'store'])->middleware('guest');
Route::post('logout', [SesionCotroller::class, 'destroy'])->middleware('auth');
Route::get('/prodotto/{slug}/', [ItemController::class, 'selectedItem']);



