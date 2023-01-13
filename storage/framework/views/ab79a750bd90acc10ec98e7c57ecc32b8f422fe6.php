<div>
    <?php if(session()->has('success')): ?>
        <script id="notification-<?php echo e(time()); ?>">
            mw.notification.success('<?php echo e(session('success')); ?>');
        </script>
    <?php endif; ?>

    <?php if(session()->has('error')): ?>
       <script id="notification-<?php echo e(time()); ?>">
           mw.notification.error('<?php echo e(session('error')); ?>');
       </script>
    <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\microweber-master\userfiles\modules\todo-module-livewire\src\resources\views\livewire\/admin/todo/notification.blade.php ENDPATH**/ ?>