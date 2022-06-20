<div class="js-cookie-consent cookie-consent fixed bottom-0 inset-x-0 pb-2">
    <div class="max-w-7xl mx-auto px-6">
        <div class="p-2 rounded-lg bg-indigo-100 dark:bg-gray-600 shadow-md dark:bg-gray-900 bg-opacity-60 dark:bg-opacity-25 backdrop-blur">
            <div class="flex items-center justify-between flex-wrap">
                <div class="flex-1 items-center  md:inline">
                    <p class="ml-3 text-black dark:text-gray-200 cookie-consent__message">
                        {!! trans('cookie-consent::texts.message') !!}
                    </p>
                </div>
                <div class="mt-2 flex-shrink-0 w-full sm:mt-0 sm:w-auto">
                    <button
                        class="js-cookie-consent-agree cookie-consent__agree cursor-pointer flex items-center justify-center px-4 py-2 rounded-md shadow-md text-sm font-medium text-yellow-300 hover:text-gray-500 bg-indigo-500 hover:bg-yellow-300">
                        {{ trans('cookie-consent::texts.agree') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
