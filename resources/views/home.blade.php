@extends('layout')
@section('title')
Homepage
@endsection
@section('content')
<x-banner />

<div class=" w-full flex flex-1 flex-col px-[5%] py-5">
    <h2>Popular Courses</h2>

    <div class=" grid grid-cols-4 gap-5  mt-5">
        @foreach($courses as $course)
        <x-course-card :course="$course" />
        @endforeach


    </div>

</div>
@endsection