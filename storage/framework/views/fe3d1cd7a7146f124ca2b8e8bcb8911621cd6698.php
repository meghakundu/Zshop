
<?php $__env->startSection('content'); ?>

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cart')->html();
} elseif ($_instance->childHasBeenRendered('5JMU2tk')) {
    $componentId = $_instance->getRenderedChildComponentId('5JMU2tk');
    $componentTag = $_instance->getRenderedChildComponentTagName('5JMU2tk');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('5JMU2tk');
} else {
    $response = \Livewire\Livewire::mount('cart');
    $html = $response->html();
    $_instance->logRenderedChild('5JMU2tk', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Zshop\resources\views/cart.blade.php ENDPATH**/ ?>