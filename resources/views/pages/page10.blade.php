<!--
===========================================
<<< PAGE 10: SHIPPING ORDER >>>
Author: Miecaela Garcia
===========================================
-->
<x-guest-layout>
    <!-- bg -->
    <div class="relative flex flex-col items-center w-screen h-screen gap-10 lg:gap-6 bg-brand-1">
            
        <!-- navigation mobile -->
        <div class="block w-screen h-20 px-4 bg-brand md:hidden">
            <div class="flex flex-row justify-between w-full h-full">
            <a href="#" class="flex justify-start"><img class="w-20 h-20 mt-2" src="{{asset('logo-noname.png')}}" alt="Logo no name"></a>

            <div class="relative flex items-center justify-end cursor-pointer md:hidden">
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
                            class="flex items-center px-3 py-3 text-sm font-medium uppercase font-roboto hover:text-gray-700">
                            register</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center px-3 py-3 text-sm font-medium uppercase font-roboto hover:text-gray-700">
                            book</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center px-3 py-3 text-sm font-medium uppercase font-roboto hover:text-gray-700">
                            tracking</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center px-3 py-3 text-sm font-medium uppercase font-roboto hover:text-gray-700">
                            about us</a>
                    </li>
                </ul>
            </div>
        </div>
        
        </div> <!-- END of navigation mobile -->

        <!-- navigation desktop -->
        <div class="hidden w-10/12 px-20 bg-brand h-28 lg:px-72 md:block">
            <div class="flex flex-row items-center justify-between w-full h-full">
                <a href="#" class="flex items-center justify-center font-medium text-white uppercase hover:text-gray-700 font-roboto">register</a>
                <a href="#" class="flex items-center justify-center font-medium text-white uppercase hover:text-gray-700 font-roboto">book</a>
                <a href="#" class="flex items-center justify-center"><img class="h-auto mt-4 w-28" src="{{asset('logo-noname.png')}}" alt="Logo"></a>
                <a href="#" class="flex items-center justify-center font-medium text-white uppercase hover:text-gray-700 font-roboto">tracking</a>
                <a href="#" class="flex items-center justify-center font-medium text-white uppercase hover:text-gray-700 font-roboto">about us</a>
            </div>
        </div> <!-- END of navigation desktop -->


         <!-- shipment order form -->
        <form method="post" action="" class="flex flex-col items-center justify-center px-8 bg-white w-88 h-3/4 md:w-3/5 md:h-4/5 lg:w-3/12 2xl:h-5/6 ">
            @csrf
            <!-- input fields -->
            <div class="flex flex-col items-center mt-4 space-y-4 md:mt-10 2xl:mt-10 lg:mt-4 md:space-y-6 lg:space-y-4 2xl:space-y-8">
                <h1 class="mb-4 text-2xl font-medium text-gray-700 capitalize md:text-4xl font-roboto">shipment order</h1>

                <!-- first name -->
                <div class="flex items-center w-56 h-8 md:h-10 md:w-72">
                    <input type="text" name="firstName" id="firstName" value="" placeholder="First name" class="w-full h-full text-xs text-gray-700 bg-gray-200 border-transparent appearance-none focus:border-brand font-roboto focus:ring-0">
                </div>

                <!-- last name -->
                <div class="flex items-center w-56 h-8 md:h-10 md:w-72">
                    <input type="text" name="lastName" id="lastName" value="" placeholder="Last name" class="w-full h-full text-xs text-gray-700 bg-gray-200 border-transparent appearance-none focus:border-brand font-roboto focus:ring-0">
                </div>

                <!-- email -->
                <div class="flex items-center w-56 h-8 md:h-10 md:w-72">
                    <input type="email" name="email" id="email" value="" placeholder="Email" class="w-full h-full text-xs text-gray-700 bg-gray-200 border-transparent appearance-none focus:border-brand font-roboto focus:ring-0">
                </div>

                <!-- contact number -->
                <div class="flex items-center w-56 h-8 md:h-10 md:w-72">
                    <input type="text" name="contactNumber" id="contactNumber" value="" placeholder="Contact Number" class="w-full h-full text-xs text-gray-700 bg-gray-200 border-transparent appearance-none focus:border-brand font-roboto focus:ring-0">
                </div>

                <!-- pick-up address -->
                <div class="flex items-center w-56 h-8 md:h-10 md:w-72">
                    <input type="text" name="pickUpAddress" id="pickUpAddress" value="" placeholder="Enter pick-up address" class="w-full h-full text-xs text-gray-700 bg-gray-200 border-transparent appearance-none focus:border-brand font-roboto focus:ring-0">
                </div>

                <!-- drop address -->
                <div class="flex items-center w-56 h-8 md:h-10 md:w-72">
                    <input type="text" name="dropAddress" id="dropAddress" value="" placeholder="Enter drop address" class="w-full h-full text-xs text-gray-700 bg-gray-200 border-transparent appearance-none focus:border-brand font-roboto focus:ring-0">
                </div>

                <!-- date -->
                <div class="relative flex flex-row justify-between w-56 h-8 md:h-10 md:w-72">
                    <input type="text" name="date" id="date" value="" placeholder="Date" class="w-full h-full text-xs text-gray-700 bg-gray-200 border-transparent appearance-none focus:border-brand font-roboto focus:ring-0">
                    
                    <button type="button" class="absolute inset-y-0 flex items-center right-4" >
                        <img class="" src="{{asset('dropdown-icon.png')}}" alt="Dropdown Icon">
                    </button>
                </div>

                <div class="flex items-center justify-end w-72">
                    <!-- send button -->
                    <button type="button" class="flex items-center justify-center w-32 h-10 bg-brand">
                        <span class="text-sm font-medium text-white capitalize font-roboto">book</span>
                    </button>
                </div>
            </div>
        </form> <!-- END of shipment order form -->

    </div> <!-- END of bg -->
    

    <!--======== JS for dropdown menu ========-->
    <script>
        function toggleElement(elemID){
            document.getElementById(elemID).classList.toggle("hidden");
            document.getElementById(elemID).classList.toggle("block");
            }
    </script>
</x-guest-layout>

