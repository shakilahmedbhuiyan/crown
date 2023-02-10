<div class="py-14 mx-auto">

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
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('guest.components.products-collections', [])->html();
} elseif ($_instance->childHasBeenRendered('l2389744795-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l2389744795-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2389744795-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2389744795-1');
} else {
    $response = \Livewire\Livewire::mount('guest.components.products-collections', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2389744795-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>


</div>



<?php /**PATH C:\xampp\htdocs\crown\resources\views/livewire/guest/pages/menu.blade.php ENDPATH**/ ?>