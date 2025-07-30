<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['href', 'spa' => true]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['href', 'spa' => true]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<a href="<?php echo e($href); ?>" <?php echo e($attributes->merge(['class' => 'flex flex-row items-center p-3 gap-2 text-sm font-semibold text-wrap ' . ($href === request()->url() ? 'text-primary' : 'text-base hover:text-base/80')])); ?> <?php if($spa): ?> wire:navigate <?php endif; ?>>
    <?php echo e($slot); ?>

</a><?php /**PATH /home/farr/Developing/paymenter/themes/water-lab/views/components/navigation/link.blade.php ENDPATH**/ ?>