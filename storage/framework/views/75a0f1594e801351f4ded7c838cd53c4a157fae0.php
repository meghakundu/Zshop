
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="page-name">Cart</h1>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                            <li class="active">cart</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="page-wrapper">
        <div class="cart shopping">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="block">
                            <div class="product-list">
                                <form method="post">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th class="">Item Name</th>
                                            <th class="">Item Price</th>
                                            <th class="">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <!--<?php echo e($total = $total+$product->product->price); ?>-->
                                            <tr class="" >
                                                <td class="">
                                                    <div class="product-info">
                                                        <img width="80" src="<?php echo e(config('app.url') . $product->product->thumbnail); ?>" alt="" />
                                                        <a href="<?php echo e(route('show_searched_item_by_name',$product->product->name)); ?>"><?php echo e($product->product->name); ?></a>
                                                    </div>
                                                </td>
                                                <td class="">$<?php echo e($product->product->price ? $product->product->price : '00'); ?>.00</td>
                                                <td class="">
                                                    <button type="button" class="btn product-remove" wire:click="delete(<?php echo e($product->id); ?>)" style="cursor: pointer">Remove</button>
                                                </td>
                                            </tr>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <tr>
                                                    <td class="text-danger"> null </td>
                                                    <td  class="text-danger"> null </td>
                                                    <td  class="text-danger"> null </td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                    <hr>
                                    <div class="cart-total">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="subtotal">
                                                    <div class="title">Subtotal</div>
                                                    <div class="price" wire:model="total">$<?php echo e($total ? $total : '00'); ?>.00</div>
                                                </div>
                                                <div class="subtotal">
                                                    <div class="title">Shipping</div>
                                                    <div class="price">$00.10</div>
                                                </div>
                                                <div class="subtotal">
                                                    <div class="title">Tax</div>
                                                    <div class="price">$00.40</div>
                                                </div>
                                                <div class="subtotal">
                                                    <div class="title">Discount</div>
                                                    <div class="price">$00.55</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="total">
                                                    <div class="title">Total</div>
                                                    <div class="price">$<?php echo e($total ? $total : '00'); ?>.00</div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    <a href="<?php echo e(route('checkout')); ?>" class="btn btn-main pull-right " <?php if($products->count() <= 0): ?> disabled="" <?php endif; ?> >Checkout</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php /**PATH E:\xampp\htdocs\Zshop\resources\views/livewire/cart.blade.php ENDPATH**/ ?>