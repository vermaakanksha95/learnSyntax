<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data['courses'] = Course::all();
        return view("home",$data);

    }

    public function viewCourse($course_slug){
        $data['course'] = Course::where('course_slug',$course_slug)->first();
        return view("viewCourse",$data);

    }
}
