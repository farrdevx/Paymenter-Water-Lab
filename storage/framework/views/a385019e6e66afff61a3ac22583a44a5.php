<!-- 1. WADAH BARU: Untuk memposisikan navbar di tengah dan memberi jarak dari atas -->
<div class="absolute top-4 w-full flex justify-center px-4 ">

    <!-- 2. NAVBAR UTAMA: Kelasnya diubah untuk gaya floating pill, tanpa mengubah isinya. -->
    <nav 
        x-data="{ slideOverOpen: false }"
        x-init="$watch('slideOverOpen', value => { document.documentElement.style.overflow = value ? 'hidden' : '' })"
        class="w-full  mt-4 max-w-7xl h-16 px-4 sm:px-6 flex items-center justify-between bg-slate-900/60 border border-white/10 rounded-full shadow-xl backdrop-blur-lg"
    >
        <!-- Konten di dalam nav (TIDAK DIUBAH SAMA SEKALI) -->
        <div class="w-full h-full flex items-center justify-between">

            <div class="flex flex-row items-center">
                <a href="<?php echo e(route('home')); ?>" class="flex flex-row items-center h-10" wire:navigate>
                    <?php if (isset($component)) { $__componentOriginal987d96ec78ed1cf75b349e2e5981978f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal987d96ec78ed1cf75b349e2e5981978f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.logo','data' => ['class' => 'h-10 mr-2 rtl:ml-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-10 mr-2 rtl:ml-2']); ?>
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
                    <span class="text-xl font-bold leading-none flex items-center"><?php echo e(config('app.name')); ?></span>
                </a>
                <div class="md:flex hidden flex-row ml-7">
                    <?php $__currentLoopData = \App\Classes\Navigation::getLinks(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nav): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(isset($nav['children']) && count($nav['children']) > 0): ?>
                    <div class="relative">
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
                                    <span style="" class="flex flex-row items-center p-3 text-sm font-semibold whitespace-nowrap text-base hover:text-base/80">
                                        <?php echo e($nav['name']); ?>

                                    </span>
                                </div>
                             <?php $__env->endSlot(); ?>
                             <?php $__env->slot('content', null, ['style' => 'z-index: 10;']); ?> 
                                <?php $__currentLoopData = $nav['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if (isset($component)) { $__componentOriginala4cd591a1275ae8c30025229c2ffa24e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala4cd591a1275ae8c30025229c2ffa24e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navigation.link','data' => ['href' => route($child['route'], $child['params'] ?? null),'spa' => isset($child['spa']) ? $nav['spa'] : true,'style' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navigation.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route($child['route'], $child['params'] ?? null)),'spa' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(isset($child['spa']) ? $nav['spa'] : true),'style' => '']); ?>
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
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                    </div>
                    <?php else: ?>
                    <?php if (isset($component)) { $__componentOriginala4cd591a1275ae8c30025229c2ffa24e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala4cd591a1275ae8c30025229c2ffa24e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navigation.link','data' => ['href' => route($nav['route'], $nav['params'] ?? null),'spa' => isset($nav['spa']) ? $nav['spa'] : true,'class' => 'flex items-center p-3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navigation.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route($nav['route'], $nav['params'] ?? null)),'spa' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(isset($nav['spa']) ? $nav['spa'] : true),'class' => 'flex items-center p-3']); ?>
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
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <div class="flex flex-row items-center">
                <div class="items-center hidden md:flex mr-3 z-[40]">
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
                            <div class="flex flex-col z-[80]">
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

$__html = app('livewire')->mount($__name, $__params, 'lw-3993465234-0', $__slots ?? [], get_defined_vars());

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

$__html = app('livewire')->mount($__name, $__params, 'lw-3993465234-1', $__slots ?? [], get_defined_vars());

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

                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.cart', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3993465234-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

                <?php if(auth()->check()): ?>
                <div class="hidden lg:flex">
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
                            <img src="<?php echo e(auth()->user()->avatar); ?>" class="size-8 rounded-full border border-neutral bg-background" alt="avatar" />
                         <?php $__env->endSlot(); ?>
                         <?php $__env->slot('content', null, []); ?> 
                            <div class="flex flex-col p-2">
                                <span class="text-sm text-base break-words"><?php echo e(auth()->user()->name); ?></span>
                                <span class="text-sm text-base break-words"><?php echo e(auth()->user()->email); ?></span>
                            </div>
                            <?php $__currentLoopData = \App\Classes\Navigation::getAccountDropdownLinks(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nav): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if (isset($component)) { $__componentOriginala4cd591a1275ae8c30025229c2ffa24e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala4cd591a1275ae8c30025229c2ffa24e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navigation.link','data' => ['href' => route($nav['route'], $nav['params'] ?? null),'spa' => isset($nav['spa']) ? $nav['spa'] : true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navigation.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route($nav['route'], $nav['params'] ?? null)),'spa' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(isset($nav['spa']) ? $nav['spa'] : true)]); ?>
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
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('auth.logout', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3993465234-3', $__slots ?? [], get_defined_vars());

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
                </div>
                <?php else: ?>
                <div class="hidden lg:flex flex-row gap-3">
                    <a href="<?php echo e(route('login')); ?>" wire:navigate>
                        <?php if (isset($component)) { $__componentOriginal36263f9a6b42b4504b8be98f2116ea00 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal36263f9a6b42b4504b8be98f2116ea00 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.secondary','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button.secondary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <?php echo e(__('navigation.login')); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal36263f9a6b42b4504b8be98f2116ea00)): ?>
<?php $attributes = $__attributesOriginal36263f9a6b42b4504b8be98f2116ea00; ?>
<?php unset($__attributesOriginal36263f9a6b42b4504b8be98f2116ea00); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal36263f9a6b42b4504b8be98f2116ea00)): ?>
<?php $component = $__componentOriginal36263f9a6b42b4504b8be98f2116ea00; ?>
<?php unset($__componentOriginal36263f9a6b42b4504b8be98f2116ea00); ?>
<?php endif; ?>
                    </a>
                    <?php if(!config('settings.registration_disabled', false)): ?>
                    <a href="<?php echo e(route('register')); ?>" wire:navigate>
                        <?php if (isset($component)) { $__componentOriginal79c47ff43af68680f280e55afc88fe59 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal79c47ff43af68680f280e55afc88fe59 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.primary','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <?php echo e(__('navigation.register')); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal79c47ff43af68680f280e55afc88fe59)): ?>
<?php $attributes = $__attributesOriginal79c47ff43af68680f280e55afc88fe59; ?>
<?php unset($__attributesOriginal79c47ff43af68680f280e55afc88fe59); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal79c47ff43af68680f280e55afc88fe59)): ?>
<?php $component = $__componentOriginal79c47ff43af68680f280e55afc88fe59; ?>
<?php unset($__componentOriginal79c47ff43af68680f280e55afc88fe59); ?>
<?php endif; ?>
                    </a>
                    <?php endif; ?>
                </div>
                <?php endif; ?>

                <button
                    @click="slideOverOpen = !slideOverOpen"
                    class="relative w-10 h-10 flex lg:hidden items-center justify-center rounded-lg hover:bg-neutral transition"
                    aria-label="Toggle Menu">
                    <span x-show="!slideOverOpen"><?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ri-menu-fill'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?></span>
                </button>
            </div>
        </div>

        <template x-teleport="body">
            <div x-show="slideOverOpen" @keydown.window.escape="slideOverOpen = false" class="relative z-[50]" x-cloak>
                <div x-show="slideOverOpen" x-transition.opacity @click="slideOverOpen = false" class="fixed inset-0 bg-black/60 backdrop-blur-sm"></div>
                <div class="fixed inset-0 flex">
                    <div x-show="slideOverOpen" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" class="relative flex flex-col w-1/2 max-w-sm h-full border-r border-neutral/60 bg-background-secondary/80 backdrop-blur-lg rounded-r-2xl">
                        <div class="flex items-center justify-between p-4 border-b border-neutral/60">
                            <a href="<?php echo e(route('home')); ?>" class="flex items-center h-10" wire:navigate>
                                <?php if (isset($component)) { $__componentOriginal987d96ec78ed1cf75b349e2e5981978f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal987d96ec78ed1cf75b349e2e5981978f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.logo','data' => ['class' => 'h-10 mr-2 rtl:ml-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-10 mr-2 rtl:ml-2']); ?>
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
                                <span class="text-xl font-bold leading-none"><?php echo e(config('app.name')); ?></span>
                            </a>
                            <button @click="slideOverOpen = false" class="p-2 rounded-md hover:bg-neutral">
                                <span class="sr-only">Close menu</span>
                                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ri-close-fill'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-6']); ?>
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
                        </div>
                        <div class="flex-1 overflow-y-auto p-4">
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
                            <div class="mt-auto pt-4">
                                <?php if(auth()->check()): ?>
                                    <!-- Mobile User Panel -->
                                <?php else: ?>
                                    <div class="flex flex-col gap-3">
                                        <?php if(!config('settings.registration_disabled', false)): ?>
                                        <a href="<?php echo e(route('register')); ?>" wire:navigate><?php if (isset($component)) { $__componentOriginal79c47ff43af68680f280e55afc88fe59 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal79c47ff43af68680f280e55afc88fe59 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.primary','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Register <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal79c47ff43af68680f280e55afc88fe59)): ?>
<?php $attributes = $__attributesOriginal79c47ff43af68680f280e55afc88fe59; ?>
<?php unset($__attributesOriginal79c47ff43af68680f280e55afc88fe59); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal79c47ff43af68680f280e55afc88fe59)): ?>
<?php $component = $__componentOriginal79c47ff43af68680f280e55afc88fe59; ?>
<?php unset($__componentOriginal79c47ff43af68680f280e55afc88fe59); ?>
<?php endif; ?></a>
                                        <?php endif; ?>
                                        <a href="<?php echo e(route('login')); ?>" wire:navigate><?php if (isset($component)) { $__componentOriginal36263f9a6b42b4504b8be98f2116ea00 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal36263f9a6b42b4504b8be98f2116ea00 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.secondary','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button.secondary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Login <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal36263f9a6b42b4504b8be98f2116ea00)): ?>
<?php $attributes = $__attributesOriginal36263f9a6b42b4504b8be98f2116ea00; ?>
<?php unset($__attributesOriginal36263f9a6b42b4504b8be98f2116ea00); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal36263f9a6b42b4504b8be98f2116ea00)): ?>
<?php $component = $__componentOriginal36263f9a6b42b4504b8be98f2116ea00; ?>
<?php unset($__componentOriginal36263f9a6b42b4504b8be98f2116ea00); ?>
<?php endif; ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </nav>
</div><?php /**PATH /home/farr/Developing/paymenter/themes/water-lab/views/components/navigation/index.blade.php ENDPATH**/ ?>