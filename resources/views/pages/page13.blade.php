<!--
============================
<<< PAGE 13: CONTACT US >>>
Author: Miecaela Garcia
============================
-->
<x-guest-layout>
   <!-- bg -->
    <div class="relative w-screen h-screen font-roboto">
        
        <div class="flex flex-col w-full h-full lg:grid lg:grid-cols-6">
            <!-- navigation mobile -->
        <div class="block w-screen h-20 px-4 bg-brand lg:hidden bg-opacity-80">
            <div class="flex flex-row justify-between w-full h-full">
            <a href="#" class="flex justify-start"><img class="w-20 h-20 mt-2" src="{{asset('logo-noname-dark.png')}}" alt="Logo no name dark"></a>

            <div class="relative flex items-center justify-end cursor-pointer lg:hidden">
                <!-- burger button -->
                <button type="button"
                    class="text-white hover:text-brand-1 focus:outline-none focus:text-brand-1"
                    aria-label="Toggle menu" onClick="toggleElement('navigation')">
                    <svg viewBox="0 0 24 24" class="w-8 h-8 fill-current">
                        <path
                            d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                        </path>
                    </svg>
                </button>

                <!-- dropdown menu -->
                <ul class="absolute right-0 z-20 hidden w-32 py-1 mt-2 overflow-hidden text-white shadow bg-brand bg-opacity-90 top-20"
                    id="navigation">

                    <li>
                        <a href="#"
                            class="flex items-center px-3 py-3 text-sm font-medium uppercase hover:text-gray-700">
                            register</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center px-3 py-3 text-sm font-medium uppercase hover:text-gray-700">
                            book</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center px-3 py-3 text-sm font-medium uppercase hover:text-gray-700">
                            tracking</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center px-3 py-3 text-sm font-medium uppercase hover:text-gray-700">
                            about us</a>
                    </li>
                </ul>
            </div>
        </div>
        
        </div> <!-- END of navigation mobile -->

            <!--================================ map mobile ================================-->
                <div class="flex items-center justify-center block w-full h-1/3 lg:hidden">
                    <img class="flex object-cover object-center w-full h-full" src="{{asset('map.png')}}" alt="Map">
                </div>
                
            <!--================================ contact us ================================-->
            <div class="flex flex-col flex-wrap items-center justify-center w-full h-full py-10 bg-white lg:py-0 lg:col-span-2">
                
                    
                <div class="flex items-center justify-start hidden w-72 lg:block"><img class="flex w-24 h-auto" src="{{asset('logo-noname-dark.png')}}" alt="Logo No Name Dark"></div>
                
                <h1 class="flex items-center justify-start text-2xl font-medium text-gray-700 md:text-4xl md:mt-6 w-72">We are happy to help you.</h1>

                <h2 class="flex items-center justify-start mt-2 font-medium text-gray-700 text-md md:text-lg md:mt-6 w-72">Contact us</h2>

                <!-- input fields -->
                <form method="post" action="" class="flex flex-col items-center mt-6 space-y-6 md:mt-10 md:space-y-6">
                    @csrf
                    <!-- name -->
                    <div class="flex items-center h-10 md:h-12 w-72">
                        <input type="text" name="name" id="name" value="" placeholder="Name" class="w-full h-full text-xs text-gray-700 bg-gray-100 border-transparent appearance-none focus:border-brand focus:ring-0">
                    </div>

                    <!-- email -->
                    <div class="flex items-center h-10 md:h-12 w-72">
                        <input type="email" name="email" id="email" value="" placeholder="Email" class="w-full h-full text-xs text-gray-700 bg-gray-100 border-transparent appearance-none focus:border-brand focus:ring-0">
                    </div>

                    <!-- subject -->
                    <div class="flex items-center h-10 md:h-12 w-72">
                        <input type="text" name="subject" id="subject" value="" placeholder="Subject" class="w-full h-full text-xs text-gray-700 bg-gray-100 border-transparent appearance-none focus:border-brand focus:ring-0">
                    </div>

                    <!-- message -->
                    <div class="flex items-center h-20 md:h-32 w-72">
                        <textarea name="message" id="message" value="" placeholder="Message" rows="5" class="w-full h-full text-xs text-gray-700 bg-gray-100 border-transparent appearance-none focus:border-brand focus:ring-0"></textarea>
                    </div>

                    <div class="flex items-center justify-end w-72">
                        <!-- send button -->
                        <button type="button" class="flex items-center justify-center w-32 h-10 bg-brand">
                            <span class="text-sm font-medium text-white capitalize">submit</span>
                        </button>
                    </div>
                </form>
            </div> <!-- END of contact us -->

            <!--================================ nav && map desktop ================================-->
            <div class="relative hidden col-span-4 grid-rows-5 lg:block">
                <div class="grid w-full h-full bg-fixed bg-center bg-cover" style="background-image: url({{asset('map.png')}})">
                    <!-- navigation -->
                    <div class="flex flex-row justify-between w-full h-32 px-56 font-bold text-white uppercase opacity-80 bg-brand">
                        <a href="#" class="flex items-center justify-center hover:text-gray-700">register</a>
                        <a href="#" class="flex items-center justify-center hover:text-gray-700">book</a>
                        <a href="#" class="flex items-center justify-center hover:text-gray-700">tracking</a>
                        <a href="#" class="flex items-center justify-center hover:text-gray-700">about us</a>
                    </div>
                </div>
                
            </div> <!-- END of nav && map desktop -->
        </div>
    </div>
        
    </div><!-- END of nav bg -->

    <!--======== JS for dropdown menu ========-->
    <script>
        function toggleElement(elemID){
            document.getElementById(elemID).classList.toggle("hidden");
            document.getElementById(elemID).classList.toggle("block");
            }
    </script>

</x-guest-layout>