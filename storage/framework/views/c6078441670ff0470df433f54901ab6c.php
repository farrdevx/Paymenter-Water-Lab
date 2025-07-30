<?php if (isset($component)) { $__componentOriginal563b6827cca32fa1a554dd261a47d2be = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal563b6827cca32fa1a554dd261a47d2be = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin-footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin-footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal563b6827cca32fa1a554dd261a47d2be)): ?>
<?php $attributes = $__attributesOriginal563b6827cca32fa1a554dd261a47d2be; ?>
<?php unset($__attributesOriginal563b6827cca32fa1a554dd261a47d2be); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal563b6827cca32fa1a554dd261a47d2be)): ?>
<?php $component = $__componentOriginal563b6827cca32fa1a554dd261a47d2be; ?>
<?php unset($__componentOriginal563b6827cca32fa1a554dd261a47d2be); ?>
<?php endif; ?><?php /**PATH /home/farr/Developing/paymenter/storage/framework/views/14dfda27940083090333d991e7c79454.blade.php ENDPATH**/ ?>