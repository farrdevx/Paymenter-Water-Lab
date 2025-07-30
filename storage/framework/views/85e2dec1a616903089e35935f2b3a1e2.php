<div class="lg:px-4 lg:py-6 flex flex-col gap-2">
    <div class="flex flex-col gap-2 md:hidden">
        <?php $__currentLoopData = \App\Classes\Navigation::getLinks(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nav): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(!empty($nav['children'])): ?>
        <div x-data="{ activeAccordion: <?php echo e($nav['active'] ? 'true' : 'false'); ?> }"
            class="relative w-full mx-auto overflow-hidden text-sm font-normal divide-y divide-gray-200">
            <div class="cursor-pointer">
                <button @click="activeAccordion = !activeAccordion"
                    class="flex items-center justify-between w-full p-3 text-sm font-semibold whitespace-nowrap rounded-lg hover:bg-primary/5">
                    <div class="flex flex-row gap-2">
                        <?php if(isset($nav['icon'])): ?>
                            <?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal511d4862ff04963c3c16115c05a86a9d = $attributes; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $nav['icon']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\DynamicComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-5 '.e($nav['active'] ? 'text-primary' : 'fill-base/50').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $attributes = $__attributesOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $component = $__componentOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__componentOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
                        <?php endif; ?>
                        <span><?php echo e($nav['name']); ?></span>
                    </div>
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ri-arrow-down-s-line'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-bind:class' => '{ \'rotate-180\': activeAccordion }','class' => 'size-4 text-base ease-out duration-300']); ?>
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
                <div x-show="activeAccordion" x-collapse x-cloak>
                    <div class="p-4 pt-0 opacity-70">
                        <?php $__currentLoopData = $nav['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex items-center space-x-2">
                            <?php if (isset($component)) { $__componentOriginala4cd591a1275ae8c30025229c2ffa24e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala4cd591a1275ae8c30025229c2ffa24e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navigation.link','data' => ['href' => route($child['route'], $child['params'] ?? []),'spa' => $child['spa'] ?? true,'class' => ''.e($child['active'] ? 'text-primary font-bold' : '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navigation.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route($child['route'], $child['params'] ?? [])),'spa' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($child['spa'] ?? true),'class' => ''.e($child['active'] ? 'text-primary font-bold' : '').'']); ?>
                                <?php echo e($child['name']); ?>

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
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php else: ?>
        <div class="flex items-center rounded-lg <?php echo e($nav['active'] ? 'bg-primary/5' : 'hover:bg-primary/5'); ?>">
            <?php if (isset($component)) { $__componentOriginala4cd591a1275ae8c30025229c2ffa24e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala4cd591a1275ae8c30025229c2ffa24e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navigation.link','data' => ['href' => route($nav['route'], $nav['params'] ?? []),'spa' => $nav['spa'] ?? true,'class' => 'w-full']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navigation.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route($nav['route'], $nav['params'] ?? [])),'spa' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($nav['spa'] ?? true),'class' => 'w-full']); ?>
                <?php if(isset($nav['icon'])): ?>
                    <?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal511d4862ff04963c3c16115c05a86a9d = $attributes; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $nav['icon']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\DynamicComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-5 '.e($nav['active'] ? 'text-primary' : 'fill-base/50').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $attributes = $__attributesOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $component = $__componentOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__componentOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
                <?php endif; ?>
                <?php echo e($nav['name']); ?>

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
        <?php endif; ?>
        <?php if(isset($nav['separator'])): ?>
        <div class="h-px w-full bg-neutral"></div>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="flex flex-col gap-2">
        <?php $__currentLoopData = \App\Classes\Navigation::getDashboardLinks(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nav): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(!empty($nav['children'])): ?>
        <div x-data="{ activeAccordion: <?php echo e($nav['active'] ? 'true' : 'false'); ?> }"
            class="relative w-full mx-auto overflow-hidden text-sm font-normal divide-y divide-gray-200">
            <div class="cursor-pointer">
                <button @click="activeAccordion = !activeAccordion"
                    class="flex items-center justify-between w-full p-3 text-sm font-semibold whitespace-nowrap rounded-lg hover:bg-primary/5">
                    <div class="flex flex-row gap-2">
                        <?php if(isset($nav['icon'])): ?>
                            <?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal511d4862ff04963c3c16115c05a86a9d = $attributes; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $nav['icon']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\DynamicComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-5 '.e($nav['active'] ? 'text-primary' : 'fill-base/50').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $attributes = $__attributesOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $component = $__componentOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__componentOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
                        <?php endif; ?>
                        <span><?php echo e($nav['name']); ?></span>
                    </div>
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ri-arrow-down-s-line'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-bind:class' => '{ \'rotate-180\': activeAccordion }','class' => 'size-4 text-base ease-out duration-300']); ?>
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
                <div x-show="activeAccordion" x-collapse x-cloak>
                    <div class="p-4 pt-0 opacity-70">
                        <?php $__currentLoopData = $nav['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($child['condition'] ?? true): ?>
                            <div class="flex items-center space-x-2">
                                <?php if (isset($component)) { $__componentOriginala4cd591a1275ae8c30025229c2ffa24e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala4cd591a1275ae8c30025229c2ffa24e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navigation.link','data' => ['href' => route($child['route'], $child['params'] ?? []),'spa' => $child['spa'] ?? true,'class' => ''.e($child['active'] ? 'text-primary font-bold' : '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navigation.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route($child['route'], $child['params'] ?? [])),'spa' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($child['spa'] ?? true),'class' => ''.e($child['active'] ? 'text-primary font-bold' : '').'']); ?>
                                    <?php echo e($child['name']); ?>

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
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php else: ?>
        <div class="flex items-center rounded-lg <?php echo e($nav['active'] ? 'bg-primary/5' : 'hover:bg-primary/5'); ?>">
            <?php if (isset($component)) { $__componentOriginala4cd591a1275ae8c30025229c2ffa24e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala4cd591a1275ae8c30025229c2ffa24e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navigation.link','data' => ['href' => route($nav['route'], $nav['params'] ?? []),'spa' => $nav['spa'] ?? true,'class' => 'w-full']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navigation.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route($nav['route'], $nav['params'] ?? [])),'spa' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($nav['spa'] ?? true),'class' => 'w-full']); ?>
                <?php if(isset($nav['icon'])): ?>
                    <?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal511d4862ff04963c3c16115c05a86a9d = $attributes; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $nav['icon']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\DynamicComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-5 '.e($nav['active'] ? 'text-primary' : 'fill-base/50').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $attributes = $__attributesOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $component = $__componentOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__componentOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
                <?php endif; ?>
                <?php echo e($nav['name']); ?>

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
        <?php endif; ?>
        <?php if(isset($nav['separator'])): ?>
        <div class="h-px w-full bg-neutral"></div>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="flex flex-row items-center mt-4 justify-between md:hidden">
            <?php if (isset($component)) { $__componentOriginaldf8083d4a852c446488d8d384bbc7cbe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                 <?php $__env->slot('trigger', null, []); ?> 
                    <div class="flex flex-col">
                        <span class="text-sm text-base font-semibold text-nowrap"><?php echo e(strtoupper(app()->getLocale())); ?> <span class="text-base/50 font-semibold">|</span> <?php echo e(session('currency', config('settings.default_currency'))); ?></span>
                    </div>
                 <?php $__env->endSlot(); ?>
                 <?php $__env->slot('content', null, []); ?> 
                    <strong class="block p-2 text-xs font-semibold uppercase text-base/50"> Language </strong>
                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.language-switch', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-4187864512-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.currency-switch', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-4187864512-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe)): ?>
<?php $attributes = $__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe; ?>
<?php unset($__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldf8083d4a852c446488d8d384bbc7cbe)): ?>
<?php $component = $__componentOriginaldf8083d4a852c446488d8d384bbc7cbe; ?>
<?php unset($__componentOriginaldf8083d4a852c446488d8d384bbc7cbe); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal2090438866f3dcdb76cd8b070bcc302d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2090438866f3dcdb76cd8b070bcc302d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.theme-toggle','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('theme-toggle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2090438866f3dcdb76cd8b070bcc302d)): ?>
<?php $attributes = $__attributesOriginal2090438866f3dcdb76cd8b070bcc302d; ?>
<?php unset($__attributesOriginal2090438866f3dcdb76cd8b070bcc302d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2090438866f3dcdb76cd8b070bcc302d)): ?>
<?php $component = $__componentOriginal2090438866f3dcdb76cd8b070bcc302d; ?>
<?php unset($__componentOriginal2090438866f3dcdb76cd8b070bcc302d); ?>
<?php endif; ?>

        </div>
    </div>
</div>
<?php /**PATH /home/farr/Developing/paymenter/themes/water-lab/views/components/navigation/sidebar-links.blade.php ENDPATH**/ ?>