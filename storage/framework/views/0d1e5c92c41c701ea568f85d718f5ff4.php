<div class="flex items-center <?php echo e($divClass ?? ''); ?>">
    
    <input type="checkbox" name="<?php echo e($name); ?>" id="<?php echo e($id ?? $name); ?>"
        <?php echo e($attributes->except(['label', 'name', 'id', 'class', 'divClass', 'required'])); ?>

        class="form-checkbox size-4 text-primary rounded focus:ring-secondary hover:bg-secondary ring-offset-primary-800 focus:ring-2 bg-background-secondary border-neutral" />
    <label class="ml-2 text-sm text-primary-100" for="<?php echo e($id ?? $name); ?>">
        <!--[if BLOCK]><![endif]--><?php if(isset($label)): ?>
            <?php echo e($label); ?>

        <?php else: ?>
            <?php echo e($slot); ?>

        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </label>

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
</div>
<?php /**PATH /home/farr/Developing/paymenter/themes/water-lab/views/components/form/checkbox.blade.php ENDPATH**/ ?>