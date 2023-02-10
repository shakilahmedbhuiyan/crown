<div>
    <livewire:guest.components.page-heading :header="$header"/>



        <!-- Contact Form -->
        <Section class="w-full my-8 flex justify-center item-center">
            <div class="bg-white dark:bg-gray-800 shadow rounded py-12 lg:px-28 px-8">
                <p class="md:text-3xl text-xl font-bold leading-7 text-center text-gray-700 dark:text-white">Let’s chat
                    and get a quote!</p>

                <div class="md:flex items-center mt-12">
                    <div class="md:w-72 flex flex-col">
                        <label for="name" class="text-base font-semibold leading-none text-gray-800 dark:text-white">Name</label>
                        <input type="text" id="name" wire:model.defer="form.name"
                               class="text-base leading-none  p-3 focus:oultine-none focus:border-indigo-700 mt-4 bg-transparent border rounded border-gray-200"
                               placeholder="Enter your name"/>
                        <x-jet-input-error for="form.name"></x-jet-input-error>
                    </div>
                    <div class="md:w-72 flex flex-col md:ml-6 md:mt-0 mt-4">
                        <label for="email" class="text-base font-semibold leading-none text-gray-800 dark:text-white">
                            Email Address</label>
                        <input type="email" id="email" wire:model.defer="form.email"
                               class="text-base leading-none  p-3 focus:oultine-none focus:border-indigo-700 mt-4 bg-transparent border rounded border-gray-200"
                               placeholder="Please input email address"/>
                        <x-jet-input-error for="form.email"></x-jet-input-error>
                    </div>
                </div>

                <div class="md:flex items-center mt-8">
                    <div class="flex flex-col w-full">
                        <label for="area" class="text-base font-semibold leading-none text-gray-800 dark:text-white">
                            Area</label>
                        <input type="text" id="area" wire:model.defer="form.area"
                               class="text-base leading-none p-3 focus:oultine-none focus:border-indigo-700 mt-4 bg-transparent border rounded border-gray-200"
                               placeholder="Enter Area Code"/>
                        <x-jet-input-error for="form.area"></x-jet-input-error>
                    </div>

                </div>

                <div>
                    <div class="w-full flex flex-col mt-8">
                        <label for="message" class="text-base font-semibold leading-none text-gray-800 dark:text-white">Message</label>
                        <textarea id="message" wire:model.defer="form.message"
                                  class="h-36 text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-indigo-700 mt-4 bg-transparent border rounded border-gray-200 resize-none" placeholder="leave a message" ></textarea>
                        <x-jet-input-error for="form.message"></x-jet-input-error>
                    </div>
                </div>
                <p class="text-xs leading-3 text-gray-600 dark:text-gray-200 mt-4">
                    By clicking submit you agree to our terms of service, privacy policy and how we use data as stated</p>
                <div class="flex items-center justify-center w-full">
                    <button
                        class="mt-9 text-base font-semibold leading-none text-white py-4 px-10 rounded bg-gradient-to-br from-pink-700 to-orange-400 hover:bg-gradient-to-bl drop-shadow-lg focus:outline-none">
                        SUBMIT
                    </button>
                </div>
            </div>
        </Section>

        <!-- Map Location -->
        <section class=" flex flex-col w-full px-4 py-2 md:flex-row h-[400px] md:h-[350px]">
            <div class="md:flex md:items-center md:justify-center md:w-1/2">
                <div class="px-6 py-6 md:px-8 md:py-0">
                    <h2 class="text-lg font-bold text-gray-800 dark:text-white">
                <span class="font-bold inline-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-500 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                </span>
                        We are Located on <span class="text-red-500 dark:text-red-400">206 London Road</span>
                        Southend-on-Sea, UK</h2>

                    <p class="mt-2 text-sm text-gray-700 dark:text-gray-400 uppercase">
                        We serve all over the Westcliff-on-Sea, Southend-on-Sea SS1 1PJ, United Kingdom
                    </p>
                </div>

            </div>


            <div class="flex items-center justify-center px-2 md:w-1/2 border border-red-400/50 rounded-sm">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2481.5512365965433!2d0.6975957248884346!3d51.53979036057773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8d9f555a64e33%3A0xc0ffbe72c79b91a3!2sCrown%20Restaurant!5e0!3m2!1sen!2sbd!4v1654257021657!5m2!1sen!2sbd"
                    height="100%" width="100%" style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </section>


</div>

@section('jsAfterLoad')
    <script>
        const MenuHandler = (flag) => {
            if (flag) {
                document.getElementById("list").classList.add("top-100");
                document.getElementById("list").classList.remove("hidden");
                document.getElementById("close").classList.remove("hidden");
                document.getElementById("open").classList.add("hidden");
            } else {
                document.getElementById("list").classList.remove("top-100");
                document.getElementById("list").classList.add("hidden");
                document.getElementById("close").classList.add("hidden");
                document.getElementById("open").classList.remove("hidden");
            }
        };
    </script>
@endsection
