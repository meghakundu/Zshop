
<?php $__env->startSection('content'); ?>

<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <h1 class="page-name">Checkout</h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                        <li class="active"><?php echo e(__("checkout")); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('checkout')->html();
} elseif ($_instance->childHasBeenRendered('qxszQN2')) {
    $componentId = $_instance->getRenderedChildComponentId('qxszQN2');
    $componentTag = $_instance->getRenderedChildComponentTagName('qxszQN2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('qxszQN2');
} else {
    $response = \Livewire\Livewire::mount('checkout');
    $html = $response->html();
    $_instance->logRenderedChild('qxszQN2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Zshop\resources\views/checkout.blade.php ENDPATH**/ ?>