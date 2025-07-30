<form
    class="mx-auto flex flex-col gap-2 mt-4 shadow-sm px-6 sm:px-14 pb-10 bg-primary-800 rounded-md xl:max-w-[40%] w-full"
    wire:submit="submit" id="login">
    <div class="flex flex-col items-center mt-4 mb-10">
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
        <h1 class="text-2xl text-center mt-2"><?php echo e(__('auth.sign_in_title')); ?> </h1>
    </div>
    <?php if (isset($component)) { $__componentOriginal5c2a97ab476b69c1189ee85d1a95204b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c2a97ab476b69c1189ee85d1a95204b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input','data' => ['name' => 'email','type' => 'email','label' => __('general.input.email'),'placeholder' => __('general.input.email_placeholder'),'wire:model' => 'email','hideRequiredIndicator' => true,'required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'email','type' => 'email','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('general.input.email')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('general.input.email_placeholder')),'wire:model' => 'email','hideRequiredIndicator' => true,'required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5c2a97ab476b69c1189ee85d1a95204b)): ?>
<?php $attributes = $__attributesOriginal5c2a97ab476b69c1189ee85d1a95204b; ?>
<?php unset($__attributesOriginal5c2a97ab476b69c1189ee85d1a95204b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5c2a97ab476b69c1189ee85d1a95204b)): ?>
<?php $component = $__componentOriginal5c2a97ab476b69c1189ee85d1a95204b; ?>
<?php unset($__componentOriginal5c2a97ab476b69c1189ee85d1a95204b); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal5c2a97ab476b69c1189ee85d1a95204b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c2a97ab476b69c1189ee85d1a95204b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input','data' => ['name' => 'password','type' => 'password','label' => __('general.input.password'),'placeholder' => __('general.input.password_placeholder'),'required' => true,'hideRequiredIndicator' => true,'wire:model' => 'password']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'password','type' => 'password','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('general.input.password')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('general.input.password_placeholder')),'required' => true,'hideRequiredIndicator' => true,'wire:model' => 'password']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5c2a97ab476b69c1189ee85d1a95204b)): ?>
<?php $attributes = $__attributesOriginal5c2a97ab476b69c1189ee85d1a95204b; ?>
<?php unset($__attributesOriginal5c2a97ab476b69c1189ee85d1a95204b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5c2a97ab476b69c1189ee85d1a95204b)): ?>
<?php $component = $__componentOriginal5c2a97ab476b69c1189ee85d1a95204b; ?>
<?php unset($__componentOriginal5c2a97ab476b69c1189ee85d1a95204b); ?>
<?php endif; ?>
    <div class="flex flex-row">
        <?php if (isset($component)) { $__componentOriginal43da204543437953b216481011f1ac88 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal43da204543437953b216481011f1ac88 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.checkbox','data' => ['name' => 'remember','label' => 'Remember me','wire:model' => 'remember']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'remember','label' => 'Remember me','wire:model' => 'remember']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal43da204543437953b216481011f1ac88)): ?>
<?php $attributes = $__attributesOriginal43da204543437953b216481011f1ac88; ?>
<?php unset($__attributesOriginal43da204543437953b216481011f1ac88); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal43da204543437953b216481011f1ac88)): ?>
<?php $component = $__componentOriginal43da204543437953b216481011f1ac88; ?>
<?php unset($__componentOriginal43da204543437953b216481011f1ac88); ?>
<?php endif; ?>
        <a class="text-sm text-secondary-500 text-secondary hover:underline ml-auto"
            href="<?php echo e(route('password.request')); ?>">
            <?php echo e(__('auth.forgot_password')); ?>

        </a>
    </div>

    <?php if (isset($component)) { $__componentOriginald29173023e19188bd7142e1eafa34fd3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald29173023e19188bd7142e1eafa34fd3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.captcha.index','data' => ['form' => 'login']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('captcha'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['form' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('login')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald29173023e19188bd7142e1eafa34fd3)): ?>
<?php $attributes = $__attributesOriginald29173023e19188bd7142e1eafa34fd3; ?>
<?php unset($__attributesOriginald29173023e19188bd7142e1eafa34fd3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald29173023e19188bd7142e1eafa34fd3)): ?>
<?php $component = $__componentOriginald29173023e19188bd7142e1eafa34fd3; ?>
<?php unset($__componentOriginald29173023e19188bd7142e1eafa34fd3); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal79c47ff43af68680f280e55afc88fe59 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal79c47ff43af68680f280e55afc88fe59 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.primary','data' => ['class' => 'w-full','type' => 'submit']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full','type' => 'submit']); ?><?php echo e(__('auth.sign_in')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal79c47ff43af68680f280e55afc88fe59)): ?>
<?php $attributes = $__attributesOriginal79c47ff43af68680f280e55afc88fe59; ?>
<?php unset($__attributesOriginal79c47ff43af68680f280e55afc88fe59); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal79c47ff43af68680f280e55afc88fe59)): ?>
<?php $component = $__componentOriginal79c47ff43af68680f280e55afc88fe59; ?>
<?php unset($__componentOriginal79c47ff43af68680f280e55afc88fe59); ?>
<?php endif; ?>

    <!--[if BLOCK]><![endif]--><?php if(config('settings.oauth_github') || config('settings.oauth_google') || config('settings.oauth_discord')): ?>
    <div class="flex flex-col items-center mt-4">
        <div class="my-5 flex items-center w-full">
            <span aria-hidden="true" class="h-0.5 grow rounded bg-primary-700"></span>
            <span class="rounded-full px-3 py-1 text-xs font-medium bg-primary-700 text-gray-200">
                <?php echo e(__('auth.or_sign_in_with')); ?>

            </span>
            <span aria-hidden="true" class="h-0.5 grow rounded bg-primary-700"></span>
        </div>
        <div class="flex flex-row flex-wrap justify-center mt-2 gap-4">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = ['github', 'google', 'discord']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!--[if BLOCK]><![endif]--><?php if(config('settings.oauth_' . $provider)): ?>
            <a href="<?php echo e(route('oauth.redirect', $provider)); ?>"
                class="flex items-center justify-center px-4 h-10 border border-neutral rounded-md text-primary-100">
                <img src="/assets/images/<?php echo e($provider); ?>-dark.svg" alt="<?php echo e($provider); ?>"
                    class="size-5 mr-2 text-secondary">
                <?php echo e(__(ucfirst($provider))); ?>

            </a>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <!--[if BLOCK]><![endif]--><?php if(!config('settings.registration_disabled', false)): ?>
    <div class="text-base text-center rounded-md py-2 mt-6 text-sm">
        <?php echo e(__('auth.dont_have_account')); ?>

        <a class="text-sm text-secondary-500 text-secondary hover:underline" href="<?php echo e(route('register')); ?>"
            wire:navigate>
            <?php echo e(__('auth.sign_up')); ?>

        </a>
    </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</form><?php /**PATH /home/farr/Developing/paymenter/themes/water-lab/views/auth/login.blade.php ENDPATH**/ ?>