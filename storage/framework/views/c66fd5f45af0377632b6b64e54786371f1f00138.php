
<?php $__env->startSection('content'); ?>

    <section class="user-dashboard page-wrapper">
        <div class="container">
            <div class="row">
                <?php echo $__env->make('user_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user-dashboard.orders')->html();
} elseif ($_instance->childHasBeenRendered('a8SWu1s')) {
    $componentId = $_instance->getRenderedChildComponentId('a8SWu1s');
    $componentTag = $_instance->getRenderedChildComponentTagName('a8SWu1s');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('a8SWu1s');
} else {
    $response = \Livewire\Livewire::mount('user-dashboard.orders');
    $html = $response->html();
    $_instance->logRenderedChild('a8SWu1s', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Zshop\resources\views/orders.blade.php ENDPATH**/ ?>