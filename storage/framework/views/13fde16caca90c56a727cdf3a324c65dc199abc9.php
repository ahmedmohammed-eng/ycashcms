<module type="admin/modules/info"/>
<div class="card style-1 mb-3">
    <div class="card-header">
        <module type="admin/modules/info_module_title" for-module="todo-module-livewire" />
    </div>
    <div class="card-body pt-3">
        <div class="row">
            <div class="col-md-3">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('todo-module-livewire.notification-component')->html();
} elseif ($_instance->childHasBeenRendered('k3NnqOy')) {
    $componentId = $_instance->getRenderedChildComponentId('k3NnqOy');
    $componentTag = $_instance->getRenderedChildComponentTagName('k3NnqOy');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('k3NnqOy');
} else {
    $response = \Livewire\Livewire::mount('todo-module-livewire.notification-component');
    $html = $response->html();
    $_instance->logRenderedChild('k3NnqOy', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?> <!-- This component will show notification when todo is saved or updated -->
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('todo-module-livewire.form-component')->html();
} elseif ($_instance->childHasBeenRendered('GfwRza5')) {
    $componentId = $_instance->getRenderedChildComponentId('GfwRza5');
    $componentTag = $_instance->getRenderedChildComponentTagName('GfwRza5');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('GfwRza5');
} else {
    $response = \Livewire\Livewire::mount('todo-module-livewire.form-component');
    $html = $response->html();
    $_instance->logRenderedChild('GfwRza5', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?> <!-- This component will display Todo form -->
            </div>
            <div class="col-md-9">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('todo-module-livewire.list-component')->html();
} elseif ($_instance->childHasBeenRendered('7TgcBM9')) {
    $componentId = $_instance->getRenderedChildComponentId('7TgcBM9');
    $componentTag = $_instance->getRenderedChildComponentTagName('7TgcBM9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('7TgcBM9');
} else {
    $response = \Livewire\Livewire::mount('todo-module-livewire.list-component');
    $html = $response->html();
    $_instance->logRenderedChild('7TgcBM9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?> <!-- This component will list Todos -->
            </div>
        </div>
    </div>
</div>

<?php /**PATH C:\xampp\htdocs\microweber-master\userfiles\modules\todo-module-livewire\src\resources\views\livewire\/admin/todo/index.blade.php ENDPATH**/ ?>