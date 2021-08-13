<!--
===========================================
<<< PAGE 12: MISSION, VISION, SERVICES >>>
Author: Miecaela Garcia
===========================================
-->
<x-guest-layout>
    <!-- bg -->
    <div class="relative flex flex-col items-center w-screen h-screen gap-4 bg-fixed bg-center bg-cover font-roboto md:gap-4" style="background-image: url({{asset('mvs-bg.png')}})">
            
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
        <div class="hidden w-10/12 px-20 bg-brand h-28 lg:px-72 md:block">
            <div class="flex flex-row items-center justify-between w-full h-full">
                <a href="#" class="flex items-center justify-center font-medium text-white uppercase hover:text-gray-700">register</a>
                <a href="#" class="flex items-center justify-center font-medium text-white uppercase hover:text-gray-700">book</a>
                <a href="#" class="flex items-center justify-center"><img class="h-auto mt-4 w-28" src="{{asset('logo-noname.png')}}" alt="Logo"></a>
                <a href="#" class="flex items-center justify-center font-medium text-white uppercase hover:text-gray-700">tracking</a>
                <a href="#" class="flex items-center justify-center font-medium text-white uppercase hover:text-gray-700">about us</a>
            </div>
        </div> <!-- END of navigation desktop -->
    
        
        <!--================= cards sm =================-->
        <div class="flex flex-row items-center justify-center block w-full h-full overflow-y-hidden center md:hidden">
            <!-- mission -->
            <div class="flex flex-col justify-center w-4/5 py-10 mx-2 bg-white h-4/5">
                <div class="grid items-center justify-start space-y-6">
                    <div class="flex items-center px-12 border-l-8 border-teal-600 h-14">
                        <h1 class="text-2xl font-medium text-gray-700 capitalize">mission</h1>
                    </div>

                    <div class="flex items-center px-12">
                        <p class="text-sm font-light leading-relaxed text-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vel donec fermentum sit quam consequat eget nam vitae sagittis. Eu fames urna rhoncus, lectus amet amet, sagittis tempus sed. Quis maecenas dui est elit quam ac. Augue vitae vitae augue commodo vulputate massa convallis ipsum diam.</p>
                    </div>
                </div>
            </div>

            <!-- vision -->
            <div class="flex flex-col justify-center w-4/5 py-10 mx-2 bg-white h-4/5">
                <div class="grid items-center justify-start space-y-6">
                    <div class="flex items-center px-12 border-l-8 border-teal-600 h-14">
                        <h1 class="text-2xl font-medium text-gray-700 capitalize">vision</h1>
                    </div>

                    <div class="flex items-center px-12">
                        <p class="text-sm font-light leading-relaxed text-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vel donec fermentum sit quam consequat eget nam vitae sagittis. Eu fames urna rhoncus, lectus amet amet, sagittis tempus sed. Quis maecenas dui est elit quam ac. Augue vitae vitae augue commodo vulputate massa convallis ipsum diam.</p>
                    </div>
                </div>
            </div>

            <!-- services -->
            <div class="flex flex-col justify-center w-4/5 py-10 mx-2 bg-white h-4/5">
                <div class="grid items-center justify-start space-y-6">
                    <div class="flex items-center px-12 border-l-8 border-teal-600 h-14">
                        <h1 class="text-2xl font-medium text-gray-700 capitalize">services</h1>
                    </div>

                    <div class="flex items-center px-12">
                        <p class="text-sm font-light leading-relaxed text-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vel donec fermentum sit quam consequat eget nam vitae sagittis. Eu fames urna rhoncus, lectus amet amet, sagittis tempus sed. Quis maecenas dui est elit quam ac. Augue vitae vitae augue commodo vulputate massa convallis ipsum diam.</p>
                    </div>
                </div>
            </div>

        </div> <!-- END of cards sm-->

        <!--================= cards md && lg =================-->
        <div class="items-center justify-center hidden w-full h-full md:block">
            <div class="flex flex-col items-center justify-center w-full h-full space-y-4 lg:space-y-0 lg:space-x-10 lg:flex-row">
                <!-- mission -->
                <div class="flex flex-col justify-center w-4/5 py-10 bg-white h-3/12 lg:w-3/12 lg:h-4/5 lg:py-8 2xl:py-0">
                    <div class="grid items-center justify-start space-y-4 lg:space-y-10">
                        <div class="flex items-center px-16 border-l-8 border-teal-600 h-14">
                            <h1 class="text-3xl font-medium text-gray-700 capitalize lg:text-4xl">mission</h1>
                        </div>

                        <div class="flex items-center px-16">
                            <p class="font-light text-black text-md lg:text-lg 2xl:leading-loose 2xl:tracking-wide">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vel donec fermentum sit quam consequat eget nam vitae sagittis. Eu fames urna rhoncus, lectus amet amet, sagittis tempus sed. Quis maecenas dui est elit quam ac. Augue vitae vitae augue commodo vulputate massa convallis ipsum diam.</p>
                        </div>
                    </div>
                </div>

                <!-- vision -->
                <div class="flex flex-col justify-center w-4/5 py-10 bg-white h-3/12 lg:w-3/12 lg:h-4/5 lg:py-8 2xl:py-0">
                    <div class="grid items-center justify-start space-y-4 lg:space-y-10">
                        <div class="flex items-center px-16 border-l-8 border-teal-600 h-14">
                            <h1 class="text-3xl font-medium text-gray-700 capitalize lg:text-4xl">vision</h1>
                        </div>

                        <div class="flex items-center px-16">
                            <p class="font-light text-black text-md lg:text-lg 2xl:leading-loose 2xl:tracking-wide">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vel donec fermentum sit quam consequat eget nam vitae sagittis. Eu fames urna rhoncus, lectus amet amet, sagittis tempus sed. Quis maecenas dui est elit quam ac. Augue vitae vitae augue commodo vulputate massa convallis ipsum diam.</p>
                        </div>
                    </div>
                </div>

                <!-- services -->
                <div class="flex flex-col justify-center w-4/5 py-10 bg-white h-3/12 lg:w-3/12 lg:h-4/5 lg:py-8 2xl:py-0">
                    <div class="grid items-center justify-start space-y-4 lg:space-y-10">
                        <div class="flex items-center px-16 border-l-8 border-teal-600 h-14">
                            <h1 class="text-3xl font-medium text-gray-700 capitalize lg:text-4xl">services</h1>
                        </div>

                        <div class="flex items-center px-16">
                            <p class="font-light text-black text-md lg:text-lg 2xl:leading-loose 2xl:tracking-wide">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vel donec fermentum sit quam consequat eget nam vitae sagittis. Eu fames urna rhoncus, lectus amet amet, sagittis tempus sed. Quis maecenas dui est elit quam ac. Augue vitae vitae augue commodo vulputate massa convallis ipsum diam.</p>
                        </div>
                    </div>
                </div>  
            </div>
        </div> <!-- END of cards md && lg -->

    </div> <!-- END of bg -->
    

    <!--======== JS for dropdown menu ========-->
    <script>
        function toggleElement(elemID){
            document.getElementById(elemID).classList.toggle("hidden");
            document.getElementById(elemID).classList.toggle("block");
            }
    </script>

    <!--======== Slick JS for carousel ========-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('.center').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        responsive: [
            {
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
            }
            },
            {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
            }
        ]
        });
    </script>   
</x-guest-layout>

