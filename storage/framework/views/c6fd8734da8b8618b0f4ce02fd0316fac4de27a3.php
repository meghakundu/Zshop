<?php $__empty_1 = true; $__currentLoopData = $trendeProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trende): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="col-md-4">
        <div class="product-item">
            <div class="product-thumb">
                <img class="img-responsive" src="<?php echo e(config('app.url') . $trende->product->thumbnail); ?>" alt="product-img" />
                <div class="preview-meta">
                    <ul>
                        <li>
                            <a href="<?php echo e(route('show_searched_item_by_name', $trende->product->name)); ?>">
                                <i class="tf-ion-ios-search-strong"></i>
                            </a>
                        </li>
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('product-menu-like', ['kid' =>$trende->product_id ])->html();
} elseif ($_instance->childHasBeenRendered('NzUwH85')) {
    $componentId = $_instance->getRenderedChildComponentId('NzUwH85');
    $componentTag = $_instance->getRenderedChildComponentTagName('NzUwH85');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('NzUwH85');
} else {
    $response = \Livewire\Livewire::mount('product-menu-like', ['kid' =>$trende->product_id ]);
    $html = $response->html();
    $_instance->logRenderedChild('NzUwH85', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('product-menu-cart', ['cid' =>$trende->product_id ])->html();
} elseif ($_instance->childHasBeenRendered('0sGy1kO')) {
    $componentId = $_instance->getRenderedChildComponentId('0sGy1kO');
    $componentTag = $_instance->getRenderedChildComponentTagName('0sGy1kO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('0sGy1kO');
} else {
    $response = \Livewire\Livewire::mount('product-menu-cart', ['cid' =>$trende->product_id ]);
    $html = $response->html();
    $_instance->logRenderedChild('0sGy1kO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </ul>
                </div>
            </div>
            <div class="product-content">
                <h4><a href="<?php echo e(route('single_product', $trende->product_id)); ?>"><?php echo e($trende->product->name); ?></a></h4>
                <p class="price">$<?php echo e($trende->product->price); ?></p>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <h1><?php echo e(__('no product found!')); ?></h1>
<?php endif; ?>
<?php /**PATH E:\xampp\htdocs\Zshop\resources\views/livewire/trende-products.blade.php ENDPATH**/ ?>