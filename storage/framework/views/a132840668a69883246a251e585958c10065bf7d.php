
<?php $__env->startSection('content'); ?>
    <section class="products section bg-gray">
        <div class="container">
            <div class="row">
                <div class="title text-center">
                    <h2 class="border shadow padding" style="color: green;border-bottom:1px solid lightgreen"> Result for
                        <span style="color: blue; background-color:cyan"><?php echo e($category->name); ?></span>
                        (<?php echo e($category->products->count() . ') Items Found'); ?></h2>
                </div>
            </div>
            <div class="row">

                <?php $__empty_1 = true; $__currentLoopData = $category->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
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
    $html = \Livewire\Livewire::mount('product-menu-like', ['kid' => $product->id])->html();
} elseif ($_instance->childHasBeenRendered('cMzt9xx')) {
    $componentId = $_instance->getRenderedChildComponentId('cMzt9xx');
    $componentTag = $_instance->getRenderedChildComponentTagName('cMzt9xx');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('cMzt9xx');
} else {
    $response = \Livewire\Livewire::mount('product-menu-like', ['kid' => $product->id]);
    $html = $response->html();
    $_instance->logRenderedChild('cMzt9xx', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                       <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('product-menu-cart', ['cid' => $product->id])->html();
} elseif ($_instance->childHasBeenRendered('ysa1kOc')) {
    $componentId = $_instance->getRenderedChildComponentId('ysa1kOc');
    $componentTag = $_instance->getRenderedChildComponentTagName('ysa1kOc');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ysa1kOc');
} else {
    $response = \Livewire\Livewire::mount('product-menu-cart', ['cid' => $product->id]);
    $html = $response->html();
    $_instance->logRenderedChild('ysa1kOc', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
} elseif ($_instance->childHasBeenRendered('TdH1RqX')) {
    $componentId = $_instance->getRenderedChildComponentId('TdH1RqX');
    $componentTag = $_instance->getRenderedChildComponentTagName('TdH1RqX');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('TdH1RqX');
} else {
    $response = \Livewire\Livewire::mount('subscribe');
    $html = $response->html();
    $_instance->logRenderedChild('TdH1RqX', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Zshop\resources\views/search.blade.php ENDPATH**/ ?>