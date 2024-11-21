<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get("/",[UserController::class,"index"])->name('homepage');
Route::prefix("user")->group(function(){

});
Route::prefix("admin")->group(function(){
    Route::get("/",[AdminController::class,"dashboard"])->name("admin.dashboard");

    Route::resources([
        'course'=> CourseController::class,
    ]);

});


