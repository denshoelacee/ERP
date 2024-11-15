@extends('mainblades.main')

@section('content')
<!-- MAIN CONTENT LANDING PAGE -->

<div class="flex flex-col-reverse w-full h-screen md:flex-row my-5 w-full h-screen">
        <div class="w-full p-5 mt-[80px] md:w-1/2 flex flex-col items-center md:items-start ">
        
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
    <div class="mt-2 md:mt-[60px] md:w-1/2 flex justify-center">
        <img src="{{ asset('/img/landingpage.png') }}" alt="Inventory Management" class="w-full max-w-md h-[500px] md:w-full max-w-lg max-h-[70%]">
    </div>
</div>

<hr class="hiddenmd:h-[2px] bg-black">
<!--SERVICES SECTION -->
<div class="w-full h-screen">
    <div class="ml-10 py-20 px-5 md:px-10 lg:px-20 max-w-full">
        <div class="relative inline-block mx-[50%]">
            <i class="hidden icon-circle text-black text-orange-600 absolute">
                <i class='bx bx-package text-5xl md:text-6xl lg:text-7xl'></i>
            </i>
        </div>
        
        <h2 class="text-3xl">
            <span class="text-3xl font-black">Services</span> We Offer 
        </h2>
        <hr class="w-24 border-0 h-1 bg-blue-600 mb-10">
        
        <div class="mt-10 md:mt-32 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <div class="px-5">
                <i class=" services-circle fs-16 fs-md-20 d-inline-block text-black text-3xl text-orange-600">
                    <i class='bx bx-package'></i>
                </i>
                <h2 class="text-2xl font-black">Warehousing Services</h2>
                <p class="text-md overflow-x-auto">
                    A pay-as-you-go solution for: pallet storage, inventory management, fulfillment (e.g., pick and pack), in/out-bound solutions, and more.
                </p>
            </div>

            <div class="px-5">
                <i class="services-circle fs-16 fs-md-20 d-inline-block text-black text-3xl text-orange-600">
                    <i class='bx bx-package'></i>
                </i>
                <h2 class="text-2xl font-black">Global Freight</h2>
                <p class="text-md overflow-x-auto">
                    Search and compare the best shipping rates among dozens of trusted logistics partners for last-mile delivery and freight.
                </p>
            </div>

            <div class="px-5">
                <i class="services-circle fs-16 fs-md-20 d-inline-block text-black text-3xl text-orange-600">
                    <i class='bx bx-package'></i>
                </i>
                <h2 class="text-2xl font-black">Packaging Solution</h2>
                <p class="text-md overflow-x-auto">
                    Our packaging solutions are optimized for each individual customer and are selected based on specific needs and requirements.
                </p>
            </div>
        </div>
    </div>
</div>


 <!-- Our Warehouses Section
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
 -->
 <!--Blog 
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
 -->
 
 <!--News and Media-->
@endsection
