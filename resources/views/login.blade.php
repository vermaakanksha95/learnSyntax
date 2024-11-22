@extends('layout')
@section('content')
<div class="flex flex-1 justify-center items-center  h-[80vh]">
    <div class="w-4/12">
        <div class="border  p-5 rounded-lg border-blue-300 shadow-lg">
            <a href=" "
                class="flex items-center justify-center gap-2 px-4 py-2 bg-slate-200  border border-black rounded-md shadow-sm hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-300">
                <img src="Google_Icons-09-512 (1).webp" alt="Google Logo" class="w-8 h-8">
                <span class="text-xl font-medium text-gray-700">Sign in with Google</span>
            </a>

            <form action="{{route('auth.login')}}" method="post" class="gap-3 flex flex-col ">
                @csrf
                <h2 class="text-2xl font-semibold mt-2">Login Here!</h2>

                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="text" name="email"  class="border w-full px-3 py-2 rounded">
                    @error('email')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">Password</label>
                    <input type="password" name="password"  class="border w-full px-3 py-2 rounded">
                    @error('password')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <div class="flex flex-1 justify-end">
                    <input type="submit" class="bg-teal-600 text-white px-3 py-2 rounded self-end" value="Login Here">
                </div>
                <div class="text-md text-slate-500">
                    Dont'n have an account?

                    <a href="{{route('auth.register')}}" class="text-blue-700 underline capitalize">signup</a>
                </div>

            </form>
        </div>
        @session('error')
        <p class="text-red-600 text-xl font-semibold">{{session('error')}}</p>
        @endsession

    </div>
</div>
@endsection