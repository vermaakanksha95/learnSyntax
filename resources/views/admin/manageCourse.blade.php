@extends('admin.adminbase')
@section('title',"Manage Courses |")
@section('content')
<div class="   gap-5 px-[5%] py-10">
    <div class=" flex flex-1 justify-between items-center">
        <h2 class=" border-l-4 border-teal-600 pl-2 text-xl">Manage Courses({{{count($courses)}}})</h2>
        <a href="{{route('course.create')}}" class=" bg-teal-600 text-white px-3 py-2 rounded">Create Course</a>

    </div>

    <div class=" flex flex-1">
        @session('error')
        <div class=" bg-red-400 text-white p-3 rounded">{{session('error')}}</div>
        @endsession

    </div>

    <div class="flex flex-1">
        @session('success')
        <div class=" bg-green-500 text-white p-3 rounded">{{session('success')}}</div>
        @endsession
    </div>
    <div class="relative overflow-x-auto w-full">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase  dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        course title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        course slug
                    </th>
                    <th scope="col" class="px-6 py-3">
                        image
                    </th>
                    <th scope="col" class="px-6 py-3">
                        author image
                    </th>
                    <th scope="col" class="px-6 py-3">
                        description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)

                <tr class=" bg-white  border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$course->id}}
                    </th>
                    <td class="px-6 py-4">
                        {{$course->course_title}}
                    </td>
                    <td class="px-6 py-4">
                        {{$course->course_slug}}
                    </td>
                    <td class="px-6 py-4">
                        {{$course->image}}
                    </td>
                    <td class="px-6 py-4">
                        {{$course->author_image}}
                    </td>
                    <td class="px-6 py-4">
                        {{$course->description}}
                    </td>
                    <td class="px-6 py-4">
                        {{$course->course}}
                    </td>

                    <td class="px-6 py-4 flex gap-2">
                        <form action="{{route('course.destroy',$course)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 hover:bg-red-800 text-white px-3 py-2 rounded ">Delete</button>
                        </form>
                        <a href="{{route('chapter.create')}}">add chapter</a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>

    </div>


</div>


@endsection