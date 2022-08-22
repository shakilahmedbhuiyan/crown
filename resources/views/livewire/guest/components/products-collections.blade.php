<section>

    <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-4 lg:items-start">
            <!-- sidebar / food category -->
            <div class="lg:sticky lg:top-4">
                <livewire:guest.components.category-sidebar/>
            </div>

            <div class="lg:col-span-3">
                <div class="flex items-center justify-between">
                    <p class="text-sm text-gray-500">
                        <span class="hidden sm:inline">Showing</span>
                        {{ $items->count()  }} of {{ $items->total() }} Items
                    </p>

                    <div class="ml-4">
                        <label for="SortBy" class="sr-only ">
                            Sort
                        </label>

                        <select id="SortBy" name="sort_by" class="text-sm border-0 rounded dark:bg-gray-800 ring-0">

                            <option readonly>Sort</option>
                            <option value="title-asc">Title, A-Z</option>
                            <option value="title-desc">Title, Z-A</option>
                            <option value="price-asc">Price, Low-High</option>
                            <option value="price-desc">Price, High-Low</option>
                        </select>
                    </div>
                </div>

                <div
                    class="grid grid-cols-2 gap-px mt-4 border border-gray-200 sm:grid-cols-2 lg:grid-cols-3">
                    @if($items->count()>0)

                    @foreach($items as $item)
                        <a href="#"
                           class="relative block" >
{{--                            <button type="button" name="serial" aria-describedby="Serial no."--}}
{{--                                    class="absolute p-2 text-white bg-black rounded-full right-4 top-4">--}}
{{--                                <span class=" text-semibold">{{__('28')}}</span>--}}
{{--                            </button>--}}
                            <img
                                loading="lazy"
                                alt="Build Your Own Drone"
                                class="object-contain w-full h-56 lg:h-72"
                                src="{{ asset('img/items/'. $item->image) }}"
                            />

                            <div class="px-4 py-2">
                                <h5 class="text-lg font-semibold">
                                    {{__ ($item->name) }}
                                </h5>
                                <span class="text-sm text-gray-600 dark:text-gray-400 capitalize">
                                {{__( $item->description)}} </span>

                                <p class="mt-2 text-sm font-medium text-gray-600 dark:text-gray-400 flex flex-row justify-between items-center">
                               <span>
                                    <i class="icofont-pound"></i>{{ $item->price}}
                               </span>
                                    <span>
                                   @if( $item->attribute == "meal")
                                    <span class="text-xl">
                                        <i class="icofont-soft-drinks"></i>
                                        <i class="icofont-french-fries -ml-4"></i>
                                    </span>
                                       @endif
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
                    @endforeach
                    @else
                        <div class="flex items-center justify-center w-full px-8 py-4 mt-4 bg-gradient-to-br from-red-500/50 to-orange-400/50 hover:bg-gradient-to-br transition-all duration-150 rounded-sm">
                            <span class="text-sm font-medium">
                                No Items Found
                            </span>
                        </div>
                        @endif

                </div>
                <div class="mx-2 text-sm font-sans bg-transparent">
                    {{ $items->links() }}
                </div>

            </div>
        </div>
    </div>
</section>



