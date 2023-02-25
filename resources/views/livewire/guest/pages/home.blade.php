@livewire('guest.components.hero')

<section class="py-5 bg-indigo-200 dark:bg-indigo-900">
    @livewire('guest.components.newsletter')

</section>

<section class=" flex flex-col w-full md:flex-row h-[400px] md:h-[350px]">
    <div class="md:flex md:items-center md:justify-center md:w-1/2">
        <div class="px-6 py-6 md:px-8 md:py-0">
            <h2 class="text-lg font-bold text-gray-800 dark:text-white">
                <span class="font-bold inline-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-500 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                </span>
                We are Located on <span class="text-2xl text-red-400 dark:text-orange-400">206 London Road</span>
                Southend-on-Sea, UK</h2>

            <p class="mt-2 text-sm text-gray-700 dark:text-gray-400 uppercase">
                We serve all over the Westcliff-on-Sea, Southend-on-Sea SS1 1PJ, United Kingdom
            </p>
        </div>

    </div>


    <div class="flex items-center justify-center px-2 md:w-1/2">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2481.5512365965433!2d0.6975957248884346!3d51.53979036057773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8d9f555a64e33%3A0xc0ffbe72c79b91a3!2sCrown%20Restaurant!5e0!3m2!1sen!2sbd!4v1654257021657!5m2!1sen!2sbd"
           height="100%" width="100%" style="border:0;"
            allowfullscreen="true"
            loading="lazy"
            title="Crown Restaurant in Google Map"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</section>

