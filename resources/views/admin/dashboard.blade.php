@extends('admin.adminbase')
@section('title',"Dashboard |");
@section('content')
<main class="flex-1 p-6">
    <!-- Top navigation -->
    <div class="flex items-center justify-between">
        <h1 class="text-2xl font-bold">Dashboard</h1>
        <div class="flex items-center space-x-4">
            <input type="text" placeholder="Search..." class="bg-gray-700 p-2 rounded text-gray-300">

        </div>
    </div>

    <!-- Stats cards -->
    <div class="grid grid-cols-4 gap-6 my-8">
        <div class="bg-green-500 p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold">Total Courses</h2>
            <p class="text-3xl font-bold">10</p>

        </div>
        <div class="bg-yellow-500 p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold">Total Chapters</h2>
            <p class="text-3xl font-bold">10</p>

        </div>
        <div class="bg-blue-500 p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold">Total Topics</h2>
            <p class="text-3xl font-bold">10</p>

        </div>
        <div class="bg-red-500 p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold">Total Posts</h2>
            <p class="text-3xl font-bold">10</p>

        </div>
    </div>

    <!-- Charts section -->
    <div class="grid grid-cols-2 gap-6">
        <div class="bg-gray-900 p-6 rounded-lg shadow-md">
            <h2 class="text-lg font-semibold">University Survey</h2>
            <div class="mt-4">
                <!-- Placeholder for Chart 1 -->
                <div class="h-40 bg-gray-700 rounded"></div>
            </div>
        </div>
        <div class="bg-gray-900 p-6 rounded-lg shadow-md">
            <h2 class="text-lg font-semibold">University Survey</h2>
            <div class="mt-4">
                <!-- Placeholder for Chart 2 -->
                <div class="h-40 bg-gray-700 rounded"></div>
            </div>
        </div>
    </div>
</main>

@endsection