<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Models\Course;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
    //return view('welcome');
//});

Route::prefix("user")->group(function(){

});
Route::prefix("admin")->group(function(){
    Route::get("/",[AdminController::class,"dashboard"])->name("admin.dashboard");

    Route::resources([
        'course'=> CourseController::class,
    ]);

});


