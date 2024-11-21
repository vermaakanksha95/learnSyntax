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
        <div class=" w-3/12 bg-slate-400 h-screen">

        </div>

    </div>


</body>

</html>