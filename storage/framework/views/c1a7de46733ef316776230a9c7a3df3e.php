<style>
    :root {
        /* Branding Colors (Light) */
        --color-primary: <?php echo e(str_replace(',', '', preg_replace('/^hsl\((.+)\)$/', '$1', theme('primary', '229 100% 64%')))); ?>;
        --color-secondary: <?php echo e(str_replace(',', '', preg_replace('/^hsl\((.+)\)$/', '$1', theme('secondary', '237 33% 60%')))); ?>;

        /* Neutral Colors - Borders, Accents... (Light) */
        --color-neutral: <?php echo e(str_replace(',', '', preg_replace('/^hsl\((.+)\)$/', '$1', theme('neutral', '220 25% 85%')))); ?>;

        /* Text Colors (Light) */
        --color-base: <?php echo e(str_replace(',', '', preg_replace('/^hsl\((.+)\)$/', '$1', theme('base', '0 0% 0%')))); ?>;
        --color-muted: <?php echo e(str_replace(',', '', preg_replace('/^hsl\((.+)\)$/', '$1', theme('muted', '220 28% 25%')))); ?>;
        --color-inverted: <?php echo e(str_replace(',', '', preg_replace('/^hsl\((.+)\)$/', '$1', theme('inverted', '100 100% 100%')))); ?>;

        /* State Colors */
        --color-success: 142 71% 45%;
        --color-error: 0 75% 60%;
        --color-warning: 25 95% 53%;
        --color-inactive: 0 0% 63%;
        --color-info: 210 100% 60%;

        /* Background Colors (Light) */
        --color-background: <?php echo e(str_replace(',', '', preg_replace('/^hsl\((.+)\)$/', '$1', theme('background', '100 100% 100%')))); ?>;
        --color-background-secondary: <?php echo e(str_replace(',', '', preg_replace('/^hsl\((.+)\)$/', '$1', theme('background-secondary', '0 0% 97%')))); ?>;
    }

    .dark {
        /* Branding Colors (Dark) */
        --color-primary: <?php echo e(str_replace(',', '', preg_replace('/^hsl\((.+)\)$/', '$1', theme('dark-primary', '229 100% 64%')))); ?>;
        --color-secondary: <?php echo e(str_replace(',', '', preg_replace('/^hsl\((.+)\)$/', '$1', theme('dark-secondary', '237 33% 60%')))); ?>;

        /* Neutral Colors - Borders, Accents... (Dark) */
        --color-neutral: <?php echo e(str_replace(',', '', preg_replace('/^hsl\((.+)\)$/', '$1', theme('dark-neutral', '220 25% 29%')))); ?>;

        /* Text Colors (Dark) */
        --color-base: <?php echo e(str_replace(',', '', preg_replace('/^hsl\((.+)\)$/', '$1', theme('dark-base', '100 100% 100%')))); ?>;
        --color-muted: <?php echo e(str_replace(',', '', preg_replace('/^hsl\((.+)\)$/', '$1', theme('dark-muted', '220 28% 25%')))); ?>;
        --color-inverted: <?php echo e(str_replace(',', '', preg_replace('/^hsl\((.+)\)$/', '$1', theme('dark-inverted', '220 14% 60%')))); ?>;

        /* Background Colors (Dark) */
        --color-background: <?php echo e(str_replace(',', '', preg_replace('/^hsl\((.+)\)$/', '$1', theme('dark-background', '221 39% 11%')))); ?>;
        --color-background-secondary: <?php echo e(str_replace(',', '', preg_replace('/^hsl\((.+)\)$/', '$1', theme('dark-background-secondary', '217 33% 16%')))); ?>;
    }
</style><?php /**PATH /home/farr/Developing/paymenter/themes/water-lab/views/layouts/colors.blade.php ENDPATH**/ ?>