<!--[if BLOCK]><![endif]--><?php if(config('settings.captcha') !== 'disabled'): ?>
    <div class="flex flex-col justify-center mt-2">
        <div wire:ignore>
            <?php if(config('settings.captcha') == 'recaptcha-v2'): ?>
                <?php if (isset($component)) { $__componentOriginal389f60ca71151c648f7493571561a9c0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal389f60ca71151c648f7493571561a9c0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.captcha.recaptcha-v2','data' => ['form' => $form]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('captcha.recaptcha-v2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['form' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($form)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal389f60ca71151c648f7493571561a9c0)): ?>
<?php $attributes = $__attributesOriginal389f60ca71151c648f7493571561a9c0; ?>
<?php unset($__attributesOriginal389f60ca71151c648f7493571561a9c0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal389f60ca71151c648f7493571561a9c0)): ?>
<?php $component = $__componentOriginal389f60ca71151c648f7493571561a9c0; ?>
<?php unset($__componentOriginal389f60ca71151c648f7493571561a9c0); ?>
<?php endif; ?>
            <?php elseif(config('settings.captcha') == 'recaptcha-v3'): ?>
                <?php if (isset($component)) { $__componentOriginalb6006b295b36df5a44943358c762449c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb6006b295b36df5a44943358c762449c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.captcha.recaptcha-v3','data' => ['form' => $form]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('captcha.recaptcha-v3'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['form' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($form)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb6006b295b36df5a44943358c762449c)): ?>
<?php $attributes = $__attributesOriginalb6006b295b36df5a44943358c762449c; ?>
<?php unset($__attributesOriginalb6006b295b36df5a44943358c762449c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb6006b295b36df5a44943358c762449c)): ?>
<?php $component = $__componentOriginalb6006b295b36df5a44943358c762449c; ?>
<?php unset($__componentOriginalb6006b295b36df5a44943358c762449c); ?>
<?php endif; ?>
            <?php elseif(config('settings.captcha') == 'turnstile'): ?>
                <?php if (isset($component)) { $__componentOriginal45a2f71c4f34290630818efad027329e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal45a2f71c4f34290630818efad027329e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.captcha.turnstile','data' => ['form' => $form]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('captcha.turnstile'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['form' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($form)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal45a2f71c4f34290630818efad027329e)): ?>
<?php $attributes = $__attributesOriginal45a2f71c4f34290630818efad027329e; ?>
<?php unset($__attributesOriginal45a2f71c4f34290630818efad027329e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45a2f71c4f34290630818efad027329e)): ?>
<?php $component = $__componentOriginal45a2f71c4f34290630818efad027329e; ?>
<?php unset($__componentOriginal45a2f71c4f34290630818efad027329e); ?>
<?php endif; ?>
            <?php elseif(config('settings.captcha') == 'hcaptcha'): ?>
                <?php if (isset($component)) { $__componentOriginal6cf90e1266479a12678e6f9eb8080058 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6cf90e1266479a12678e6f9eb8080058 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.captcha.hcaptcha','data' => ['form' => $form]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('captcha.hcaptcha'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['form' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($form)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6cf90e1266479a12678e6f9eb8080058)): ?>
<?php $attributes = $__attributesOriginal6cf90e1266479a12678e6f9eb8080058; ?>
<?php unset($__attributesOriginal6cf90e1266479a12678e6f9eb8080058); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6cf90e1266479a12678e6f9eb8080058)): ?>
<?php $component = $__componentOriginal6cf90e1266479a12678e6f9eb8080058; ?>
<?php unset($__componentOriginal6cf90e1266479a12678e6f9eb8080058); ?>
<?php endif; ?>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['captcha'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
    </div>
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH /home/farr/Developing/paymenter/themes/water-lab/views/components/captcha/index.blade.php ENDPATH**/ ?>