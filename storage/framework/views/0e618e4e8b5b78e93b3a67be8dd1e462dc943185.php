<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="referrer" content="always">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="title" content="<?php echo e(config('app.name')); ?>">
    <meta name="description" content="Mexican | Fast-Food | Italian | Chicken-Takeaway in Westcliff-On-Sea, London">
    <meta name="keywords" content="Mexican, Italian, Chicken, Fast-Food">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#FF5C5C">
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#FF5C5C">

    <title><?php echo e(config('app.name')); ?></title>

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">

    <!-- Scripts -->
    <script src="<?php echo e(mix('js/app.js')); ?>" defer></script>


    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body>
<div x-data="{ sidebarOpen: true }" class="flex h-screen bg-gray-200 dark:bg-gray-900">
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.components.sidebar')->html();
} elseif ($_instance->childHasBeenRendered('bw0LzET')) {
    $componentId = $_instance->getRenderedChildComponentId('bw0LzET');
    $componentTag = $_instance->getRenderedChildComponentTagName('bw0LzET');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('bw0LzET');
} else {
    $response = \Livewire\Livewire::mount('admin.components.sidebar');
    $html = $response->html();
    $_instance->logRenderedChild('bw0LzET', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <div class="flex-1 flex flex-col overflow-hidden">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.components.header')->html();
} elseif ($_instance->childHasBeenRendered('XpV4knN')) {
    $componentId = $_instance->getRenderedChildComponentId('XpV4knN');
    $componentTag = $_instance->getRenderedChildComponentTagName('XpV4knN');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('XpV4knN');
} else {
    $response = \Livewire\Livewire::mount('admin.components.header');
    $html = $response->html();
    $_instance->logRenderedChild('XpV4knN', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        <main class="flex-1 overflow-x-hidden overflow-y-auto">
            <div class="container mx-auto px-6 py-8">
                <?php echo e($slot); ?>

            </div>


        </main>
    </div>
</div>


<?php echo $__env->yieldPushContent('modals'); ?>

<!-- Scripts -->
<?php echo \Livewire\Livewire::scripts(); ?>

<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
        data-turbolinks-eval="false" data-turbo-eval="false"></script>
<?php echo $__env->yieldContent('jsAfterLoad'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\crown\resources\views/layouts/dash.blade.php ENDPATH**/ ?>