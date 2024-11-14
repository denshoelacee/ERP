@extends('layouts.main')

@section('content')
    <div class="ml-10 py-20 px-5 md:px-10 lg:px-20 max-w-full">
        <div class="relative inline-block mx-[50%]">
            <i class="icon-circle text-black text-orange-600 absolute">
                <i class='bx bx-package text-5xl md:text-6xl lg:text-7xl'></i>
            </i>
        </div>
        
        <h2 class="text-3xl">
            <span class="text-3xl font-black">Services</span> We Offer 
        </h2>
        <hr class="w-24 border-0 h-1 bg-blue-600 mb-10">
        
        <div class="mt-10 md:mt-32 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <div class="px-5">
                <i class="services-circle fs-16 fs-md-20 d-inline-block text-black text-3xl text-orange-600">
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
@endsection
