@extends('layouts.main')

@section('content')
    <div class="my-5 w-full md: flex sm: flex-wrap">
        <div class="p-5 h-auto mx-auto">
            <img src="{{ asset('/img/login.png') }}" alt="login picture" class="w-full max-w-[800px] h-auto mx-auto">
        </div>
        <div class="bg-[#F1F1F1]  shadow-md rounded-lg p-6 md: m-5 p-10 w-full max-w-md mx-auto">
            <p class=" m-5 text-left font-black text-2xl md:text-3xl mb-6">Create an Account</p>
            <form class="w-full">
                @csrf
                <div class="flex flex-col mb-6 mx-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="email">
                        Email:  
                    </label>
                    <input class="appearance-none block w-full bg-[#F1F1F1] text-gray-700 border border-gray-500 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white md:py-3 px-4 " id="email" type="email" required aria-label="Email">
                </div>
                <div class="flex flex-col mb-6 mx-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password">
                        Password:
                    </label>
                    <input class="appearance-none block w-full bg-[#F1F1F1] text-gray-700 border border-gray-500 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white md:py-3 px-4" id="password" type="password" required aria-label="Password">
                </div>
                <div class="flex flex-col mb-6 mx-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password">
                        Confirm Password:
                    </label>
                    <input class="appearance-none block w-full bg-[#F1F1F1]  text-gray-700 border border-gray-500 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white md:py-3 px-4" id="password" type="password" required aria-label="Password">
                </div>
                <div class="text-center pt-2 mx-5">
                    <button type="submit" class="bg-blue-600 text-white rounded-full w-full px-4 py-3 hover:bg-blue-700 transition duration-200 text-xs md:text-base">
                        Register
                    </button>
                </div>
                <div class="mx-5 m-10 text-xs md:text-base  ">
                    Already have an account?
                    <a href="{{route('login')}}" class="text-blue-600 hover:underline">Sign in</a>
                </div>
            </form>
        </div>
    </div>
@endsection
