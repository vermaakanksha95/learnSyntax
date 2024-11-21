<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | {{env('APP_NAME')}}</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-800 text-white ">
    <header class="flex items-center justify-between p-4 bg-gray-900">


        <div class="flex items-center space-x-2">
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                <path d="M3 3h14a2 2 0 012 2v10a2 2 0 01-2 2H3a2 2 0 01-2-2V5a2 2 0 012-2z"></path>
            </svg>
            <a href="{{route('admin.dashboard')}}" class="text-2xl font-bold">Learn Syntax</a>
        </div>
        <button>
            <a href="" class=" px-3 py-2 text-white bg-gray-700 rounded">Logout</a>
        </button>
    </header>

    <div class=" flex flex-1">
        <div class="flex flex-1 gap-5">
            <div class="w-2/12 flex h-screen">
                <aside class="w-64 bg-gray-900 p-4">

                    <nav class="p-2 space-y-1">
                        <a href="" class="flex items-center space-x-2  rounded hover:bg-gray-700 text-gray-400 p-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M12 8v4l3 3m6 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>Dashboard</span>
                        </a>


                        <a href="{{route('course.index')}}" class="flex items-center space-x-2 text-gray-400  hover:bg-gray-700  p-2 rounded">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M12 14l9-5-9-5-9 5 9 5zm0 7v-5.5l4.5-2.5m-9 0L12 21"></path>
                            </svg>
                            <span>Manage Course</span>
                        </a>
                        <a href="{{route('course.create')}}" class="flex items-center space-x-2 text-gray-400  hover:bg-gray-700  p-2 rounded">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M12 14l9-5-9-5-9 5 9 5zm0 7v-5.5l4.5-2.5m-9 0L12 21"></path>
                            </svg>
                            <span>insert Course</span>
                        </a>
                        <a href="" class="flex items-center space-x-2 text-gray-400  hover:bg-gray-700  p-2 rounded">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M5 7a5 5 0 0110 0v10a5 5 0 01-10 0V7z"></path>
                            </svg>
                            <span>Manage Chapter</span>
                        </a>
                        <a href="" class="flex items-center space-x-2 text-gray-400  hover:bg-gray-700  p-2 rounded">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M12 14l9-5-9-5-9 5 9 5zm0 7v-5.5l4.5-2.5m-9 0L12 21"></path>
                            </svg>
                            <span>insert chapter</span>
                        </a>
                        <a href="" class="flex items-center space-x-2 text-gray-400  hover:bg-gray-700  p-2 rounded">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M5 7a5 5 0 0110 0v10a5 5 0 01-10 0V7z"></path>
                            </svg>
                            <span>Manage topic</span>
                        </a>
                    </nav>
                </aside>
            </div>
            <div class="w-10/12 flex">

                @section('content')
                @show
            </div>


        </div>

    </div>




</body>

</html>