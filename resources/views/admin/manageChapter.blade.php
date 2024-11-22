@extends('admin.adminbase')
@section('title',"Manage Courses |")
@section('content')
<div class="relative overflow-x-auto w-full">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase  dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        chapter title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        chapter slug
                    </th>
                   
                    <th scope="col" class="px-6 py-3">
                         chapter description
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
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection