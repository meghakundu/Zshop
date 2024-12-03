
<?php $__env->startSection('content'); ?>
    <section class="products section bg-gray">
        <div class="container">
            <div class="row">
                <div class="title text-center">
                    <h2 class="border shadow padding" style="color: green;border-bottom:1px solid lightgreen"> Result for
                        <span style="color: blue; background-color:cyan"><?php echo e($searchedItem); ?></span>
                        (<?php echo e($products->count() . ') Items Found'); ?></h2>
                </div>
            </div>
            <div class="row">

                <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-md-4">
                        <div class="product-item">
                            <div class="product-thumb">
                                <img class="img-responsive" src="<?php echo e(config('app.url') . $product->thumbnail); ?>"
                                    alt="product-img" />
                                <div class="preview-meta">
                                    <ul>
                                        <li>
                                            <a href="<?php echo e(route('show_searched_item_by_name', $product->name)); ?>">
                                                <i class="tf-ion-ios-search-strong"></i>
                                            </a>
                                        </li>
                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('product-menu-like',['kid' => $product->id])->html();
} elseif ($_instance->childHasBeenRendered('3cRvQS5')) {
    $componentId = $_instance->getRenderedChildComponentId('3cRvQS5');
    $componentTag = $_instance->getRenderedChildComponentTagName('3cRvQS5');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('3cRvQS5');
} else {
    $response = \Livewire\Livewire::mount('product-menu-like',['kid' => $product->id]);
    $html = $response->html();
    $_instance->logRenderedChild('3cRvQS5', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('product-menu-cart',['cid' => $product->id])->html();
} elseif ($_instance->childHasBeenRendered('zsGJhJo')) {
    $componentId = $_instance->getRenderedChildComponentId('zsGJhJo');
    $componentTag = $_instance->getRenderedChildComponentTagName('zsGJhJo');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('zsGJhJo');
} else {
    $response = \Livewire\Livewire::mount('product-menu-cart',['cid' => $product->id]);
    $html = $response->html();
    $_instance->logRenderedChild('zsGJhJo', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
            </div>
        </div>
    </section>


    <section class="call-to-action bg-gray section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="title">
                        <h2>SUBSCRIBE TO NEWSLETTER</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, <br> facilis numquam impedit ut
                            sequi. Minus facilis vitae excepturi sit laboriosam.</p>
                    </div>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('subscribe')->html();
} elseif ($_instance->childHasBeenRendered('nWiRB9t')) {
    $componentId = $_instance->getRenderedChildComponentId('nWiRB9t');
    $componentTag = $_instance->getRenderedChildComponentTagName('nWiRB9t');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('nWiRB9t');
} else {
    $response = \Livewire\Livewire::mount('subscribe');
    $html = $response->html();
    $_instance->logRenderedChild('nWiRB9t', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Zshop\resources\views/searchItem.blade.php ENDPATH**/ ?>