<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['name', 'label' => null, 'required' => false, 'divClass' => null, 'class' => null,'placeholder' => null, 'id' => null, 'type' => null, 'hideRequiredIndicator' => false, 'dirty' => false]));

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

foreach (array_filter((['name', 'label' => null, 'required' => false, 'divClass' => null, 'class' => null,'placeholder' => null, 'id' => null, 'type' => null, 'hideRequiredIndicator' => false, 'dirty' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<fieldset class="flex flex-col relative mt-3 w-full <?php echo e($divClass ?? ''); ?>">
    <!--[if BLOCK]><![endif]--><?php if($label): ?>
        <legend>
            <label for="<?php echo e($name); ?>"
                class="text-sm text-primary-100 absolute -translate-y-1/2 start-1 ml-1 bg-background-secondary px-2 rounded-md">
                <?php echo e($label); ?>

                <!--[if BLOCK]><![endif]--><?php if($required && !$hideRequiredIndicator): ?>
                    <span class="text-red-500">*</span>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </label>
        </legend>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <input type="<?php echo e($type ?? 'text'); ?>" id="<?php echo e($id ?? $name); ?>" name="<?php echo e($name); ?>"
        class="block w-full text-sm text-base bg-background-secondary border border-neutral rounded-md shadow-sm focus:outline-none transition-all duration-300 ease-in-out disabled:bg-background-secondary/50 disabled:cursor-not-allowed <?php echo e($class ?? ''); ?> <?php if($type !== 'color'): ?> px-2.5 py-2.5 <?php endif; ?>"
        placeholder="<?php echo e($placeholder ?? ($label ?? '')); ?>"
        <?php if($dirty && isset($attributes['wire:model'])): ?> wire:dirty.class="!border-yellow-600" <?php endif; ?>
        <?php echo e($attributes->except(['placeholder', 'label', 'id', 'name', 'type', 'class', 'divClass', 'required', 'hideRequiredIndicator', 'dirty'])); ?> <?php if($required): echo 'required'; endif; ?> />
    <!--[if BLOCK]><![endif]--><?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-red-500 text-xs"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
</fieldset>
<?php /**PATH /home/farr/Developing/paymenter/themes/water-lab/views/components/form/input.blade.php ENDPATH**/ ?>