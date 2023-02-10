<?php $attributes = $attributes->exceptProps(['active']); ?>
<?php foreach (array_filter((['active']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $classes = ($active ?? false)
                ? 'flex items-center px-6 py-2  text-red-400 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100'
                : 'flex items-center px-6 py-2  text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 focus:outline-none transition';
?>

<a <?php echo e($attributes->merge(['class' => $classes])); ?>>
    <?php echo e($slot); ?>

</a>
<?php /**PATH C:\xampp\htdocs\crown\resources\views/components/dash-link.blade.php ENDPATH**/ ?>