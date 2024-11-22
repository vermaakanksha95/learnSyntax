@extends('layout')
@section('content')
<div>
    <div class=" flex w-full h-[450px] bg-slate-400">
        <div class=" flex  w-full p-10 gap-2">
            <div class=" flex flex-col ">
            <h1 class=" text-3xl font-sansserif font-semibold">{{$course->course_title}}</h1>
                <p class=" mt-3 text-lg  ">{{$course->description}}</p>
                <h1></h1>

            </div>
            <div class=" p-2 mt-20 flex fixed right-6 bg-slate-500  w-[400px] h-[350px] ">
                <img src="/image/{{$course->image}}" alt="">


            </div>
        </div>

    </div>

    <div class=" flex flex-col p-10 ">
        <h1 class="text-2xl font-light">Explore Related Courses</h1>

        <div class=" flex gap-3 mt-3">
            <div class="  px-16 py-3 rounded-full border border-slate-500">
                <h1 class=" text-2xl font-semibold"></h1>

            </div>


        </div>

    </div>
    <div class="flex justify-start flex-1   px-[10%]">

        <div class=" h-[500px]  border w-8/12 border-slate-400  ">
            <div class=" flex justify-between">
                <div class=" flex flex-col px-5 py-3">
                    <div class=" flex text-2xl py-3 items-center gap-2 ">
                        <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 5.25 7.5 7.5 7.5-7.5m-15 6 7.5 7.5 7.5-7.5" />
                            </svg>

                        </span>
                        <h3>introduction</h3>
                    </div>
                    <div class=" flex text-2xl py-3 items-center gap-2">
                        <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 5.25 7.5 7.5 7.5-7.5m-15 6 7.5 7.5 7.5-7.5" />
                            </svg>

                        </span>
                        <h3>introduction</h3>
                    </div>
                    <div class=" flex text-2xl py-3 items-center gap-2">
                        <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 5.25 7.5 7.5 7.5-7.5m-15 6 7.5 7.5 7.5-7.5" />
                            </svg>

                        </span>
                        <h3>introduction</h3>
                    </div>
                </div>

            </div>


        </div>

    </div>

</div>
@endsection