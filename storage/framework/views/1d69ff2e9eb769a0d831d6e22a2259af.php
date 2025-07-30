<?php
    $currentRoute = request()->route()->getName();

    $navigation = [
        \App\Classes\Navigation::getLinks(),
        \App\Classes\Navigation::getAccountDropdownLinks(),
        \App\Classes\Navigation::getDashboardLinks(),
    ];

    function findBreadcrumb($items, $currentRoute) {
        foreach ($items as $item) {
            if (isset($item['route']) && $item['route'] === $currentRoute) {
                return [$item];
            }

            if (!empty($item['children'])) {
                $childTrail = findBreadcrumb($item['children'], $currentRoute);
                if (!empty($childTrail)) {
                    return array_merge([$item], $childTrail);
                }
            }
        }

        return [];
    }

    $breadcrumbs = [];
    foreach ($navigation as $group) {
        $breadcrumbs = findBreadcrumb($group, $currentRoute);
        if (!empty($breadcrumbs)) {
            break;
        }
    }
?>

<div class="flex flex-row items-center pb-4">
    <?php if(!empty($breadcrumbs)): ?>
        <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $breadcrumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!--[if BLOCK]><![endif]--><?php if($index > 0): ?>
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ri-arrow-right-s-line'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4 text-base mx-2']); ?>
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
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--><?php if(count($breadcrumbs) === 1): ?>
                <span class="text-2xl font-bold">
                    <?php echo e($breadcrumb['name'] ?? ''); ?>

                </span>
            <?php elseif($index === count($breadcrumbs) - 1): ?>
                <span class="text-base/80 font-semibold">
                    <?php echo e($breadcrumb['name'] ?? ''); ?>

                </span>
            <?php else: ?>
                <a href="<?php echo e(isset($breadcrumb['route']) ? route($breadcrumb['route'], $breadcrumb['params'] ?? []) : '#'); ?>" 
                   class="text-lg font-bold hover:text-primary">
                    <?php echo e($breadcrumb['name'] ?? ''); ?>

                </a>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    <?php else: ?>
        <span class="text-lg font-bold"><?php echo e(__('navigation.home')); ?></span>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div><?php /**PATH /home/farr/Developing/paymenter/themes/water-lab/views/components/navigation/breadcrumb.blade.php ENDPATH**/ ?>