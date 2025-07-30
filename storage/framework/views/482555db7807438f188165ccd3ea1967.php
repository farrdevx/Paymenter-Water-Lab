<?php if(config('settings.logo')): ?>
    <img src="<?php echo e(Storage::url(config('settings.logo'))); ?>" alt="<?php echo e(config('app.name')); ?>" <?php echo e($attributes->merge(['class' => 'h-12 w-auto inline-block'])); ?>>
<?php endif; ?>
<?php /**PATH /home/farr/Developing/paymenter/themes/water-lab/views/components/logo.blade.php ENDPATH**/ ?>