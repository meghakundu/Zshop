
<?php $__env->startSection('content'); ?>

<section class="user-dashboard  page-wrapper">
    <div class="container">
        <div class="row">
            <?php echo $__env->make('user_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="row">
            <div class="col-md-12  ">
                <div class="dashboard-wrapper  dashboard-user-profile shadow-lg rounded">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('customer-profile')->html();
} elseif ($_instance->childHasBeenRendered('PpBVUqG')) {
    $componentId = $_instance->getRenderedChildComponentId('PpBVUqG');
    $componentTag = $_instance->getRenderedChildComponentTagName('PpBVUqG');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('PpBVUqG');
} else {
    $response = \Livewire\Livewire::mount('customer-profile');
    $html = $response->html();
    $_instance->logRenderedChild('PpBVUqG', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
            </div>
        </div>
    </div>
</section>    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Zshop\resources\views/profile.blade.php ENDPATH**/ ?>