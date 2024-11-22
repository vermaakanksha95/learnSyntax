<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get("/",[UserController::class,"index"])->name('homepage');

Route::prefix("user")->group(function(){});
Route::prefix("admin")->group(function(){
    Route::get("/",[AdminController::class,"dashboard"])->name("admin.dashboard");

    Route::resources([
        'course'=> CourseController::class,]);
    });



Route::prefix("auth")->group(function(){
    Route::controller(AuthController::class)->group(function(){
        Route::match(["get","post"],"login")->name("auth.login");
        Route::match(["get","post"],"register")->name("auth.register");

    });
});

Route::get("/{course_slug}", [UserController::class, "viewCourse"])->name('view.course');




