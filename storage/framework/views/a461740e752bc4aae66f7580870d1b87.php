<div
    x-data="{
        selectOpen: false,
        selectedValue: <?php if ((object) ($attributes->wire('model')) instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e($attributes->wire('model')->value()); ?>')<?php echo e($attributes->wire('model')->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e($attributes->wire('model')); ?>')<?php endif; ?>,
        selectableItems: <?php echo e(json_encode($options)); ?>,
        selectableItemActive: null,
        selectId: $id('select'),
        selectDropdownPosition: 'bottom',

        init() {
            this.$watch('selectOpen', () => {
                if (this.selectOpen) {
                    this.selectableItemActive = this.selectableItems.find(item => item.value === this.selectedValue) 
                        || this.selectableItems[0];
                    this.$nextTick(() => this.selectScrollToActiveItem());
                }
                this.selectPositionUpdate();
            });

            window.addEventListener('resize', () => this.selectPositionUpdate());
        },

        selectableItemIsActive(item) {
            return this.selectableItemActive && this.selectableItemActive.value === item.value;
        },

        selectableItemActiveNext() {
            let index = this.selectableItems.indexOf(this.selectableItemActive);
            if (index < this.selectableItems.length - 1) {
                this.selectableItemActive = this.selectableItems[index + 1];
                this.selectScrollToActiveItem();
            }
        },

        selectableItemActivePrevious() {
            let index = this.selectableItems.indexOf(this.selectableItemActive);
            if (index > 0) {
                this.selectableItemActive = this.selectableItems[index - 1];
                this.selectScrollToActiveItem();
            }
        },

        selectScrollToActiveItem() {
            if (this.selectableItemActive) {
                const activeElement = document.getElementById(this.selectableItemActive.value + '-' + this.selectId);
                if (activeElement) {
                    activeElement.scrollIntoView({ block: 'nearest' });
                }
            }
        },

        selectPositionUpdate() {
            const selectDropdownBottomPos = this.$refs.selectButton.getBoundingClientRect().top + 
                this.$refs.selectButton.offsetHeight + 
                this.$refs.selectableItemsList.offsetHeight;
            
            this.selectDropdownPosition = window.innerHeight < selectDropdownBottomPos ? 'top' : 'bottom';
        }
    }"
    @keydown.escape="selectOpen = false"
    @keydown.down.prevent="if(selectOpen) { selectableItemActiveNext() } else { selectOpen = true }"
    @keydown.up.prevent="if(selectOpen) { selectableItemActivePrevious() } else { selectOpen = true }"
    @keydown.enter.prevent="selectedValue = selectableItemActive.value; selectOpen = false"
    class="relative w-full"
>
    <button 
        x-ref="selectButton"
        @click="selectOpen = !selectOpen"
        :class="{ 'ring-2 ring-offset-2 ring-neutral-800': selectOpen }"
        class="relative w-full min-h-[38px] py-2 pl-3 pr-10 text-left bg-background-secondary border border-neutral rounded-md shadow-sm cursor-pointer text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-800"
        type="button"
    >
        <span x-text="selectableItems.find(item => item.value === selectedValue)?.label ?? '<?php echo e($placeholder ?? 'Select option'); ?>'" class="block truncate"></span>
        <span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ri-expand-up-down-line'); ?>
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
        </span>
    </button>

    <ul
        x-show="selectOpen"
        x-ref="selectableItemsList"
        @click.away="selectOpen = false"
        x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        :class="{ 'bottom-full mb-1': selectDropdownPosition === 'top', 'top-full mt-1': selectDropdownPosition === 'bottom' }"
        class="absolute z-50 w-full py-1 overflow-auto bg-background-secondary border border-neutral rounded-lg shadow-lg max-h-60 focus:outline-none text-sm"
        x-cloak
    >
        <template x-for="item in selectableItems" :key="item.value">
            <li
                :id="item.value + '-' + selectId"
                @click="selectedValue = item.value; selectOpen = false"
                @mousemove="selectableItemActive = item"
                :class="{ 'bg-neutral-700': selectableItemIsActive(item) }"
                class="relative py-2 pl-8 pr-4 cursor-pointer select-none hover:bg-neutral-700"
            >
                <span 
                    class="block truncate"
                    :class="{ 'font-semibold': item.value === selectedValue }"
                    x-text="item.label"
                ></span>
                <span
                    x-show="item.value === selectedValue"
                    class="absolute inset-y-0 left-0 flex items-center pl-2 text-neutral-400"
                >
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ri-check-fill'); ?>
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
                </span>
            </li>
        </template>
    </ul>
</div><?php /**PATH /home/farr/Developing/paymenter/themes/water-lab/views/components/select.blade.php ENDPATH**/ ?>