<?php $attributes = $attributes->exceptProps(['disabled' => false]); ?>
<?php foreach (array_filter((['disabled' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>


<input <?php echo e($disabled ? 'disabled' : ''); ?> <?php echo $attributes->merge([
    'class' => 'w-full p-4 pr-12 text-sm bg-white dark:bg-gray-800 border border-indigo-200 rounded-lg drop-shadow-xl',
    ]); ?>/>

<?php /**PATH C:\xampp\htdocs\crown\resources\views/components/input.blade.php ENDPATH**/ ?>