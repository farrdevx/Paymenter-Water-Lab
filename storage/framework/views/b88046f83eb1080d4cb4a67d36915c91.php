

<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" <?php if(in_array(app()->getLocale(), config('app.rtl_locales'))): ?> dir="rtl" <?php endif; ?>>
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>
        <?php echo e(config('app.name', 'Paymenter')); ?>

        <?php if(isset($title)): ?>
            - <?php echo e($title); ?>

        <?php endif; ?>
    </title>
    <?php echo app('Illuminate\Foundation\Vite')(['themes/' . config('settings.theme') . '/js/app.js', 'themes/' . config('settings.theme') . '/css/app.css'], config('settings.theme')); ?>
    <?php echo $__env->make('layouts.colors', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php if(config('settings.logo')): ?>
        <link rel="icon" href="<?php echo e(Storage::url(config('settings.logo'))); ?>" type="image/png">
    <?php endif; ?>
    <?php if(isset($title)): ?>
    <meta content="<?php echo e(isset($title) ? config('app.name', 'Paymenter') . ' - ' . $title : config('app.name', 'Paymenter')); ?>" property="og:title">
    <meta content="<?php echo e(isset($title) ? config('app.name', 'Paymenter') . ' - ' . $title : config('app.name', 'Paymenter')); ?>" name="title">
    <?php endif; ?>
    <?php if(isset($description)): ?>
    <meta content="<?php echo e($description); ?>" property="og:description">
    <meta content="<?php echo e($description); ?>" name="description">
    <?php endif; ?>
    <?php if(isset($image)): ?>
    <meta content="<?php echo e($image); ?>" property="og:image">
    <meta content="<?php echo e($image); ?>" name="image">
    <?php endif; ?>
   
    <meta name="theme-color" content="<?php echo e(theme('primary')); ?>">

    <?php echo hook('head'); ?>

</head>

<body class="flex flex-col w-full min-h-screen text-base antialiased background-waterlab" x-cloak x-data="{darkMode: $persist(window.matchMedia('(prefers-color-scheme: dark)').matches)}" :class="{'dark': darkMode}">
    <style>
        .background-waterlab{
            background-image: url('https://i.pinimg.com/1200x/37/5b/6f/375b6f41145eae0282ac17b4fc727844.jpg');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    
    <?php echo hook('body'); ?>

    <?php if (isset($component)) { $__componentOriginalf75d29720390c8e1fa3307604849a543 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf75d29720390c8e1fa3307604849a543 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navigation.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navigation'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf75d29720390c8e1fa3307604849a543)): ?>
<?php $attributes = $__attributesOriginalf75d29720390c8e1fa3307604849a543; ?>
<?php unset($__attributesOriginalf75d29720390c8e1fa3307604849a543); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf75d29720390c8e1fa3307604849a543)): ?>
<?php $component = $__componentOriginalf75d29720390c8e1fa3307604849a543; ?>
<?php unset($__componentOriginalf75d29720390c8e1fa3307604849a543); ?>
<?php endif; ?>
    <div class="flex flex-grow w-full">
        <?php if(isset($sidebar) && $sidebar): ?>
            <?php if (isset($component)) { $__componentOriginal9d69c11139dac45c50995da6fd1bec81 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d69c11139dac45c50995da6fd1bec81 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navigation.sidebar','data' => ['title' => '$title']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navigation.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => '$title']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d69c11139dac45c50995da6fd1bec81)): ?>
<?php $attributes = $__attributesOriginal9d69c11139dac45c50995da6fd1bec81; ?>
<?php unset($__attributesOriginal9d69c11139dac45c50995da6fd1bec81); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d69c11139dac45c50995da6fd1bec81)): ?>
<?php $component = $__componentOriginal9d69c11139dac45c50995da6fd1bec81; ?>
<?php unset($__componentOriginal9d69c11139dac45c50995da6fd1bec81); ?>
<?php endif; ?>
        <?php endif; ?>
        <div class="<?php echo e((isset($sidebar) && $sidebar) ? 'md:ml-64 rtl:ml-0 rtl:md:mr-64' : ''); ?> flex flex-col flex-grow overflow-auto">
            <main class="container px-4 mx-auto mt-24 sm:px-6 md:px-8 lg:px-10">
                <?php echo e($slot); ?>

            </main>
            <?php if (isset($component)) { $__componentOriginal0d8d3c14ebd2b92d484be47e6c018839 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0d8d3c14ebd2b92d484be47e6c018839 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.notification','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('notification'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0d8d3c14ebd2b92d484be47e6c018839)): ?>
<?php $attributes = $__attributesOriginal0d8d3c14ebd2b92d484be47e6c018839; ?>
<?php unset($__attributesOriginal0d8d3c14ebd2b92d484be47e6c018839); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0d8d3c14ebd2b92d484be47e6c018839)): ?>
<?php $component = $__componentOriginal0d8d3c14ebd2b92d484be47e6c018839; ?>
<?php unset($__componentOriginal0d8d3c14ebd2b92d484be47e6c018839); ?>
<?php endif; ?>
            <div class="py-8">
                <?php if (isset($component)) { $__componentOriginal901074e185567f5f1d92866b8152d9bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal901074e185567f5f1d92866b8152d9bb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navigation.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navigation.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal901074e185567f5f1d92866b8152d9bb)): ?>
<?php $attributes = $__attributesOriginal901074e185567f5f1d92866b8152d9bb; ?>
<?php unset($__attributesOriginal901074e185567f5f1d92866b8152d9bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal901074e185567f5f1d92866b8152d9bb)): ?>
<?php $component = $__componentOriginal901074e185567f5f1d92866b8152d9bb; ?>
<?php unset($__componentOriginal901074e185567f5f1d92866b8152d9bb); ?>
<?php endif; ?>
            </div>
        </div>
        <?php if (isset($component)) { $__componentOriginalbe2e5926a0ccb313c2ff3367980182e1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbe2e5926a0ccb313c2ff3367980182e1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.impersonating','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('impersonating'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbe2e5926a0ccb313c2ff3367980182e1)): ?>
<?php $attributes = $__attributesOriginalbe2e5926a0ccb313c2ff3367980182e1; ?>
<?php unset($__attributesOriginalbe2e5926a0ccb313c2ff3367980182e1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbe2e5926a0ccb313c2ff3367980182e1)): ?>
<?php $component = $__componentOriginalbe2e5926a0ccb313c2ff3367980182e1; ?>
<?php unset($__componentOriginalbe2e5926a0ccb313c2ff3367980182e1); ?>
<?php endif; ?>
    </div>
    <?php echo hook('footer'); ?>


    
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6887baa47ed5b21929b44af3/1j19325ak';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>
<?php /**PATH /home/farr/Developing/paymenter/themes/water-lab/views/layouts/app.blade.php ENDPATH**/ ?>