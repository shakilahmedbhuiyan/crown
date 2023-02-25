<div class="bg-[url('/img/hero-bg.svg')]">
    <div class="container px-6 py-16 mx-auto">
        <div class="items-center lg:flex py-20 sm:py-8">
            <div class="w-full lg:w-1/2">
                <div class="lg:max-w-lg">
                    <h1 class="text-2xl font-bold text-gray-800 uppercase dark:text-white lg:text-3xl">
                       {!! config('app.name') !!}
                    </h1>
                    <h2 class="mt-2 font-semibold text-gray-700 dark:text-gray-400">
                        Fast-Food, Chicken and Mexican Restaurant
                    </h2>
                    <p class="text-gray-500 dark:text-gray-300">
                        Order quality food from anywhere in Southend-On-Sea, UK and enjoy at your place.
                    </p>
                    <div class=" flex md:flex-wrap justify-center">
                        <a href="{{ route('menu')}}"
                            class="px-8 py-2 mt-6 w-2/4 font-medium text-white uppercase shadow-lg shadow-orange-500/50 dark:shadow-md dark:shadow-indigo-800/80 transition-all duration-200 transform rounded-full bg-gradient-to-br from-pink-700 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 flex justify-center items-center">
                            <i class="icofont-restaurant px-2 text-2xl"></i> Menu
                        </a>
                    </div>

                </div>
            </div>

            <div class="flex items-center justify-center w-full mt-6 lg:mt-0 lg:w-1/2">
                <img class="w-full h-full lg:max-w-2xl drop-shadow-xl" src="{{ asset('img/CrownLogoOnly.svg') }}"
                     alt="Crown Restaurant">
            </div>
        </div>
    </div>
</div>


