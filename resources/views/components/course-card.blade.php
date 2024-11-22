<div class=" bg-white rounded-lg shadow-md overflow-hidden border border-gray-200">
    <a href="{{route('view.course',$course->course_slug)}}">
    
    <div class=" flex justify-center items-center">
        <img src="/image/{{$course->image}}" alt="Logo" class="h-[200px] w-full">
    </div>
   
    <div class="p-6">
        <h2 class="text-lg font-semibold text-gray-900">{{$course->course_title}}</h2>
        <p class="text-sm text-gray-600 mt-2">{{$course->author}}</p>
        
        <div class="flex items-center mt-4">
            <div class="flex items-center text-yellow-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current" viewBox="0 0 24 24">
                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current" viewBox="0 0 24 24">
                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current" viewBox="0 0 24 24">
                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current" viewBox="0 0 24 24">
                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300 fill-current" viewBox="0 0 24 24">
                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                </svg>
            </div>
            <span class="text-gray-700 ml-2 text-sm">(432)</span>
        </div>
       
    </div>
    </a>

    
</div>