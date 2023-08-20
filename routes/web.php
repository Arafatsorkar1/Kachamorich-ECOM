<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\CategoryController;





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
   Route::get('/dashboard', [DashBoardController::class,'index'])->name('dashboard');
   Route::resource('admin-categories' , CategoryController::class);
});
