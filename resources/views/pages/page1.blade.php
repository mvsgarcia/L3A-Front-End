<!--
========================
<<< PAGE 1: HOME >>>
Author: Miecaela Garcia
========================
-->
<x-guest-layout>
    <!-- bg -->
    <div class="relative flex flex-col items-center w-screen h-screen gap-48 bg-fixed bg-center bg-cover font-roboto" style="background-image: url({{asset('cargo-ship1.png')}})">
            
            <!-- navigation mobile -->
            <div class="block w-screen h-20 px-4 bg-black md:hidden bg-opacity-10">
                <div class="flex flex-row justify-between w-full h-full">
                <a href="#" class="flex justify-start"><img class="w-16 h-auto" src="{{asset('logo-home.svg')}}" alt="Logo"></a>

                <div class="relative flex items-center justify-end cursor-pointer md:hidden">
                    <!-- burger button -->
                    <button type="button"
                        class="text-white hover:text-brand-1 focus:outline-none focus:text-brand"
                        aria-label="Toggle menu" onClick="toggleElement('navigation')">
                        <svg viewBox="0 0 24 24" class="w-8 h-8 fill-current">
                            <path
                                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                            </path>
                        </svg>
                    </button>

                    <!-- dropdown menu -->
                    <ul class="absolute right-0 z-20 hidden w-32 py-1 mt-2 overflow-hidden text-white bg-black shadow bg-opacity-70 top-20"
                        id="navigation">

                        <li>
                            <a href="#"
                                class="flex items-center px-3 py-3 text-sm font-medium uppercase hover:text-brand">
                                register</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center px-3 py-3 text-sm font-medium uppercase hover:text-brand">
                                book</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center px-3 py-3 text-sm font-medium uppercase hover:text-brand">
                                tracking</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center px-3 py-3 text-sm font-medium uppercase hover:text-brand">
                                about us</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            </div> <!-- END of navigation mobile -->

            <!-- navigation desktop -->
            <div class="hidden w-10/12 h-32 px-20 bg-black lg:px-56 md:block bg-opacity-10">
                <div class="flex flex-row items-center justify-between w-full h-full">
                    <a href="#" class="flex items-center justify-center font-medium text-white uppercase hover:text-brand">register</a>
                    <a href="#" class="flex items-center justify-center font-medium text-white uppercase hover:text-brand">book</a>
                    <a href="#" class="flex items-center justify-center"><img class="" src="{{asset('logo-home.svg')}}" alt="Logo"></a>
                    <a href="#" class="flex items-center justify-center font-medium text-white uppercase hover:text-brand">tracking</a>
                    <a href="#" class="flex items-center justify-center font-medium text-white uppercase hover:text-brand">about us</a>
                </div>
            </div> <!-- END of navigation desktop -->
      
           
            <!-- text && search bar -->
            <div class="flex flex-col items-center justify-center px-5 space-y-8">

                <!-- text -->
                <h1 class="flex text-3xl font-bold text-center text-white capitalize md:text-6xl lg:text-8xl">efficient. safe. reliable.</h1>
                <p class="flex px-4 text-sm font-medium leading-loose text-center text-white md:px-40 2xl:mx-56 lg:text-lg md:text-md lg:px-96">Our company makes sure that the shipments will be delivered safe and sound. The company is reliable and dependable when it comes to shipments around the globe. </p>

                <!-- search bar -->
                <div class="relative flex flex-row justify-between w-2/3 h-12 md:w-3/6">
                    <input type="text" placeholder="Tracking ID" class="w-full h-full font-medium text-white bg-black bg-opacity-50 border-transparent appearance-none focus:ring-0 focus:border-brand">
                    <button href="#" class="absolute inset-y-0 flex items-center justify-center right-4" >
                        <img class="" src="{{asset('search-icon.svg')}}" alt="Search Icon">
                    </button>

                </div>
            </div> <!-- END of text && search bar -->

        
        
    </div> <!-- END of bg -->
    
    {{-- <script src="{{asset('js/page1.js')}}"></script> --}}

    <!--======== JS for dropdown menu ========-->
    <script>
        function toggleElement(elemID){
            document.getElementById(elemID).classList.toggle("hidden");
            document.getElementById(elemID).classList.toggle("block");
            }
    </script>
</x-guest-layout>

