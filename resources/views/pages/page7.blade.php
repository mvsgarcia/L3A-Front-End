<!--
===========================================
<<< PAGE 7: CART >>>
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

        <!--==================================== cart ====================================-->
        <div class="grid w-full h-full bg-white lg:grid-cols-4 lg:w-9/12 lg:h-2/3">

            <!--=========== left side ===========-->
            <div class="relative flex hidden lg:block">

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
            <div class="flex flex-col p-4 space-y-6 lg:space-y-10 md:p-10 lg:col-span-3 2xl:p-20">
                <div class="relative flex flex-row justify-between mt-2 lg:justify-start lg:mt-0">
                    <span class="text-2xl font-bold text-gray-700 capitalize lg:text-4xl">cart</span>

                    <button type="button"
                        class="flex items-center justify-center block w-10 h-8 lg:hidden bg-brand focus:bg-brand-1"
                        onClick="toggleSideNav('sideNav')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white fill-current"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <!-- side menu -->
                    <div class="absolute right-0 z-20 flex flex-col hidden block w-40 p-4 mt-2 space-y-4 overflow-hidden text-white shadow bg-opacity-90 top-10 bg-brand lg:hidden"
                        id="sideNav">

                        <!-- all orders -->
                        <a href="#" class="text-sm font-bold text-white uppercase hover:text-gray-700">all orders</a>

                        <!-- dispatch -->
                        <a href="#" class="text-sm font-bold text-white uppercase hover:text-gray-700">dispatch</a>

                        <!-- pending -->
                        <a href="#" class="text-sm font-bold text-white uppercase hover:text-gray-700">pending </a>

                        <!-- completed -->
                        <a href="#" class="text-sm font-bold text-white uppercase hover:text-gray-700">completed </a>

                    </div>
                </div>

                <!-- products list labels -->
                <div class="flex flex-col">
                    <div
                        class="grid items-center justify-between w-full grid-cols-6 text-sm text-gray-700 lg:grid-cols-7 lg:text-lg 2xl:px-6">
                        <div class="flex items-center justify-start col-span-2 capitalize lg:col-span-3 md:ml-10">
                            Product</div>
                        <div class="flex items-center justify-center uppercase">id</div>
                        <div class="flex items-center justify-center capitalize">quantity</div>
                        <div class="flex items-center justify-center capitalize">Price</div>
                        <div class="flex items-center justify-center capitalize">action</div>
                    </div>
                </div>

                <!-- products list -->
                <div class="relative flex flex-col w-full overflow-y-scroll h-4/5 overscroll-y-auto">
                    <table class="absolute flex flex-col w-full space-y-4 text-xs h-96">

                        <!-- product 1 -->
                        <tr
                            class="grid items-center justify-center w-full h-24 grid-cols-6 py-4 text-gray-700 capitalize lg:grid-cols-7 bg-brand-4">
                            <td class="flex items-center justify-center">
                                <img class="w-10 h-auto lg:w-14" src="{{asset('cart-icon.png')}}"
                                    alt="Shopping Cart Icon">
                            </td>

                            <td
                                class="flex flex-col justify-start pl-2 space-y-2 text-xs capitalize lg:col-span-2 pr: lg:text-base lg:pl-4">
                                <span class="font-medium">product name</span>
                                <span class="">category name</span>
                            </td>

                            <!-- for id -->
                            <td class="flex items-center justify-center"></td>

                            <td class="flex items-center justify-center">
                                <a href="#"><img class="w-10 h-auto lg:w-14" src="{{asset('dropdown-qty.png')}}"
                                        alt="Dropdown QTY icon"></a>
                            </td>

                            <td class="flex items-center justify-center text-ms">$69</td>

                            <td class="flex items-center justify-center">
                                <a href="#"><img class="w-10 h-auto lg:w-12" src="{{asset('basket-icon.png')}}"
                                        alt="Basket Icon"></a>
                            </td> <!-- END of product 1 -->

                            <!-- product 2 -->
                        <tr
                            class="grid items-center justify-center w-full h-24 grid-cols-6 py-4 text-gray-700 capitalize lg:grid-cols-7 bg-brand-4">
                            <td class="flex items-center justify-center">
                                <img class="w-10 h-auto lg:w-14" src="{{asset('cart-icon.png')}}"
                                    alt="Shopping Cart Icon">
                            </td>

                            <td
                                class="flex flex-col justify-start pl-2 space-y-2 text-xs capitalize lg:col-span-2 pr: lg:text-base lg:pl-4">
                                <span class="font-medium">product name</span>
                                <span class="">category name</span>
                            </td>

                            <!-- for id -->
                            <td class="flex items-center justify-center"></td>

                            <td class="flex items-center justify-center">
                                <a href="#"><img class="w-10 h-auto lg:w-14" src="{{asset('dropdown-qty.png')}}"
                                        alt="Dropdown QTY icon"></a>
                            </td>

                            <td class="flex items-center justify-center text-ms">$69</td>

                            <td class="flex items-center justify-center">
                                <a href="#"><img class="w-10 h-auto lg:w-12" src="{{asset('basket-icon.png')}}"
                                        alt="Basket Icon"></a>
                            </td>
                        </tr> <!-- END of product 2 -->

                        <!-- product 3 -->
                        <tr
                            class="grid items-center justify-center w-full h-24 grid-cols-6 py-4 text-gray-700 capitalize lg:grid-cols-7 bg-brand-4">
                            <td class="flex items-center justify-center">
                                <img class="w-10 h-auto lg:w-14" src="{{asset('cart-icon.png')}}"
                                    alt="Shopping Cart Icon">
                            </td>

                            <td
                                class="flex flex-col justify-start pl-2 space-y-2 text-xs capitalize lg:col-span-2 pr: lg:text-base lg:pl-4">
                                <span class="font-medium">product name</span>
                                <span class="">category name</span>
                            </td>

                            <!-- for id -->
                            <td class="flex items-center justify-center"></td>

                            <td class="flex items-center justify-center">
                                <a href="#"><img class="w-10 h-auto lg:w-14" src="{{asset('dropdown-qty.png')}}"
                                        alt="Dropdown QTY icon"></a>
                            </td>

                            <td class="flex items-center justify-center text-ms">$69</td>

                            <td class="flex items-center justify-center">
                                <a href="#"><img class="w-10 h-auto lg:w-12" src="{{asset('basket-icon.png')}}"
                                        alt="Basket Icon"></a>
                            </td>
                        </tr> <!-- END of product 3 -->

                        <!-- product 4 -->
                        <tr
                            class="grid items-center justify-center w-full h-24 grid-cols-6 py-4 text-gray-700 capitalize lg:grid-cols-7 bg-brand-4">
                            <td class="flex items-center justify-center">
                                <img class="w-10 h-auto lg:w-14" src="{{asset('cart-icon.png')}}"
                                    alt="Shopping Cart Icon">
                            </td>

                            <td
                                class="flex flex-col justify-start pl-2 space-y-2 text-xs capitalize lg:col-span-2 pr: lg:text-base lg:pl-4">
                                <span class="font-medium">product name</span>
                                <span class="">category name</span>
                            </td>

                            <!-- for id -->
                            <td class="flex items-center justify-center"></td>

                            <td class="flex items-center justify-center">
                                <a href="#"><img class="w-10 h-auto lg:w-14" src="{{asset('dropdown-qty.png')}}"
                                        alt="Dropdown QTY icon"></a>
                            </td>

                            <td class="flex items-center justify-center text-ms">$69</td>

                            <td class="flex items-center justify-center">
                                <a href="#"><img class="w-10 h-auto lg:w-12" src="{{asset('basket-icon.png')}}"
                                        alt="Basket Icon"></a>
                            </td>
                        </tr> <!-- END of product 4 -->

                            <!-- product 5 -->
                        <tr
                            class="grid items-center justify-center w-full h-24 grid-cols-6 py-4 text-gray-700 capitalize lg:grid-cols-7 bg-brand-4">
                            <td class="flex items-center justify-center">
                                <img class="w-10 h-auto lg:w-14" src="{{asset('cart-icon.png')}}"
                                    alt="Shopping Cart Icon">
                            </td>

                            <td
                                class="flex flex-col justify-start pl-2 space-y-2 text-xs capitalize lg:col-span-2 pr: lg:text-base lg:pl-4">
                                <span class="font-medium">product name</span>
                                <span class="">category name</span>
                            </td>

                            <!-- for id -->
                            <td class="flex items-center justify-center"></td>

                            <td class="flex items-center justify-center">
                                <a href="#"><img class="w-10 h-auto lg:w-14" src="{{asset('dropdown-qty.png')}}"
                                        alt="Dropdown QTY icon"></a>
                            </td>

                            <td class="flex items-center justify-center text-ms">$69</td>

                            <td class="flex items-center justify-center">
                                <a href="#"><img class="w-10 h-auto lg:w-12" src="{{asset('basket-icon.png')}}"
                                        alt="Basket Icon"></a>
                            </td>
                        </tr> <!-- END of product 5 -->

                        <!-- product 6 -->
                        <tr
                            class="grid items-center justify-center w-full h-24 grid-cols-6 py-4 text-gray-700 capitalize lg:grid-cols-7 bg-brand-4">
                            <td class="flex items-center justify-center">
                                <img class="w-10 h-auto lg:w-14" src="{{asset('cart-icon.png')}}"
                                    alt="Shopping Cart Icon">
                            </td>

                            <td
                                class="flex flex-col justify-start pl-2 space-y-2 text-xs capitalize lg:col-span-2 pr: lg:text-base lg:pl-4">
                                <span class="font-medium">product name</span>
                                <span class="">category name</span>
                            </td>

                            <!-- for id -->
                            <td class="flex items-center justify-center"></td>

                            <td class="flex items-center justify-center">
                                <a href="#"><img class="w-10 h-auto lg:w-14" src="{{asset('dropdown-qty.png')}}"
                                        alt="Dropdown QTY icon"></a>
                            </td>

                            <td class="flex items-center justify-center text-ms">$69</td>

                            <td class="flex items-center justify-center">
                                <a href="#"><img class="w-10 h-auto lg:w-12" src="{{asset('basket-icon.png')}}"
                                        alt="Basket Icon"></a>
                            </td>
                        </tr> <!-- END of product 6 -->

                        <!-- product 7 -->
                        <tr
                            class="grid items-center justify-center w-full h-24 grid-cols-6 py-4 text-gray-700 capitalize lg:grid-cols-7 bg-brand-4">
                            <td class="flex items-center justify-center">
                                <img class="w-10 h-auto lg:w-14" src="{{asset('cart-icon.png')}}"
                                    alt="Shopping Cart Icon">
                            </td>

                            <td
                                class="flex flex-col justify-start pl-2 space-y-2 text-xs capitalize lg:col-span-2 pr: lg:text-base lg:pl-4">
                                <span class="font-medium">product name</span>
                                <span class="">category name</span>
                            </td>

                            <!-- for id -->
                            <td class="flex items-center justify-center"></td>

                            <td class="flex items-center justify-center">
                                <a href="#"><img class="w-10 h-auto lg:w-14" src="{{asset('dropdown-qty.png')}}"
                                        alt="Dropdown QTY icon"></a>
                            </td>

                            <td class="flex items-center justify-center text-ms">$69</td>

                            <td class="flex items-center justify-center">
                                <a href="#"><img class="w-10 h-auto lg:w-12" src="{{asset('basket-icon.png')}}"
                                        alt="Basket Icon"></a>
                            </td>
                        </tr> <!-- END of product 7 -->

                        <!-- product 8 -->
                        <tr
                            class="grid items-center justify-center w-full h-24 grid-cols-6 py-4 text-gray-700 capitalize lg:grid-cols-7 bg-brand-4">
                            <td class="flex items-center justify-center">
                                <img class="w-10 h-auto lg:w-14" src="{{asset('cart-icon.png')}}"
                                    alt="Shopping Cart Icon">
                            </td>

                            <td
                                class="flex flex-col justify-start pl-2 space-y-2 text-xs capitalize lg:col-span-2 pr: lg:text-base lg:pl-4">
                                <span class="font-medium">product name</span>
                                <span class="">category name</span>
                            </td>

                            <!-- for id -->
                            <td class="flex items-center justify-center"></td>

                            <td class="flex items-center justify-center">
                                <a href="#"><img class="w-10 h-auto lg:w-14" src="{{asset('dropdown-qty.png')}}"
                                        alt="Dropdown QTY icon"></a>
                            </td>

                            <td class="flex items-center justify-center text-ms">$69</td>

                            <td class="flex items-center justify-center">
                                <a href="#"><img class="w-10 h-auto lg:w-12" src="{{asset('basket-icon.png')}}"
                                        alt="Basket Icon"></a>
                            </td>
                        </tr> <!-- END of product 8 -->

                        <!-- product 9 -->
                        <tr
                            class="grid items-center justify-center w-full h-24 grid-cols-6 py-4 text-gray-700 capitalize lg:grid-cols-7 bg-brand-4">
                            <td class="flex items-center justify-center">
                                <img class="w-10 h-auto lg:w-14" src="{{asset('cart-icon.png')}}"
                                    alt="Shopping Cart Icon">
                            </td>

                            <td
                                class="flex flex-col justify-start pl-2 space-y-2 text-xs capitalize lg:col-span-2 pr: lg:text-base lg:pl-4">
                                <span class="font-medium">product name</span>
                                <span class="">category name</span>
                            </td>

                            <!-- for id -->
                            <td class="flex items-center justify-center"></td>

                            <td class="flex items-center justify-center">
                                <a href="#"><img class="w-10 h-auto lg:w-14" src="{{asset('dropdown-qty.png')}}"
                                        alt="Dropdown QTY icon"></a>
                            </td>

                            <td class="flex items-center justify-center text-ms">$69</td>

                            <td class="flex items-center justify-center">
                                <a href="#"><img class="w-10 h-auto lg:w-12" src="{{asset('basket-icon.png')}}"
                                        alt="Basket Icon"></a>
                            </td>
                        </tr> <!-- END of product 9 -->

                        <!-- product 10 -->
                        <tr
                            class="grid items-center justify-center w-full h-24 grid-cols-6 py-4 text-gray-700 capitalize lg:grid-cols-7 bg-brand-4">
                            <td class="flex items-center justify-center">
                                <img class="w-10 h-auto lg:w-14" src="{{asset('cart-icon.png')}}"
                                    alt="Shopping Cart Icon">
                            </td>

                            <td
                                class="flex flex-col justify-start pl-2 space-y-2 text-xs capitalize lg:col-span-2 pr: lg:text-base lg:pl-4">
                                <span class="font-medium">product name</span>
                                <span class="">category name</span>
                            </td>

                            <!-- for id -->
                            <td class="flex items-center justify-center"></td>

                            <td class="flex items-center justify-center">
                                <a href="#"><img class="w-10 h-auto lg:w-14" src="{{asset('dropdown-qty.png')}}"
                                        alt="Dropdown QTY icon"></a>
                            </td>

                            <td class="flex items-center justify-center text-ms">$69</td>

                            <td class="flex items-center justify-center">
                                <a href="#"><img class="w-10 h-auto lg:w-12" src="{{asset('basket-icon.png')}}"
                                        alt="Basket Icon"></a>
                            </td>
                        </tr> <!-- END of product 10 -->

                    </table>
                </div>
            </div>
        </div> <!-- END of cart -->



    </div> <!-- END of bg -->


    <!--======== JS for dropdown menu ========-->
    <script>
        function toggleElement(elemID){
            document.getElementById(elemID).classList.toggle("hidden");
            document.getElementById(elemID).classList.toggle("block");
            }
    </script>

    <!--======== JS for side nav ========-->
    <script>
        function toggleSideNav(sideNavID){
            document.getElementById(sideNavID).classList.toggle("hidden");
            document.getElementById(sideNavID).classList.toggle("block");
            }
    </script>
</x-guest-layout>