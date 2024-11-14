@extends('layouts.main')

@section('content')
  <div class="py-20 px-4 sm:px-10 lg:px-20 flex justify-center"> 
      <div class="flex flex-col lg:flex-row shadow-[0_3px_10px_rgb(0,0,0,0.2)] w-full max-w-6xl">
          <div class="rounded bg-gradient-to-l from-blue-600 via-blue-600 to-sky-600 p-10 flex flex-col">
              <h2 class="text-3xl text-white">Contact Information</h2>
              <h3 class="text-sm text-white mt-2">Say something to start a live chat!</h3>
              <div class="mt-10">
                <h3 class="text-white md:text-sm mb-2 mt-5"> 
                  <i class='bx bxs-phone-call text-2xl md:text-2xl mr-3'></i>
                  09123456789
                </h3>
                <h3 class="text-white md:text-sm mb-2 mt-5"> 
                  <i class='bx bxs-envelope text-2xl md:text-2xl mr-3' ></i>
                  demo@gmail.com
                </h3>
                <h3 class="text-white md:text-sm mb-2 mt-5"> 
                  <i class='bx bxs-location-plus text-2xl md:text-2xl mr-3' ></i>
                  Sabang Danao City, Cebu
                </h3>
              </div>
              <div class="flex mt-auto gap-4 ">
                  <a href="#" class="rounded-full h-10 w-10 flex items-center justify-center bg-white text-violet-500 md: mt-10">
                      <i class='bx bxl-facebook'></i>
                  </a>
                  <a href="#" class="rounded-full h-10 w-10 flex items-center justify-center bg-white text-violet-500 md: mt-10">
                      <i class='bx bxl-twitter'></i>
                  </a>
                  <a href="#" class="rounded-full h-10 w-10 flex items-center justify-center bg-white text-violet-500 md: mt-10 hover:bg-blue-900">
                      <i class='bx bxl-instagram-alt'></i>
                  </a>
              </div>
          </div>
          <div class="flex-grow rounded py-10 px-5 ">
              <form class="w-full">
                  <div class="flex flex-wrap -mx-3 mb-6 ">
                      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                              First Name
                          </label>
                          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" required>
                      </div>
                      <div class="w-full md:w-1/2 px-3">
                          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                              Last Name
                          </label>
                          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="grid-last-name" type="text" required>
                      </div>
                  </div>
                  <div class="flex flex-wrap -mx-3 mb-6">
                      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email">
                              Email Address
                          </label>
                          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="grid-email" type="email" required>
                      </div>
                      <div class="w-full md:w-1/2 px-3">
                          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-phone">
                              Phone Number
                          </label>
                          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="grid-phone" type="tel" required>
                      </div>
                  </div>
                  <div class="flex flex-wrap -mx-3 mb-6">
                      <div class="w-full px-3">
                          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-message">
                              Message
                          </label>
                          <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-message" rows="4" required></textarea>
                      </div>
                  </div>
                  <div class="flex justify-end">
                      <button type="submit" class="bg-blue-600 text-white rounded px-4 py-2">
                          Send Message
                      </button>
                  </div>
              </form>
          </div>
      </div>
  </div>
@endsection
