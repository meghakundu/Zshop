
<?php $__env->startSection('content'); ?>

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="page-name">Shop</h1>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                            <li class="active">shop</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="products section">
        <div class="container">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('products')->html();
} elseif ($_instance->childHasBeenRendered('MqmuDWH')) {
    $componentId = $_instance->getRenderedChildComponentId('MqmuDWH');
    $componentTag = $_instance->getRenderedChildComponentTagName('MqmuDWH');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('MqmuDWH');
} else {
    $response = \Livewire\Livewire::mount('products');
    $html = $response->html();
    $_instance->logRenderedChild('MqmuDWH', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </section>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Zshop\resources\views/shop.blade.php ENDPATH**/ ?>