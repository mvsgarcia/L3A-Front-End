<!--
===========================================
<<< PAGE 8: DELIVERY STATUS >>>
Author: Miecaela Garcia
===========================================
-->
<x-guest-layout>
    <!-- bg -->
    <div class="relative flex flex-col items-center w-screen h-screen bg-fixed bg-center bg-cover font-roboto md:gap-20"
        style="background-image: url({{asset('mvs-bg.png')}})">

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
        <div class="hidden w-10/12 px-20 bg-brand h-28 lg:40 xl:px-72 md:block">
            <div class="flex flex-row items-center justify-between w-full h-full">
                <a href="#"
                    class="flex items-center justify-center font-medium text-white uppercase hover:text-gray-700">register</a>
                <a href="#"
                    class="flex items-center justify-center font-medium text-white uppercase hover:text-gray-700">book</a>
                <a href="#" class="flex items-center justify-center"><img class="h-auto mt-4 w-28"
                        src="{{asset('logo-noname.png')}}" alt="Logo"></a>
                <a href="#"
                    class="flex items-center justify-center font-medium text-white uppercase hover:text-gray-700">tracking</a>
                <a href="#"
                    class="flex items-center justify-center font-medium text-white uppercase hover:text-gray-700">about
                    us</a>
            </div>
        </div> <!-- END of navigation desktop -->

        <!--==================================== control area ====================================-->
        <div class="grid w-full h-full bg-white lg:grid-cols-4 lg:w-9/12 lg:h-2/3">

            <!--=========== left side ===========-->
            <div class="relative flex hidden shadow-inner lg:block bg-brand-4">

                <div class="absolute bottom-0 left-0 flex flex-col p-10 2xl:p-20 space-y-14">
                    <!-- all orders -->
                    <div class="flex flex-row items-center justify-start space-x-6">
                        <img class="w-auto h-2" src="{{asset('dot-icon.png')}}" alt="Dot Icon"></a>
                        <a href="#" class="text-lg font-bold uppercase text-brand hover:text-gray-700">all orders</a>
                    </div>

                    <!-- dispatch -->
                    <a href="#" class="ml-8 text-lg font-bold uppercase text-brand hover:text-gray-700">dispatch</a>


                    <!-- pending -->
                    <a href="#" class="ml-8 text-lg font-bold uppercase text-brand hover:text-gray-700">pending </a>


                    <!-- completed -->
                    <a href="#" class="ml-8 text-lg font-bold uppercase text-brand hover:text-gray-700">completed </a>
                </div>
            </div>

            <!--=========== right side ===========-->
            <div class="flex flex-col p-4 space-y-6 lg:space-y-10 md:p-10 lg:col-span-3 2xl:py-20 2xl:px-10">

                <!-- top part -->
                <div class="grid items-center w-full grid-cols-2">
                    <!--====== delivery details ======-->
                    <div
                        class="flex flex-col w-full h-full p-4 space-y-2 text-xs text-gray-700 border-2 md:items-center lg:text-sm md:space-y-0 md:grid md:grid-cols-2 2xl:text-sm 2xl:p-6 border-brand">
                        <!-- left -->
                        <div class="flex flex-col justify-start md:space-y-2">
                            <div class="flex justify-start ">Delivered on: Date</div>
                            <div class="flex justify-start">Destination Place</div>
                        </div>

                        <!-- right -->
                        <div class="flex flex-col justify-start md:space-y-2 md:justify-end">
                            <div class="flex justify-start md:justify-end ">Tracking Number</div>
                            <div class="flex justify-start md:justify-end">Destination Place</div>
                        </div>
                    </div>

                    <!--====== color legends ======-->
                    <div
                        class="flex flex-col items-stretch justify-center w-full h-full px-10 space-y-4 text-xs text-gray-700 mg:items-center lg:p-6 md:space-y-0 md:space-x-4 md:grid md:grid-cols-3 2xl:text-sm">
                        <!-- packaging -->
                        <div class="flex flex-row items-center justify-start space-x-2 lg:justify-center">
                            <img class="w-6 h-auto lg:w-10" src="{{asset('legend-packaging-1.png')}}"
                                alt="Packaging Label">
                            <span class="capitalize">Packaging</span>
                        </div>

                        <!-- in-transit -->
                        <div class="flex flex-row items-center justify-start space-x-2 lg:justify-center">
                            <img class="w-6 h-auto lg:w-10" src="{{asset('legend-intransit-1.png')}}"
                                alt="In-transit Label">
                            <span class="capitalize">In-transit</span>
                        </div>

                        <!-- delivered -->
                        <div class="flex flex-row items-center justify-start space-x-2 lg:justify-center">
                            <img class="w-6 h-auto lg:w-10" src="{{asset('legend-delivered-1.png')}}"
                                alt="Delivered Label">
                            <span class="capitalize">Delivered</span>
                        </div>
                    </div>
                </div>

                <!-- products list -->
                <div class="relative flex flex-col w-full overflow-y-scroll h-4/5 overscroll-y-auto">
                    <table class="absolute flex flex-col w-full space-y-4 text-xs h-96">

                        <!-- product 1 -->
                        <tr
                            class="grid items-center justify-center w-full h-24 grid-cols-7 py-4 text-gray-700 bg-brand-4">
                            <td class="flex items-center justify-start col-span-2 ml-2 font-medium md:ml-8 lg:ml-14">
                                hch-coupons-81-off-63018</td>
                            <td class="flex items-center justify-center capitalize">product</td>
                            <td class="flex items-center justify-center capitalize">status</td>
                            <td class="flex items-center justify-center"><img class="w-4 h-auto md:w-10"
                                    src="{{asset('legend-intransit-2.png')}}" alt="In-transit Label"></td>
                            <td class="flex items-center justify-center"><a href="#"><img class="w-4 h-auto lg:w-6"
                                        src="{{asset('edit-icon.png')}}" alt="Edit Icon"></a></td>
                            <td class="flex items-center justify-center"><a href="#"><img class="w-4 h-auto lg:w-6"
                                        src="{{asset('delete-icon.png')}}" alt="Delete Icon"></a></td>

                        </tr> <!-- END of product 1 -->

                        <!-- product 2 -->
                        <tr
                            class="grid items-center justify-center w-full h-24 grid-cols-7 py-4 text-gray-700 bg-brand-4">
                            <td class="flex items-center justify-start col-span-2 ml-2 font-medium md:ml-8 lg:ml-14">
                                hch-coupons-81-off-63018</td>
                            <td class="flex items-center justify-center capitalize">product</td>
                            <td class="flex items-center justify-center capitalize">status</td>
                            <td class="flex items-center justify-center"><img class="w-4 h-auto md:w-10"
                                    src="{{asset('legend-delivered-2.png')}}" alt="Delivered Label"></td>
                            <td class="flex items-center justify-center"><a href="#"><img class="w-4 h-auto lg:w-6"
                                        src="{{asset('edit-icon.png')}}" alt="Edit Icon"></a></td>
                            <td class="flex items-center justify-center"><a href="#"><img class="w-4 h-auto lg:w-6"
                                        src="{{asset('delete-icon.png')}}" alt="Delete Icon"></a></td>

                        </tr> <!-- END of product 2 -->

                        <!-- product 3 -->
                        <tr
                            class="grid items-center justify-center w-full h-24 grid-cols-7 py-4 text-gray-700 bg-brand-4">
                            <td class="flex items-center justify-start col-span-2 ml-2 font-medium md:ml-8 lg:ml-14">
                                hch-coupons-81-off-63018</td>
                            <td class="flex items-center justify-center capitalize">product</td>
                            <td class="flex items-center justify-center capitalize">status</td>
                            <td class="flex items-center justify-center"><img class="w-4 h-auto md:w-10"
                                    src="{{asset('legend-packaging-2.png')}}" alt="Packaging Label"></td>
                            <td class="flex items-center justify-center"><a href="#"><img class="w-4 h-auto lg:w-6"
                                        src="{{asset('edit-icon.png')}}" alt="Edit Icon"></a></td>
                            <td class="flex items-center justify-center"><a href="#"><img class="w-4 h-auto lg:w-6"
                                        src="{{asset('delete-icon.png')}}" alt="Delete Icon"></a></td>

                        </tr> <!-- END of product 3 -->

                        <!-- product 4 -->
                        <tr
                            class="grid items-center justify-center w-full h-24 grid-cols-7 py-4 text-gray-700 bg-brand-4">
                            <td class="flex items-center justify-start col-span-2 ml-2 font-medium md:ml-8 lg:ml-14">
                                hch-coupons-81-off-63018</td>
                            <td class="flex items-center justify-center capitalize">product</td>
                            <td class="flex items-center justify-center capitalize">status</td>
                            <td class="flex items-center justify-center"><img class="w-4 h-auto md:w-10"
                                    src="{{asset('legend-delivered-2.png')}}" alt="Delivered Label"></td>
                            <td class="flex items-center justify-center"><a href="#"><img class="w-4 h-auto lg:w-6"
                                        src="{{asset('edit-icon.png')}}" alt="Edit Icon"></a></td>
                            <td class="flex items-center justify-center"><a href="#"><img class="w-4 h-auto lg:w-6"
                                        src="{{asset('delete-icon.png')}}" alt="Delete Icon"></a></td>

                        </tr> <!-- END of product 4 -->

                        <!-- product 5 -->
                        <tr
                            class="grid items-center justify-center w-full h-24 grid-cols-7 py-4 text-gray-700 bg-brand-4">
                            <td class="flex items-center justify-start col-span-2 ml-2 font-medium md:ml-8 lg:ml-14">
                                hch-coupons-81-off-63018</td>
                            <td class="flex items-center justify-center capitalize">product</td>
                            <td class="flex items-center justify-center capitalize">status</td>
                            <td class="flex items-center justify-center"><img class="w-4 h-auto md:w-10"
                                    src="{{asset('legend-intransit-2.png')}}" alt="In-transit Label"></td>
                            <td class="flex items-center justify-center"><a href="#"><img class="w-4 h-auto lg:w-6"
                                        src="{{asset('edit-icon.png')}}" alt="Edit Icon"></a></td>
                            <td class="flex items-center justify-center"><a href="#"><img class="w-4 h-auto lg:w-6"
                                        src="{{asset('delete-icon.png')}}" alt="Delete Icon"></a></td>

                        </tr> <!-- END of product 5 -->

                        <!-- product 6 -->
                        <tr
                            class="grid items-center justify-center w-full h-24 grid-cols-7 py-4 text-gray-700 bg-brand-4">
                            <td class="flex items-center justify-start col-span-2 ml-2 font-medium md:ml-8 lg:ml-14">
                                hch-coupons-81-off-63018</td>
                            <td class="flex items-center justify-center capitalize">product</td>
                            <td class="flex items-center justify-center capitalize">status</td>
                            <td class="flex items-center justify-center"><img class="w-4 h-auto md:w-10"
                                    src="{{asset('legend-delivered-2.png')}}" alt="Delivered Label"></td>
                            <td class="flex items-center justify-center"><a href="#"><img class="w-4 h-auto lg:w-6"
                                        src="{{asset('edit-icon.png')}}" alt="Edit Icon"></a></td>
                            <td class="flex items-center justify-center"><a href="#"><img class="w-4 h-auto lg:w-6"
                                        src="{{asset('delete-icon.png')}}" alt="Delete Icon"></a></td>

                        </tr> <!-- END of product 6 -->

                        <!-- product 7 -->
                        <tr
                            class="grid items-center justify-center w-full h-24 grid-cols-7 py-4 text-gray-700 bg-brand-4">
                            <td class="flex items-center justify-start col-span-2 ml-2 font-medium md:ml-8 lg:ml-14">
                                hch-coupons-81-off-63018</td>
                            <td class="flex items-center justify-center capitalize">product</td>
                            <td class="flex items-center justify-center capitalize">status</td>
                            <td class="flex items-center justify-center"><img class="w-4 h-auto md:w-10"
                                    src="{{asset('legend-packaging-2.png')}}" alt="Packaging Label"></td>
                            <td class="flex items-center justify-center"><a href="#"><img class="w-4 h-auto lg:w-6"
                                        src="{{asset('edit-icon.png')}}" alt="Edit Icon"></a></td>
                            <td class="flex items-center justify-center"><a href="#"><img class="w-4 h-auto lg:w-6"
                                        src="{{asset('delete-icon.png')}}" alt="Delete Icon"></a></td>

                        </tr> <!-- END of product 7 -->

                        <!-- product 8 -->
                        <tr
                            class="grid items-center justify-center w-full h-24 grid-cols-7 py-4 text-gray-700 bg-brand-4">
                            <td class="flex items-center justify-start col-span-2 ml-2 font-medium md:ml-8 lg:ml-14">
                                hch-coupons-81-off-63018</td>
                            <td class="flex items-center justify-center capitalize">product</td>
                            <td class="flex items-center justify-center capitalize">status</td>
                            <td class="flex items-center justify-center"><img class="w-4 h-auto md:w-10"
                                    src="{{asset('legend-delivered-2.png')}}" alt="Delivered Label"></td>
                            <td class="flex items-center justify-center"><a href="#"><img class="w-4 h-auto lg:w-6"
                                        src="{{asset('edit-icon.png')}}" alt="Edit Icon"></a></td>
                            <td class="flex items-center justify-center"><a href="#"><img class="w-4 h-auto lg:w-6"
                                        src="{{asset('delete-icon.png')}}" alt="Delete Icon"></a></td>

                        </tr> <!-- END of product 8 -->

                        <!-- product 9 -->
                        <tr
                            class="grid items-center justify-center w-full h-24 grid-cols-7 py-4 text-gray-700 bg-brand-4 ">
                            <td class="flex items-center justify-start col-span-2 ml-2 font-medium md:ml-8 lg:ml-14">
                                hch-coupons-81-off-63018</td>
                            <td class="flex items-center justify-center capitalize">product</td>
                            <td class="flex items-center justify-center capitalize">status</td>
                            <td class="flex items-center justify-center"><img class="w-4 h-auto md:w-10"
                                    src="{{asset('legend-packaging-2.png')}}" alt="Packaging Label"></td>
                            <td class="flex items-center justify-center"><a href="#"><img class="w-4 h-auto lg:w-6"
                                        src="{{asset('edit-icon.png')}}" alt="Edit Icon"></a></td>
                            <td class="flex items-center justify-center"><a href="#"><img class="w-4 h-auto lg:w-6"
                                        src="{{asset('delete-icon.png')}}" alt="Delete Icon"></a></td>

                        </tr> <!-- END of product 9 -->

                        <!-- product 10 -->
                        <tr
                            class="grid items-center justify-center w-full h-24 grid-cols-7 py-4 text-gray-700 bg-brand-4">
                            <td class="flex items-center justify-start col-span-2 ml-2 font-medium md:ml-8 lg:ml-14">
                                hch-coupons-81-off-63018</td>
                            <td class="flex items-center justify-center capitalize">product</td>
                            <td class="flex items-center justify-center capitalize">status</td>
                            <td class="flex items-center justify-center"><img class="w-4 h-auto md:w-10"
                                    src="{{asset('legend-delivered-2.png')}}" alt="Delivered Label"></td>
                            <td class="flex items-center justify-center"><a href="#"><img class="w-4 h-auto lg:w-6"
                                        src="{{asset('edit-icon.png')}}" alt="Edit Icon"></a></td>
                            <td class="flex items-center justify-center"><a href="#"><img class="w-4 h-auto lg:w-6"
                                        src="{{asset('delete-icon.png')}}" alt="Delete Icon"></a></td>

                        </tr> <!-- END of product 10 -->



                    </table>
                </div>
            </div>
        </div> <!-- END of control area -->



    </div> <!-- END of bg -->


    <!--======== JS for dropdown menu ========-->
    <script>
        function toggleElement(elemID){
            document.getElementById(elemID).classList.toggle("hidden");
            document.getElementById(elemID).classList.toggle("block");
            }
    </script>
</x-guest-layout>