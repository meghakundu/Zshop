<?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="col-md-4">
        <div class="product-item">
            <div class="product-thumb">
                <img class="img-responsive" src="<?php echo e(config('app.url').$product->thumbnail); ?>" alt="product-img" />
                <div class="preview-meta">
                    <ul>
                        <li>
                            <a href="<?php echo e(route('show_searched_item_by_name', $product->name)); ?>">
                                <i class="tf-ion-ios-search-strong"></i>
                            </a>
                        </li>
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('product-menu-like', ['kid' =>$product->id ])->html();
} elseif ($_instance->childHasBeenRendered('ebUP854')) {
    $componentId = $_instance->getRenderedChildComponentId('ebUP854');
    $componentTag = $_instance->getRenderedChildComponentTagName('ebUP854');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ebUP854');
} else {
    $response = \Livewire\Livewire::mount('product-menu-like', ['kid' =>$product->id ]);
    $html = $response->html();
    $_instance->logRenderedChild('ebUP854', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('product-menu-cart', ['cid' =>$product->id ])->html();
} elseif ($_instance->childHasBeenRendered('00VNIYi')) {
    $componentId = $_instance->getRenderedChildComponentId('00VNIYi');
    $componentTag = $_instance->getRenderedChildComponentTagName('00VNIYi');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('00VNIYi');
} else {
    $response = \Livewire\Livewire::mount('product-menu-cart', ['cid' =>$product->id ]);
    $html = $response->html();
    $_instance->logRenderedChild('00VNIYi', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </ul>
                </div>
            </div>
            <div class="product-content">
                <h4><a href="<?php echo e(route('single_product', $product->id)); ?>"><?php echo e($product->name); ?></a></h4>
                <p class="price">$<?php echo e($product->price); ?></p>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <h1><?php echo e(__('no product found!')); ?></h1>
<?php endif; ?>
<?php /**PATH E:\xampp\htdocs\Zshop\resources\views/livewire/products.blade.php ENDPATH**/ ?>