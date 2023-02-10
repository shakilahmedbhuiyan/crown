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
                ? 'inline-flex items-center p-3 font-medium hover:text-indigo-400 transition duration-200 border-b-2 border-red-400 text-indigo-400'
                : 'inline-flex items-center p-3 font-medium hover:text-indigo-400 transition duration-200 transition';
?>

<a <?php echo e($attributes->merge(['class' => $classes])); ?>>
    <?php echo e($slot); ?>

</a>
<?php /**PATH C:\xampp\htdocs\crown\resources\views/components/nav-link.blade.php ENDPATH**/ ?>