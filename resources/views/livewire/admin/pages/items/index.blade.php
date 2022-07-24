<div>

    <div class="container">
        <div class="flex justify-between item-content">
            <h3 class="text-gray-700 text-3xl font-medium">Food Items</h3>
            <a href="{{ route('admin.item.create') }}"
               class="flex flex-wrap  py-2 px-4 bg-gradient-to-br hover:bg-gradient-to-bl from-red-500/50 to-orange-400/50 rounded-lg text-gray-700 dark:text-gray-300 font-semibold"
               type="button">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
                Add New
            </a>
        </div>


        <!-- session Message -->
        <div class="relative ">
            <div class="fixed bottom-4 right-2 z-50">
                @if( session()->has('success'))
                    <div
                        class="border-2 border-green-400/50 bg-white dark:bg-gray-800 dark:text-gray-300 shadow-md p-2 my-1 rounded-lg"
                        x-data="{ show: true }" x-show="show" wire:key="{{ ('CrownAdminSessionMessage').random_int(3,8) }}"
                        x-init="setTimeout(() => show = false, 3000)">

                        <p x-init="createFoodCategoryModal=false">
                            {{ session()->get('success') }}
                        </p>

                    </div>
                @endif

            </div>
        </div>

    </div>

</div>
