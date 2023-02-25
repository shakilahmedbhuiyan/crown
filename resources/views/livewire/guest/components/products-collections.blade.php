<livewire:guest.components.page-heading :header=" $header"/>
<section>
    <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-4 lg:items-start">
            <!-- sidebar / food category -->
            <div class="">
                <livewire:guest.components.category-sidebar/>
            </div>

            <div class="lg:col-span-3">
                <div
                        class="absolute backdrop-blur bg-gray-800 bg-opacity-25 top-[8rem] right-4 w-full h-full flex justify-center item-center"
                        wire:loading>
                    <p class="flex items-center justify-center mx-5 text-xl font-bold text-red-500 animate-ping ">
                        Loading...
                    </p>
                </div>
                <div class="flex items-center justify-between">
                    @if ( !empty( $life_cycle_info['hook'] ) )
                        <div class="alert alert-info">
                            <h4><strong>{{ $life_cycle_info['hook'] }}</strong>: {{ $life_cycle_info['message'] }}</h4>
                        </div>
                    @endif
                    <p class="text-sm text-gray-500">

                        <span>Page {{ $currentPage }} of {{ ceil(count($data) / $perPage) }}</span>
                        <span class="hidden sm:inline"> Showing</span>
{{--                        {{ $items['meta']['from']  }} to {{$items['meta']['to'] }} of {{$items['meta']['total'] }} Items--}}
{{--                        {{ $perPage  }} of {{ $items['data']->total() }} Items--}}
                    </p>
                    {{ $page }}

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
                        class="grid grid-cols-2 gap-2 mt-4 p-2 border border-gray-200 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    @if($data)
                        @foreach( array_slice($data, ($currentPage - 1) * $perPage, $perPage) as $item)
                            <div class="flex flex-col flex-1 border border-red-400/20 ">

                                <img loading="lazy" alt="{{__ ($item['name']) }}"
                                     class="object-contain w-full h-56"
                                     src={{ $item['image_url'] }} >
                                <div class="px-4 py-2 relative">

                                    <div class="drop-shadow-lg absolute right-4 -top-5">
                                        <livewire:guest.components.cart-button :item="$item['id']"/>
                                    </div>


                                    <h5 class="text-lg font-semibold">
                                        {{__ ($item['name']) }}
                                    </h5>
                                    <span class="text-sm text-gray-600 dark:text-gray-400 capitalize">
                                    {!! $item['product_description'] !!}
                                </span>

                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="flex items-center justify-center w-full px-8 py-4 mt-4 bg-gradient-to-br
                        from-red-500/50 to-orange-400/50 hover:bg-gradient-to-br transition-all
                        duration-150 rounded-sm">
                            <span class="text-sm font-medium">
                                No Items Found
                            </span>
                        </div>
                    @endif
                </div>

                <div class="mx-2 text-sm font-sans bg-transparent flex justify-evenly font-bold text-red-500">
                    <button wire:click="ChangeLimit()">Load More</button>
                                      <!-- Pagination Links -->
                    <button wire:click="$set('currentPage', 1)">First</button>
                    <button wire:click="$set('currentPage', $currentPage - 1)"
                            {{ $currentPage == 1 ? 'disabled' : '' }}>Previous</button>

                    <button wire:click="$set('currentPage', $currentPage + 1)"
                            {{ $currentPage == ceil(count($data) / $perPage) ? 'disabled' : '' }}>Next</button>
                    <button wire:click="$set('currentPage', ceil(count($data) / $perPage))">Last</button>
                </div>
                <nav aria-label="pagination">
{{--                    @if($previousPageUrl)--}}
{{--                        <a href="?page={{ $page-1 }}">Previous</a>--}}
{{--                    @endif--}}

{{--                    @if($nextPageUrl)--}}
{{--                        <a href="?page={{ $page+1 }}">Next</a>--}}
{{--                    @endif--}}
                </nav>

            </div>
        </div>
    </div>
</section>



