<div class="row">
    <div class="col-md-12">
        <div class="dashboard-wrapper user-dashboard">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Date</th>
                        <th>Items</th>
                        <th>Total Price</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td>#<?php echo e($product->id); ?></td>
                        <td><?php echo e($product->created_at->format('M d, Y')); ?></td>
                        <td>1</td>
                        <td>$<?php echo e($product->amount ? $product->amount : '00'); ?>.00</td>
                        <td><span class="label label-primary"><?php echo e($product->order_status); ?></span></td>
                        <td><a href="<?php echo e(route('single_product',$product->id)); ?>" class="btn btn-default">View</a></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                     <h2>No Product Found!!</h2>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div><?php /**PATH E:\xampp\htdocs\Zshop\resources\views/livewire/user-dashboard/orders.blade.php ENDPATH**/ ?>