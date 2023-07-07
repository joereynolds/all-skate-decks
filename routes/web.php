<?php

use App\Http\Controllers\BrandsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('/brands/{brand?}', BrandsController::class);
