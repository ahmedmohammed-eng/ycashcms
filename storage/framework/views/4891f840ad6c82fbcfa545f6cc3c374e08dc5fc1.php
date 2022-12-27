<?php echo $__env->make('app::public.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main class="w-100 h-100vh ">

    <?php if (! empty(trim($__env->yieldContent('content')))): ?>
        <?php echo $__env->yieldContent('content'); ?>
    <?php endif; ?>

</main>

<?php echo $__env->make('app::public.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH C:\xampp\htdocs\microweber-master\src\MicroweberPackages\App\Providers/../resources/views/public/layout.blade.php ENDPATH**/ ?>