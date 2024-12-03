
<?php $__env->startSection('content'); ?>
    <h1 class="text-center bg-info py-4 shadow rounded">About Us</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <p><?php echo $data->content; ?></p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Zshop\resources\views/about.blade.php ENDPATH**/ ?>