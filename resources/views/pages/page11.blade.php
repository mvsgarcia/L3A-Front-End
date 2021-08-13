<!--
===============================
<<< PAGE 11: TRACKING RESULTS >>>
Author: Miecaela Garcia, Julienne Villasencio
===============================
-->
<x-guest-layout>
    <!-- bg -->
    <div class="relative flex flex-col items-center w-screen h-screen gap-8 font-roboto bg-brand-1 md:gap-20">

        <!-- navigation mobile -->
        <div class="block w-screen h-20 px-4 bg-brand md:hidden">
            <div class="flex flex-row justify-between w-full h-full">
                <a href="#" class="flex justify-start"><img class="w-20 h-20 mt-2" src="{{asset('logo-noname.png')}}"
                        alt="Logo no name"></a>

                <div class="relative flex items-center justify-end cursor-pointer md:hidden">
                    <!-- burger button -->
                    <button type="button" class="text-white hover:text-brand-1 focus:outline-none focus:text-brand-1"
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

        <!-- navigation desktop -->
        <div class="hidden w-10/12 px-20 bg-brand h-28 lg:px-40 xl:px-72 md:block">
            <div class="flex flex-row items-center justify-between w-full h-full">
                <a href="#"
                    class="flex items-center justify-center font-medium text-white uppercase hover:text-gray-700 ">register</a>
                <a href="#"
                    class="flex items-center justify-center font-medium text-white uppercase hover:text-gray-700 ">book</a>
                <a href="#" class="flex items-center justify-center"><img class="h-auto mt-4 w-28"
                        src="{{asset('logo-noname.png')}}" alt="Logo"></a>
                <a href="#"
                    class="flex items-center justify-center font-medium text-white uppercase hover:text-gray-700 ">tracking</a>
                <a href="#"
                    class="flex items-center justify-center font-medium text-white uppercase hover:text-gray-700 ">about
                    us</a>
            </div>
        </div> <!-- END of navigation desktop -->


        <!-- manage accounts form -->
        <div
            class="flex flex-col items-center justify-center w-10/12 py-6 space-y-4 bg-white h-7/8 md:py-20 md:space-y-10 lg:w-6/12 md:h-4/6">
            <h1 class="text-2xl font-medium text-gray-700 capitalize md:text-4xl ">tracking results</h1>

            <!-- search bar -->
            <div class="flex flex-row justify-center w-5/6">
                <div class="relative flex flex-row justify between">
                    <input type="text" placeholder="Search User"
                        class="h-12 text-xs text-gray-700 bg-white border-transparent rounded-md appearance-none w-52 md:w-96 focus:border-brand focus:ring-0 border-brand ">

                    <button href="#" class="absolute inset-y-0 flex items-center right-4">
                        <img class="" src="{{asset('search-icon-dark.png')}}" alt="Search Icon Dark">
                    </button>
                </div>
            </div>

            <!-- accounts -->
            <div class="relative flex flex-col w-5/6 overflow-y-scroll h-80 overscroll-y-auto">
                <table class="absolute flex flex-col w-full text-xs h-96">
                    <tr
                        class="grid items-center justify-center w-full h-20 grid-cols-4 text-gray-700 uppercase md:grid-cols-5 bg-brand-2">
                        <td class="flex items-center justify-center">ID</td>
                        <td class="flex items-center justify-center">PRODUCT</td>
                        <td class="flex items-center justify-center">STATUS</td>
                        <td class="flex items-center justify-center hidden md:block"></td>
                        <td class="flex items-center justify-center space-x-2 md:space-x-8">
                            <a href="#"><img class="" src="{{asset('edit-icon.png')}}" alt="Edit Icon"></a>
                            <a href="#"><img class="" src="{{asset('delete-icon.png')}}" alt="Delete Icon"></a>
                        </td>
                    </tr>

                    <tr
                        class="grid items-center justify-center w-full h-20 grid-cols-4 text-gray-700 uppercase md:grid-cols-5 bg-brand-3">
                        <td class="flex items-center justify-center">ID</td>
                        <td class="flex items-center justify-center">PRODUCT</td>
                        <td class="flex items-center justify-center">STATUS</td>
                        <td class="flex items-center justify-center hidden md:block"></td>
                        <td class="flex items-center justify-center space-x-2 md:space-x-8">
                            <a href="#"><img class="" src="{{asset('edit-icon.png')}}" alt="Edit Icon"></a>
                            <a href="#"><img class="" src="{{asset('delete-icon.png')}}" alt="Delete Icon"></a>
                        </td>
                    </tr>

                    <tr
                        class="grid items-center justify-center w-full h-20 grid-cols-4 text-gray-700 uppercase md:grid-cols-5 bg-brand-2">
                        <td class="flex items-center justify-center">ID</td>
                        <td class="flex items-center justify-center">PRODUCT</td>
                        <td class="flex items-center justify-center">STATUS</td>
                        <td class="flex items-center justify-center hidden md:block"></td>
                        <td class="flex items-center justify-center space-x-2 md:space-x-8">
                            <a href="#"><img class="" src="{{asset('edit-icon.png')}}" alt="Edit Icon"></a>
                            <a href="#"><img class="" src="{{asset('delete-icon.png')}}" alt="Delete Icon"></a>
                        </td>
                    </tr>

                    <tr
                        class="grid items-center justify-center w-full h-20 grid-cols-4 text-gray-700 uppercase md:grid-cols-5 bg-brand-3">
                        <td class="flex items-center justify-center">ID</td>
                        <td class="flex items-center justify-center">PRODUCT</td>
                        <td class="flex items-center justify-center">STATUS</td>
                        <td class="flex items-center justify-center hidden md:block"></td>
                        <td class="flex items-center justify-center space-x-2 md:space-x-8">
                            <a href="#"><img class="" src="{{asset('edit-icon.png')}}" alt="Edit Icon"></a>
                            <a href="#"><img class="" src="{{asset('delete-icon.png')}}" alt="Delete Icon"></a>
                        </td>
                    </tr>

                    <tr
                        class="grid items-center justify-center w-full h-20 grid-cols-4 text-gray-700 uppercase md:grid-cols-5 bg-brand-2">
                        <td class="flex items-center justify-center">ID</td>
                        <td class="flex items-center justify-center">PRODUCT</td>
                        <td class="flex items-center justify-center">STATUS</td>
                        <td class="flex items-center justify-center hidden md:block"></td>
                        <td class="flex items-center justify-center space-x-2 md:space-x-8">
                            <a href="#"><img class="" src="{{asset('edit-icon.png')}}" alt="Edit Icon"></a>
                            <a href="#"><img class="" src="{{asset('delete-icon.png')}}" alt="Delete Icon"></a>
                        </td>
                    </tr>

                    <tr
                        class="grid items-center justify-center w-full h-20 grid-cols-4 text-gray-700 uppercase md:grid-cols-5 bg-brand-3">
                        <td class="flex items-center justify-center">ID</td>
                        <td class="flex items-center justify-center">PRODUCT</td>
                        <td class="flex items-center justify-center">STATUS</td>
                        <td class="flex items-center justify-center hidden md:block"></td>
                        <td class="flex items-center justify-center space-x-2 md:space-x-8">
                            <a href="#"><img class="" src="{{asset('edit-icon.png')}}" alt="Edit Icon"></a>
                            <a href="#"><img class="" src="{{asset('delete-icon.png')}}" alt="Delete Icon"></a>
                        </td>
                    </tr>



                </table>
            </div> <!-- END of accounts -->


        </div> <!-- END of manage accounts form -->



    </div> <!-- END of bg -->


    <!--======== JS for dropdown menu ========-->
    <script>
        function toggleElement(elemID){
            document.getElementById(elemID).classList.toggle("hidden");
            document.getElementById(elemID).classList.toggle("block");
            }
    </script>
</x-guest-layout>