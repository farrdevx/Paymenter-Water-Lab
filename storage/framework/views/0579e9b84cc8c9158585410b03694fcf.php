<footer class="w-full px-4 py-4 lg:mt-72 mt-44">
    <div class="container mx-auto grid gap-4">
        <div class="flex flex-col gap-2 items-center">
            <?php if (isset($component)) { $__componentOriginal987d96ec78ed1cf75b349e2e5981978f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal987d96ec78ed1cf75b349e2e5981978f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.logo','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal987d96ec78ed1cf75b349e2e5981978f)): ?>
<?php $attributes = $__attributesOriginal987d96ec78ed1cf75b349e2e5981978f; ?>
<?php unset($__attributesOriginal987d96ec78ed1cf75b349e2e5981978f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal987d96ec78ed1cf75b349e2e5981978f)): ?>
<?php $component = $__componentOriginal987d96ec78ed1cf75b349e2e5981978f; ?>
<?php unset($__componentOriginal987d96ec78ed1cf75b349e2e5981978f); ?>
<?php endif; ?>
            <div class="text-sm text-base/80">
                <b><?php echo e(__('© :year :app_name. | All rights reserved.', ['year' => date('Y'), 'app_name' => config('app.name')])); ?></b>
            </div>
            
            <a href="https://paymenter.org" target="_blank" 
                class="group mt-4 mb-6 flex items-center gap-2 text-base/50 hover:text-base">
                <svg class="size-4 text-current group-hover:text-[#4667FF]" width="150" height="205" viewBox="0 0 150 205" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1_17)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 107V205H42.8571V139.638H100C133.333 139.638 150 123 150 89.7246V69.5L75 107V69.5L148.227 32.8863C143.133 10.9621 127.057 0 100 0H0V107ZM0 107V69.5L75 32V69.5L0 107Z"></path>
                    </g>
                    <defs>
                        <clipPath id="clip0_1_17">
                            <rect width="150" height="205"></rect>
                        </clipPath>
                    </defs>
                </svg>
                <b class="text-sm" style="color: white"><?php echo e(__('Powered by')); ?> Paymenter x FarrCloud</b>
            </a>
        </div>
    </div>
</footer><?php /**PATH /home/farr/Developing/paymenter/themes/water-lab/views/components/navigation/footer.blade.php ENDPATH**/ ?>