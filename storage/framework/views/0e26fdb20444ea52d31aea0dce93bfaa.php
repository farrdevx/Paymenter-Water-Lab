<div class="">

<!--[if BLOCK]><![endif]--><?php if($category->image): ?>
    
<div class="flex items-center justify-center mb-5">
    <img src="<?php echo e(Storage::url($category->image)); ?>" alt="" class="rounded-md object-cover" style="height: 300px; width: 100%;">
</div>
<?php else: ?>

<?php endif; ?><!--[if ENDBLOCK]><![endif]-->



    <div class="flex flex-col md:flex-row gap-6 md:p-6">
    <div>
        

        <div class="md:w-[280px] md:flex-shrink-0 p-6 rounded-2xl bg-slate-900/50 border border-slate-800/80 backdrop-blur-md">

        <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-full bg-cyan-800">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-cyan-200">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44l-2.12-2.12a1.5 1.5 0 00-1.06-.44H4.5A2.25 2.25 0 002.25 6z" />
            </svg>
        </div>
                <hr class="border-slate-700/60 my-6">
        <div>
            <h2 class="flex text-center items-center gap-x-2 text-2xl font-bold text-white">
                <?php echo e($category->name); ?>

                <span class="flex h-5 w-5 items-center justify-center rounded-full bg-green-500">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-3 w-3 text-white">
                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.052-.143z" clip-rule="evenodd" />
                    </svg>
                </span>
            </h2>
            <article class="mt-2 text-sm leading-relaxed text-slate-400">
                <?php echo $category->description; ?>

            </article>
        </div>
    </div>


    <div class="md:w-[280px] md:flex-shrink-0" style="margin-top: 15px;">
        <div class="p-6 rounded-2xl bg-slate-900/50 border border-slate-800/80 backdrop-blur-md">
            <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-full bg-cyan-800">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    >
                    <line x1="4" y1="7" x2="20" y2="7"></line>
                    <line x1="4" y1="12" x2="20" y2="12"></line>
                    <line x1="4" y1="17" x2="20" y2="17"></line>
                    </svg>
            </div>
            

            <hr class="border-slate-700/60 my-6">

            <nav>
                <ul class="space-y-1">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ccategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a href="<?php echo e(route('category.show', ['category' => $ccategory->slug])); ?>" 
                           wire:navigate
                           class="block px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 
                                  <?php echo e($category->id == $ccategory->id ? 'text-sky-400 bg-slate-800/50' : 'text-slate-400 hover:text-white hover:bg-slate-800/50'); ?>">
                            <?php echo e($ccategory->name); ?>

                        </a>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </ul>
            </nav>
        </div>
    </div>

</div>


    <div class="flex-1 min-w-0">
        <div class="flex flex-col gap-6">
            <!--[if BLOCK]><![endif]--><?php if(count($childCategories) >= 1): ?>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 h-fit">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $childCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                    <a href="<?php echo e(route('category.show', ['category' => $childCategory->slug])); ?>" class="flex flex-col justify-start p-6 transition-all duration-300 ease-in-out border group bg-slate-900/50 backdrop-blur-md border-slate-800/80 rounded-xl hover:bg-sky-600/10 hover:border-sky-500 hover:-translate-y-1 hover:shadow-2xl hover:shadow-sky-500/10">
                        <div class="p-3 mb-4 transition-all duration-300 rounded-lg bg-slate-800/70 w-fit group-hover:bg-sky-500/20">
                            <!--[if BLOCK]><![endif]--><?php if($childCategory->image): ?>
                            <img src="<?php echo e(Storage::url($childCategory->image)); ?>" alt="<?php echo e($childCategory->name); ?>" class="rounded-md">
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
                        <div class="flex flex-col">
                            <h2 class="text-xl font-bold transition-colors duration-300 text-slate-100 group-hover:text-sky-300"><?php echo e($childCategory->name); ?></h2>
                            <!--[if BLOCK]><![endif]--><?php if(theme('show_category_description', true)): ?>
                            <article class="mt-2 prose dark:prose-invert"><?php echo $childCategory->description; ?></article>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
                        <div class="flex items-end justify-end flex-grow mt-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="transition-all duration-300 size-5 text-slate-600 group-hover:text-sky-400 group-hover:translate-x-1"><path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd" /></svg>
                        </div>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 h-fit">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex flex-col grid-cols-2 gap-3 p-3 transition-all duration-300 border bg-slate-900/50 backdrop-blur-lg border-sky-900/50 rounded-2xl md:p-4 hover:border-sky-500/70 hover:shadow-2xl">
                        <!--[if BLOCK]><![endif]--><?php if($product->image): ?>
                        <img src="<?php echo e(Storage::url($product->image)); ?>" alt="<?php echo e($product->name); ?>"
                            class="rounded-md w-full object-cover object-center">
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        <h2 class="text-xl text-center font-bold"><?php echo e($product->name); ?></h2> 
                        <!--[if BLOCK]><![endif]--><?php if($product->stock === 0): ?>
                        <span class=" px-4 py-3 text-xs font-medium text-red-400 border rounded-full me-2 bg-green-500/10 border-green-500/30 w-fit">
                            <?php echo e(__('product.out_of_stock', ['product' => $product->name])); ?>

                        </span>
                        <?php elseif($product->stock > 0): ?>
                        <span style="" class="px-4 py-3 text-xs font-medium text-green-400 border rounded-full me-2 bg-green-500/10 border-green-500/30 w-fit">
                            <?php echo e(__('product.in_stock')); ?>

                        </span>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    <!--[if BLOCK]><![endif]--><?php if($product->description): ?>
                        <p>Details ▼</p>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    <!--[if BLOCK]><![endif]--><?php if(theme('direct_checkout', false) && $product->description): ?>
                    <article class="prose dark:prose-invert">
                        <?php echo $product->description; ?>

                    </article>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    <h3 class="mb-2 text-lg font-semibold">
                        <?php echo e($product->price()); ?>

                    </h3>
                    <!--[if BLOCK]><![endif]--><?php if(($product->stock > 0 || !$product->stock) && $product->price()->available && theme('direct_checkout', false)): ?>
                    <a href="<?php echo e(route('products.checkout', ['category' => $category, 'product' => $product->slug])); ?>"
                        wire:navigate>
                        <?php if (isset($component)) { $__componentOriginal79c47ff43af68680f280e55afc88fe59 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal79c47ff43af68680f280e55afc88fe59 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.primary','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e(__('product.add_to_cart')); ?> 🛍️ <?php echo $__env->renderComponent(); ?>
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
                    <?php else: ?>
                    <a href="<?php echo e(route('products.show', ['category' => $product->category, 'product' => $product->slug])); ?>"
                        wire:navigate>
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
                            <?php echo e(__('general.view')); ?>

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
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </div>
</div>
</div><?php /**PATH /home/farr/Developing/paymenter/themes/water-lab/views/products/index.blade.php ENDPATH**/ ?>