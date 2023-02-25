<section class="py-14 mx-auto">
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('guest.components.page-heading', ['header' =>  $header])->html();
} elseif ($_instance->childHasBeenRendered('l2389744795-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2389744795-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2389744795-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2389744795-0');
} else {
    $response = \Livewire\Livewire::mount('guest.components.page-heading', ['header' =>  $header]);
    $html = $response->html();
    $_instance->logRenderedChild('l2389744795-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-4 lg:items-start">
            <!-- sidebar / food category -->
            <div class="">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('guest.components.category-sidebar', [])->html();
} elseif ($_instance->childHasBeenRendered('l2389744795-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l2389744795-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2389744795-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2389744795-1');
} else {
    $response = \Livewire\Livewire::mount('guest.components.category-sidebar', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2389744795-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>

            <div class="lg:col-span-3">
                <div class="absolute backdrop-blur bg-gray-800 bg-opacity-25 top-[8rem] right-4 w-full h-full flex justify-center item-center"
                     wire:loading>
                    <p class="flex items-center justify-center mx-5 text-xl font-bold text-red-500 animate-ping ">
                        Loading...
                    </p>
                </div>
                <div class="flex items-center justify-between">
                    <?php if( !empty( $life_cycle_info['hook'] ) ): ?>
                        <div class="alert alert-info">
                            <h4><strong><?php echo e($life_cycle_info['hook']); ?></strong>: <?php echo e($life_cycle_info['message']); ?></h4>
                        </div>
                    <?php endif; ?>
                    <p class="text-sm text-gray-500">

                        
                        <span class="hidden sm:inline"> Showing </span>
                        <?php echo e($items['meta']['from']); ?> to <?php echo e($items['meta']['to']); ?> of <?php echo e($items['meta']['total']); ?> Items
                        
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
                        class="grid grid-cols-2 gap-2 mt-4 p-2 border border-gray-200 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    <?php if($data): ?>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="flex flex-col flex-1 border border-red-400/20 ">

                                <img loading="lazy" alt="<?php echo e(__ ($item['name'])); ?>"
                                     class="object-contain w-full h-56"
                                     src=<?php echo e($item['image_url']); ?> >
                                <div class="px-4 py-2 relative">

                                    <div class="drop-shadow-lg absolute right-4 -top-5">
                                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('guest.components.cart-button', ['item' => $item['id']])->html();
} elseif ($_instance->childHasBeenRendered('l2389744795-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l2389744795-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2389744795-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2389744795-2');
} else {
    $response = \Livewire\Livewire::mount('guest.components.cart-button', ['item' => $item['id']]);
    $html = $response->html();
    $_instance->logRenderedChild('l2389744795-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                    </div>


                                    <h5 class="text-lg font-semibold">
                                        <?php echo e(__ ($item['name'])); ?>

                                    </h5>
                                    <span class="text-sm text-gray-600 dark:text-gray-400 capitalize">
                                    <?php echo $item['product_description']; ?>

                                </span>

                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php else: ?>
                        <div class="flex items-center justify-center w-full px-8 py-4 mt-4 bg-gradient-to-br
                        from-red-500/50 to-orange-400/50 hover:bg-gradient-to-br transition-all
                        duration-150 rounded-sm">
                            <span class="text-sm font-medium">
                                No Items Found
                            </span>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Pagination Links -->
                <div class="my-2 text-sm font-sans bg-transparent flex justify-evenly font-bold text-red-500">
                    <?php if(isset($items['links']['prev'])): ?>
                        <!-- Previous Button -->
                        <a href="<?php echo e(Request::fullUrlWithoutQuery('page').'?page='.$items['meta']['current_page']-1); ?>"
                           class="inline-flex items-center px-4 py-2 mr-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            Previous
                        </a>
                    <?php endif; ?>

                    <p class="text-sm font-normal text-gray-500">
                        <span class="hidden sm:inline"> Showing </span>
                        <?php echo e($items['meta']['from']); ?> to <?php echo e($items['meta']['to']); ?> of <?php echo e($items['meta']['total']); ?> Items
                    </p>

                    <?php if(isset($items['links']['next'])): ?>
                        <!-- Next Button -->
                        <a href="<?php echo e(Request::fullUrlWithoutQuery('page').'?page='.$items['meta']['current_page']+1); ?>"
                           class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            Next
                            <svg aria-hidden="true" class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    <?php endif; ?>
                </div>


            </div>
        </div>
    </div>
</section>



<?php /**PATH C:\xampp\htdocs\crown\resources\views/livewire/guest/pages/menu.blade.php ENDPATH**/ ?>