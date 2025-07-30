<div class="relative" x-data="{ open: false, adjustWidth: 0 }" x-init="$watch('open', value => {
    if (value) {
        adjustWidth = 0; // Reset adjustWidth when opening
        $nextTick(() => {
            let dropdown = $refs.dropdown;
            let rect = dropdown.getBoundingClientRect();
            let windowWidth = window.innerWidth;
            adjustWidth = rect.right > windowWidth ? rect.width - 40 : 0;
        });
    }
})">

    <button
        class="flex flex-row items-center px-2 py-1 text-sm font-semibold whitespace-nowrap text-base hover:text-base/80"
        x-on:click="open = !open">
        <?php echo e($trigger); ?>

        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ri-arrow-down-s-line'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-bind:class' => '{ \'-rotate-180\' : open }','class' => 'md:block hidden size-4 text-base ease-out duration-300']); ?>
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
    </button>

    <div x-ref="dropdown"
        class="absolute mt-2 w-48 px-2 py-1 bg-background-secondary rounded-md shadow-lg z-10 border border-neutral"
        x-bind:style="{
            left: `-${adjustWidth}px`,
        }"
        x-show="open"
        x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
        x-on:click.outside="open = false" x-cloak>
        <?php echo e($content); ?>

    </div>
</div><?php /**PATH /home/farr/Developing/paymenter/themes/water-lab/views/components/dropdown.blade.php ENDPATH**/ ?>