<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('guest.components.page-heading', ['header' =>  $header])->html();
} elseif ($_instance->childHasBeenRendered('l2080660970-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2080660970-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2080660970-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2080660970-0');
} else {
    $response = \Livewire\Livewire::mount('guest.components.page-heading', ['header' =>  $header]);
    $html = $response->html();
    $_instance->logRenderedChild('l2080660970-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<section>
    <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-4 lg:items-start">
            <!-- sidebar / food category -->
            <div class="">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('guest.components.category-sidebar', [])->html();
} elseif ($_instance->childHasBeenRendered('l2080660970-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l2080660970-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2080660970-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2080660970-1');
} else {
    $response = \Livewire\Livewire::mount('guest.components.category-sidebar', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2080660970-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
            <div class="lg:col-span-3">
                <div
                    class="absolute backdrop-blur bg-gray-800 bg-opacity-25 top-[2rem] right-4 w-full h-full flex justify-center item-center"
                    wire:loading>
                    <p class="flex items-center justify-center mx-5 text-xl font-bold text-red-500 animate-ping ">
                        Loading...
                    </p>
                </div>

                <div class="flex items-center justify-between">
                    <p class="text-sm text-gray-500">
                        <span class="hidden sm:inline">Showing</span>
                        <?php echo e($item->count()); ?> of <?php echo e($item->total()); ?> Items
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
                    <?php if($item->count()>0): ?>
                        <?php $__currentLoopData = $item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="flex flex-col flex-1 border border-red-400/20">
                                <img loading="lazy" alt="<?php echo e(__ ($value->name)); ?>"
                                     class="object-contain w-full h-56"
                                     src="<?php echo e(asset($value->image?'img/items/'.$value->image:'/img/foodImagePlaceholder.svg')); ?>"/>
                                <div class="px-4 py-2">
                                    <h5 class="text-lg font-semibold">
                                        <?php echo e(__ ($value->name)); ?>

                                    </h5>
                                    <span class="text-sm text-gray-600 dark:text-gray-400 capitalize">
                                    <?php echo e(__($value->description)); ?>

                                </span>

                                    <p class="mt-2 text-sm font-medium text-gray-600 dark:text-gray-400 flex flex-row justify-between items-center">

                                        <?php $__currentLoopData = $value->sku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <span class="text-gray-800 dark:text-gray-300 capitalize">
                                               <i class="icofont-pound"></i><?php echo e(__($sku->price )); ?>

                                                <span class="text-xs text-gray-600 dark:text-gray-400 capitalize">
                                                    <?php echo e($sku->attribute->name); ?>

                                                </span>
                                            </span>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </p>


                                    <div class="rounded overflow-hidden shadow-lg">
                                        <button name="add" type="button"
                                                class="flex items-end justify-center w-full py-4 mt-4
                                        text-gray-800 bg-gradient-to-bl from-red-500/50 to-orange-400/50 hover:bg-gradient-to-br
                                        transition-all duration-100 rounded-sm">
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
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <div
                            class="flex items-center justify-center w-full px-8 py-4 mt-4 bg-gradient-to-br from-red-500/50 to-orange-400/50 hover:bg-gradient-to-br transition-all duration-150 rounded-sm">
                            <span class="text-sm font-medium">
                                No Items Found
                            </span>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="mx-2 text-sm font-sans bg-transparent">
                    <?php echo e($item->links()); ?>

                </div>

            </div>
        </div>
    </div>
</section>

<?php /**PATH C:\xampp\htdocs\crown\resources\views/livewire/guest/pages/category-product.blade.php ENDPATH**/ ?>