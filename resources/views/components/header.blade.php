<!-- FRONT END BY: DENSHOW -->
<!--THIS IS A HEADER SIDE -->
<!---------------------------->
<header>
    <!--RESPONSIVE SCREEN DEFAULT--> 
    <nav class="flex items-center justify-between p-8">
        <!--HIDDEN HAMBURGER ICON IF MOBILE SCREEN IT WILL EXIST -->
        <div class="flex md:hidden fixed top-0 left-0 right-0 bg-white p-4">
            <button id="hamburger" class="text-black focus:outline-none text-xl float-right">
                &#9776;
            </button>
        </div>
        <!-- IF MOBILE SCREEN DISAPPEARS-->
        <ul class="hidden md:flex md:ml-auto flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-8 mr-10 gap-7">
            <li><a href="{{ route('home') }}" class="text-black hover:text-blue-800 font-black">Home</a></li>
            <li><a href="{{ route('services') }}" class="text-black hover:text-blue-800 font-black">Services</a></li>
            <li><a href="{{ route('contact') }}" class="pr-10 text-black hover:text-blue-800 font-black">Contact Us</a></li>
            <x-log-in-buttons/>
        </ul>
    </nav>
    
    <!-- HAMBURGER ICON FOR MOBILE SCREEN IF CLICKED CHANAN GAWAS DAYON -->
    <ul id="mobile-menu" class="hidden md:hidden flex flex-col space-y-2 p-8 fixed bg-white top-10 w-[100%] h-[100%] text-1xl  ">
        <li><a href="{{ route('home') }}" class="text-black hover:text-blue-800 ">Home</a></li>
        <hr class="py-2">
        <li><a href="{{ route('services') }}" class="text-black hover:text-blue-800 ">Services</a></li>
        <hr class="py-2">
        <li><a href="{{ route('contact') }}" class="text-black hover:text-blue-800 ">Contact Us</a></li>
        <hr class="py-2">
        <x-log-in-buttons/>
    </ul>
</header>

<script>
document.getElementById('hamburger').addEventListener('click', function() {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('hidden');
});
</script>
