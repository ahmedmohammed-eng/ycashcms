<div class="form-container">
    <form wire:submit.prevent="save" method="post">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" wire:model="form.id" >
                <label for="">Title</label>
                <input type="text" class="form-control" wire:model="form.title" >
                <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <label class="error text-danger"><?php echo e($message); ?></label>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <label for="">Description</label>
                <textarea rows="3" class="form-control" wire:model="form.description" ></textarea>
                <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <label class="error text-danger"><?php echo e($message); ?></label>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <label for="">Task Status</label>
                <select class="form-control" wire:model="form.status" >
                    <option value="">Choose One</option>
                    <option value="pending">Task Pending</option>
                    <option value="accomplished">Task Accomplished</option>
                </select>
                <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <label class="error text-danger"><?php echo e($message); ?></label>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary btn-md" ><?php echo e($submitBtnTitle); ?></button>
            </div>
        </div>
    </form>
</div>
<?php /**PATH C:\xampp\htdocs\microweber-master\userfiles\modules\todo-module-livewire\src\resources\views\livewire\/admin/todo/create-form.blade.php ENDPATH**/ ?>