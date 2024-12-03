<?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="media" <?php echo e($total_price = $total_price + $product->product->price); ?>>
        <a class="pull-left" href="">
            <img class="media-object" src="<?php echo e(config('app.url') . $product->product->thumbnail); ?>" alt="image" />
        </a>
        <div class="media-body">
            <h4 class="media-heading"><a
                    href="<?php echo e(route('show_searched_item_by_name', $product->product->name)); ?>"><?php echo e($product->product->name); ?></a>
            </h4>
            <div class="cart-price">
                <span>1 x</span>
                <span><?php echo e($product->product->price); ?>.00</span>
            </div>
            <h5><strong>$<?php echo e($product->product->price); ?></strong></h5>
        </div>
        <span wire:click="delete(<?php echo e($product->id); ?>)" class="remove"><i
                class="tf-ion-close"></i></span>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <p class="text-info">No Product Found!</p>
<?php endif; ?>
<div class="cart-summary">
    <span>Total</span>
    <span class="total-price">$<?php echo e($total_price ? $total_price : '00'); ?>.00</span>
</div>
<?php /**PATH E:\xampp\htdocs\Zshop\resources\views/livewire/menu-cart.blade.php ENDPATH**/ ?>