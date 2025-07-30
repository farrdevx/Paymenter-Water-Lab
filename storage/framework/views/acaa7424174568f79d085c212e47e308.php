<button 
    <?php echo e($attributes->merge(['class' => 'flex items-center gap-2 justify-center bg-background-secondary text-sm font-semibold border border-neutral hover:bg-background-secondary/80 py-2.5 lg:py-2 px-4.5 rounded-md w-full duration-300 cursor-pointer disabled:cursor-not-allowed disabled:opacity-50'])); ?>>
    <?php if(isset($type) && $type === 'submit'): ?>
        <div role="status" wire:loading>
            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ri-loader-5-fill'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['aria-hidden' => 'true','class' => 'size-6 me-2 fill-background animate-spin']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
            <span class="sr-only">Loading...</span>
        </div>
        <div wire:loading.remove>
            <?php echo e($slot); ?>

        </div>
    <?php else: ?>
        <?php echo e($slot); ?>

    <?php endif; ?>
</button>
<?php /**PATH /home/farr/Developing/paymenter/themes/water-lab/views/components/button/secondary.blade.php ENDPATH**/ ?>