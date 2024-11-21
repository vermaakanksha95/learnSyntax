@extends('admin.adminbase')
@section('content')
<div class="flex w-full gap-2">
    <h1>hello</h1>
    <form action="{{route('course.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mt-4">
            <label for="title" class="block text-lg font-semibold text-white ">Course Title</label>
            <input type="text" name="course_title" id="title" class="w-full  text-black border-slate-400 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-2 mt-1">
            @error('course_title') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>


        <div class="mb-4">
            <label for="description" class="block text-lg font-semibold text-white ">Description</label>
            <textarea name="description" id="description" rows="3" class="w-full text-black border-gray-300 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-2 mt-1 "></textarea>
            @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="author" class="block text-lg font-semibold text-white ">Author</label>
            <input type="text" name="author" id="author" class="w-full text-black border-slate-400 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-2 mt-1">
            @error('author') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="author_image" class="block text-lg font-semibold text-white ">author_image</label>
            <input type="file" name="author_image" id="author_image" class="w-full text-black border-slate-400 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-2 mt-1">
            @error('author_image') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="image" class="block text-lg font-semibold text-white">Image</label>
            <input type="file" name="image" id="image" class="w-full border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-2 mt-1">

        </div>
        <div class="text-center">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">Submit</button>
        </div>

    </form>
    <div class="relative overflow-x-auto">
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

                <tr class="text-xkl border-b dark:bg-gray-800 dark:border-gray-700">
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
                        <a href="">delete</a>

                    </td>


                </tr>
                @endforeach
            </tbody>
        </table>
    </div>



</div>


@endsection