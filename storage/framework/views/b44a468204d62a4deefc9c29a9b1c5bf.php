<!--[if BLOCK]><![endif]--><?php if($cartCount > 0): ?>
<div class="w-10 h-10 flex items-center justify-center rounded-lg hover:bg-neutral transition">
    <?php if (isset($component)) { $__componentOriginala4cd591a1275ae8c30025229c2ffa24e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala4cd591a1275ae8c30025229c2ffa24e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navigation.link','data' => ['href' => route('cart')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navigation.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('cart'))]); ?>
        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ri-shopping-bag-4-fill'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4']); ?>
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
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala4cd591a1275ae8c30025229c2ffa24e)): ?>
<?php $attributes = $__attributesOriginala4cd591a1275ae8c30025229c2ffa24e; ?>
<?php unset($__attributesOriginala4cd591a1275ae8c30025229c2ffa24e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala4cd591a1275ae8c30025229c2ffa24e)): ?>
<?php $component = $__componentOriginala4cd591a1275ae8c30025229c2ffa24e; ?>
<?php unset($__componentOriginala4cd591a1275ae8c30025229c2ffa24e); ?>
<?php endif; ?>
</div>
<?php endif; ?><!--[if ENDBLOCK]><![endif]--><?php /**PATH /home/farr/Developing/paymenter/themes/water-lab/views/components/cart.blade.php ENDPATH**/ ?>