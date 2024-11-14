@extends('layouts.main')

@section('content')
<!-- MAIN CONTENT LANDING PAGE -->

<div class="flex flex-col md:flex-row my-5">
        <div class="w-full p-5 md:w-1/2 flex flex-col items-center md:items-start ">
        
        <i class='bx bxs-truck text-4xl bg-clip-text text-transparent bg-gradient-to-l from-blue-600 via-blue-600 to-sky-600 my-6 mx-[50%]'></i>
        <h1 class="text-3xl md:text-4xl  md:mx-10 uppercase font-black tracking-wide text-center ">
            Inventory Management <span class="bg-clip-text text-transparent bg-gradient-to-l from-blue-600 via-blue-600 to-sky-600">System</span>
        </h1>
        <div class="w-full md:w-[100%] mt-8">
            <h3 class="text-xl md:text-1xl mx-4 md:mx-10 font-black text-center md:text-left"> Welcome to our Inventory Management System ──</h3>
            <h3 class="text-xl md:text-2xl mx-4 md:mx-10 font-black text-center md:text-left">
                where <span class="bg-clip-text text-transparent bg-gradient-to-l from-blue-600 via-blue-600 to-sky-600">efficiency</span> meets 
                <span class="bg-clip-text text-transparent bg-gradient-to-l from-blue-600 via-blue-600 to-sky-600">simplicity.</span>
            </h3>
            <h4 class="text-base md:text-lg mx-4 md:mx-10 font-thin text-center md:text-left">Say goodbye to stockouts and overstock situations with our cutting-edge solution designed to streamline your inventory processes</h4>
        </div>
        <div class="my-24 mx-10">
            <li class="flex justify-center text-1xl"><a href="{{ route('contact') }}" class="py-2 px-10 rounded-full inline-flex items-center text-white bg-gradient-to-l from-blue-600 via-blue-600 to-sky-600 text-1xl">Contact Us</a></li>
        </div>
    </div>
    <div class="mt-5 md:mt-0 md:w-1/2 flex justify-center">
        <img src="{{ asset('/img/landingpage.png') }}" alt="Inventory Management" class="w-full max-w-lg h-auto">
    </div>
</div>

<!--ABOUT SECTION -->
<div class="w-full h-screen">
    <div class="flex flex-col-reverse md:flex-row h-full md:justify-end pt-10">
        <div class="md:mt-0 md:w-1/2 flex justify-center items-center">
            <img src="{{ asset('/img/landingpage.png') }}" alt="Inventory Management" class="md:max-w-lg max-w-auto max-h-[80%]">
        </div>
        <div class="w-full p-5 md:w-1/2 flex flex-col items-center md:items-start mt-[5%]">
            <h1 id="about" class="text-3xl md:text-4xl md:mx-10 uppercase font-black tracking-wide text-center">
                About <span class="bg-clip-text text-transparent bg-gradient-to-l from-blue-600 via-blue-600 to-sky-600">Us</span>
            </h1>
            <div class="w-full md:w-[90%] mt-8">
                <h3 class="text-xl md:text-2xl mx-4 md:mx-10 font-black text-center md:text-left">Welcome to our Inventory Management System ──</h3>
                <h3 class="text-xl md:text-2xl mx-4 md:mx-10 font-black text-center md:text-left">
                    where <span class="bg-clip-text text-transparent bg-gradient-to-l from-blue-600 via-blue-600 to-sky-600">efficiency</span> meets 
                    <span class="bg-clip-text text-transparent bg-gradient-to-l from-blue-600 via-blue-600 to-sky-600">simplicity.</span>
                </h3>
                <h4 class="text-base md:text-lg mx-4 md:mx-10 font-thin text-center md:text-left">Say goodbye to stockouts and overstock situations with our cutting-edge solution designed to streamline your inventory processes.</h4>
            </div>    
        </div>
    </div>
</div>


 <!-- Our Warehouses Section-->
 <div class="w-full h-screen">
    <div class="flex justify-center items-center text-center md:flex-col">
        <h1 id="warehouse" class="text-3xl md:text-4xl md:mx-10 uppercase font-black tracking-wide">
            Our <span class="bg-clip-text text-transparent bg-gradient-to-l from-blue-600 via-blue-600 to-sky-600">Warehouses</span>
        </h1>
        <div class="md:mt-0 md:w-1/2 flex justify-center ">
            <img src="{{ asset('/img/landingpage.png') }}" alt="Inventory Management" class="md:mt-5 max-w-md max-h-[70%]">
        </div>
    </div>
</div>
 
 <!--Blog -->
 <div class="w-full h-screen">
    <div class="flex justify-center items-center text-center md:flex-col">
        <h1 id="warehouse" class="text-3xl md:text-4xl md:mx-10 uppercase font-black tracking-wide">
            The <span class="bg-clip-text text-transparent bg-gradient-to-l from-blue-600 via-blue-600 to-sky-600">Developers</span>
        </h1>
        <div class="md:mt-0 md:w-1/2 flex justify-center ">
            <img src="{{ asset('/img/landingpage.png') }}" alt="Inventory Management" class="md:mt-5 max-w-md max-h-[70%]">
            
        </div>
    </div>
</div>
 
 
 <!--News and Media-->
@endsection
