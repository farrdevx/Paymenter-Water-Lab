<aside class="fixed top-0 left-0 z-10 flex-col justify-between hidden w-64 h-screen mt-14 md:flex border-e border-neutral bg-background-secondary rtl:right-0">
    <?php if (isset($component)) { $__componentOriginal7df114f1062b63181360729610c82f67 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7df114f1062b63181360729610c82f67 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navigation.sidebar-links','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navigation.sidebar-links'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7df114f1062b63181360729610c82f67)): ?>
<?php $attributes = $__attributesOriginal7df114f1062b63181360729610c82f67; ?>
<?php unset($__attributesOriginal7df114f1062b63181360729610c82f67); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7df114f1062b63181360729610c82f67)): ?>
<?php $component = $__componentOriginal7df114f1062b63181360729610c82f67; ?>
<?php unset($__componentOriginal7df114f1062b63181360729610c82f67); ?>
<?php endif; ?>
</aside>
<?php /**PATH /home/farr/Developing/paymenter/themes/water-lab/views/components/navigation/sidebar.blade.php ENDPATH**/ ?>