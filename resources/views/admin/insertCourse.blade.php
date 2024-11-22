@extends('admin.adminbase')
@section('title',"Insert Course | ")
@section('content')
<div class=" flex flex-1 flex-col gap-5 p-3">
    <div class=" flex flex-1  flex-col gap-5 px-[5%]">
        <div class="flex  justify-between">
            <h2 class=" border-l-4 border-teal-600 pl-2 text-xl">Insert Course</h2>
            <a href="{{route('course.index')}}" class=" bg-teal-600 text-white px-3 py-2 rounded">View All Courses</a>
        </div>
        <form action="{{route('course.store')}}" method="post" class="bg-slate-600 p-2 rounded-md" enctype="multipart/form-data">
            @csrf

            <div class=" grid grid-cols-2 gap-5">
                <div class="mb-1 flex flex-col gap-1">
                    <label for="title" class="block text-lg font-semibold text-white ">Course Title</label>
                    <input type="text" name="course_title" id="title" class="w-full  text-black border-slate-400 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-2 mt-1">
                    @error('course_title') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>


                <div class="mb-1 flex flex-col gap-1">
                    <label for="description" class="block text-lg font-semibold text-white ">Description</label>
                    <textarea name="description" id="description" rows="3" class="w-full text-black border-gray-300 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-2 mt-1 "></textarea>
                    @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class=" flex flex-1 flex-col gap-3">
                    <label for="author" class="block text-lg font-semibold text-white ">Author</label>
                    <input type="text" name="author" id="author" class="w-full text-black border-slate-400 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-2 mt-1">
                    @error('author') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="mb-4">
                    <label for="author_image" class="block text-lg font-semibold text-white ">author_image</label>
                    <input type="file" name="author_image" onchange="preview()" id="author_image" class="w-full text-black border-slate-400 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-2 mt-1">
                    @error('author_image') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="mb-4">
                    <label for="image" class="block text-lg font-semibold text-white">Image</label>
                    <input type="file" name="image" onchange="preview()" id="image" class="w-full border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-2 mt-1">

                </div>

            </div>
            <div class="text-center">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">Submit</button>
            </div>

        </form>


    </div>
</div>
@endsection
@section('js')
<script>
    function preview() {
        const file = document.getElementById('image').files[0];
        const reader = new FileReader();
        reader.onloadend = () => {
            document.getElementById('demo').src = reader.result;

        }
        reader.readAsDataURL(file);
    }
</script>