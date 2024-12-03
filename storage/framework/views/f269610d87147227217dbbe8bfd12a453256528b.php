
<?php $__env->startSection('content'); ?>

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                            <li class="active"><?php echo e($product->name); ?></li>
                        </ol>
                        <h1 class="page-name"><?php echo e($product->name); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="post post-single">
                        <div class="post-thumb">
                            <img class="img-responsive" src="<?php echo e(config('app.url') . $product->thumbnail); ?>" alt="">
                        </div>
                        <br>
                        <h2 class="post-title">Details</h2>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <th></th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Product Category</td>
                                        <td><a
                                                href="<?php echo e(route('show_searched_item_by_category', $product->category_id)); ?>"><?php echo e($product->category->name); ?></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Price</td>
                                        <td>$<?php echo e($product->price); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Product Created Date</td>
                                        <td><?php echo e($product->created_at->format('D-d-M-Y')); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Likes</td>
                                        <td><?php echo e(App\Models\likes::where('product_id', $product->id)->count()); ?> Peoples
                                            Likes This</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="post-content post-excerpt">
                            <p><?php echo e($product->description); ?></p>
                            <div class="post-thumb">
                                <img class="img-responsive" src="<?php echo e(config('app.url') . $product->image); ?>" alt="">
                            </div>
                            <br>
                          </div>
                        <div class="post-social-share">
                            <h3 class="post-sub-heading">Share this post</h3>
                            <div class="social-media-icons">
                                <ul>
                                    <li><a class="facebook" href="<?php echo e(env('MY_FACEBOOK')); ?>"><i
                                                class="tf-ion-social-facebook"></i></a></li>
                                    <li><a class="twitter" href="<?php echo e(env('MY_TWITTER')); ?>"><i
                                                class="tf-ion-social-twitter"></i></a></li>
                                    <li><a class="instagram" href="<?php echo e(env('MY_INSTA')); ?>"><i
                                                class="tf-ion-social-instagram"></i></a></li>
                                    <li><a class="googleplus" href="<?php echo e(env('MY_GOOGLEPLUS')); ?>"><i
                                                class="tf-ion-social-googleplus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
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
} elseif ($_instance->childHasBeenRendered('tIvrEAr')) {
    $componentId = $_instance->getRenderedChildComponentId('tIvrEAr');
    $componentTag = $_instance->getRenderedChildComponentTagName('tIvrEAr');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('tIvrEAr');
} else {
    $response = \Livewire\Livewire::mount('subscribe');
    $html = $response->html();
    $_instance->logRenderedChild('tIvrEAr', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Zshop\resources\views/show_single_product.blade.php ENDPATH**/ ?>