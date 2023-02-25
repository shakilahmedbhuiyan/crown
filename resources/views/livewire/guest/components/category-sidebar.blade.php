<div x-data="{open : true}">

    <details open x-effect="open"
             class="overflow-hidden border border-red-400/20 dark:border-indigo-400/20 rounded lg:drop-shadow">
        <summary class="flex items-center justify-between px-5 py-3 bg-gray-50 dark:bg-gray-800  inline-block">
        <span class="text-sm font-medium">
           Filter Items
        </span>
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </summary>


        <form class="border-t border-gray-200 lg:border-t-0" wire:submit.prevent="">
            @csrf
            <div class="flex justify-between px-5 py-3 border-t border-gray-200">
                <button name="reset" type="button" wire:click="resetFilter"
                        class="text-xs font-medium text-gray-600 underline rounded">
                    Reset All
                </button>
{{--                <button type="submit"--}}
{{--                        class="px-5 py-3 text-xs font-medium text-white bg-green-600 rounded">--}}
{{--                    Apply Filters--}}
{{--                </button>--}}
            </div>
            <legend class="block w-full px-5 py-3 text-sm font-medium bg-gray-50 dark:bg-gray-800">
                <span class="flex justify-between">
                    <span>Items</span>
                    <i class="icofont-food-basket text-2xl text-orange-500 dark:text-teal-500"></i>
                </span>
            </legend>

            <div class="px-5 py-6 space-y-2">

                @foreach($categories as $c)
                    <div class="flex items-center">
                        <a href="{{ route('menu.category',[$c['name'], $c['id']]) }}">
                        <label for="{{ $c['name'] }}" class="ml-3 text-sm font-medium hover:text-red-500">
                            {{ $c['name'] }}
                        </label>
                        </a>

                    </div>

                @endforeach


                <div class="pt-2">
                    <button type="button" wire:click="resetCategories"
                            class="text-xs text-gray-500 underline">
                        Reset Items
                    </button>
                </div>
            </div>

            <div class="flex justify-between px-5 py-3 border-t border-gray-200">
                <button name="reset" type="button" wire:click="resetFilter"
                        class="text-xs font-medium text-gray-600 underline rounded">
                    Reset All
                </button>

{{--                <button type="submit"--}}
{{--                        class="px-5 py-3 text-xs font-medium text-white bg-green-600 rounded">--}}
{{--                    Apply Filters--}}
{{--                </button>--}}
            </div>
        </form>
    </details>
</div>
@section('jsAfterLoad')
    <script>
        window.addEventListener('resize', () => {
            // let desktopScreen = window.innerWidth < 768
            document.querySelector('details').open = window.innerWidth >= 768;
            // document.querySelector('details').open = !desktopScreen
        })
        let $isMobile = window.innerWidth <= 768;
        document.querySelector('details').open = !$isMobile;
    </script>
@stop
