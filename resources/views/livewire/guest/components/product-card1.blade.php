

<div>
    <a href="#"
       class="relative block" >
        <button type="button" name="serial" aria-describedby="Serial no."
                class="absolute p-2 text-white bg-black rounded-full right-4 top-4">
            <span class=" text-semibold">{{__('28')}}</span>
        </button>

        <img
            loading="lazy"
            alt="Build Your Own Drone"
            class="object-contain w-full h-56 lg:h-72"
            src="{{ asset("img/foodImagePlaceholder.svg") }}"
        />

        <div class="px-4 py-2">
            <h5 class="text-lg font-semibold">
                {{__(' Supreme Fillet Burger')}}
            </h5>
            <span class="text-sm text-gray-600 dark:text-gray-400 capitalize">
                                {{__(' Hash Brown, Chicken Breast and Cheese ')}} </span>

            <p class="mt-2 text-sm font-medium text-gray-600 dark:text-gray-400 flex flex-row justify-between items-center">
                               <span>
                                    <i class="icofont-pound"></i>{{__('4.49')}}
                               </span>
                <span>
                                     <i class="icofont-pound"></i>{{__('4.49')}}
                                    <span class="text-xl">
                                        <i class="icofont-soft-drinks"></i>
                                        <i class="icofont-french-fries -ml-4"></i>
                                    </span>
                                </span>
            </p>

            <button name="add" type="button"
                    class="flex items-center justify-center w-full px-8 py-4 mt-4 bg-gradient-to-bl from-red-500/50 to-orange-400/50 hover:bg-gradient-to-br transition-all duration-150 rounded-sm" >
                                <span class="text-sm font-medium">
                                    Add to Cart
                                </span>

                <svg class="w-5 h-5 ml-1.5" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                </svg>
            </button>
        </div>
    </a>
</div>
