<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get("/",[UserController::class,"index"])->name('homepage');
Route::get("/{course_slug}",[UserController::class,"viewCourse"])->name('view.course');
Route::prefix("user")->group(function(){

});
Route::prefix("admin")->group(function(){
    Route::get("/",[AdminController::class,"dashboard"])->name("admin.dashboard");

    Route::resources([
        'course'=> CourseController::class,
    ]);

});


