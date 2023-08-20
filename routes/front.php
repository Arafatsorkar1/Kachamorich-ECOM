<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Fornt\HomePageController;
use App\Http\Controllers\Fornt\FrontCategoryController;
use App\Http\Controllers\Fornt\ProductDetailsController;

Route::get('/' , [HomePageController::class,'home'])->name('home');


Route::resource('categories', FrontCategoryController::class);
Route::resource('product-details', ProductDetailsController::class);



