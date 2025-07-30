<div class="flex justify-center">
    <!--[if BLOCK]><![endif]--><?php if($paginator->hasPages()): ?>
        <nav role="navigation" aria-label="Pagination Navigation" class="flex gap-2 items-center">
            <span>
                <!--[if BLOCK]><![endif]--><?php if($paginator->onFirstPage()): ?>
                    <span class="bg-background-secondary text-white px-4 py-2 rounded-lg cursor-not-allowed">Previous</span>
                <?php else: ?>
                    <button wire:click="previousPage" wire:loading.attr="disabled" rel="prev" class="bg-background-secondary text-white px-4 py-2 rounded-lg">Previous</button>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </span>

            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!--[if BLOCK]><![endif]--><?php if(is_array($element)): ?>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!--[if BLOCK]><![endif]--><?php if(
                            $page == $paginator->currentPage() ||
                                $page <= 2 ||
                                $page > $paginator->lastPage() - 2 ||
                                abs($paginator->currentPage() - $page) <= 1): ?>
                            <span>
                                <button wire:click="gotoPage(<?php echo e($page); ?>)" wire:loading.attr="disabled"
                                    class="<?php echo e($page === $paginator->currentPage() ? 'bg-background-secondary/30 text-white' : 'bg-background-secondary text-white'); ?> px-4 py-2 rounded-lg cursor-pointer"><?php echo e($page); ?></button>
                            </span>
                        <?php elseif($page == 3 || $page == $paginator->lastPage() - 3): ?>
                            <span class="bg-background-secondary text-white px-4 py-2 rounded-lg">
                                <span>...</span>
                            </span>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                <?php else: ?>
                    <span class="bg-background-secondary text-white px-4 py-2 rounded-lg">
                        <span>...</span>
                    </span>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->


            <span>
                <!--[if BLOCK]><![endif]--><?php if($paginator->onLastPage()): ?>
                    <span class="bg-background-secondary text-white px-4 py-2 rounded-lg cursor-not-allowed">Next</span>
                <?php else: ?>
                    <button wire:click="nextPage" wire:loading.attr="disabled" rel="next"
                        class="bg-background-secondary text-white px-4 py-2 rounded-lg">Next</button>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </span>
        </nav>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH /home/farr/Developing/paymenter/themes/water-lab/views/components/pagination.blade.php ENDPATH**/ ?>