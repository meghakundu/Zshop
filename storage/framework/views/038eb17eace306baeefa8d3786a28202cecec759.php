<div class="page-wrapper">
    <div class="checkout shopping">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="block billing-details">
                        <h4 class="widget-title">Billing Details</h4>
                        <form class="checkout-form">
                            <div class="form-group">
                                <label for="full_name">Full Name</label>
                                <input type="text" class="form-control" id="full_name" disabled
                                    value="<?php echo e(auth()->user()->full_name); ?>" required placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="user_address">Default Address</label>
                                <input type="text" class="form-control" wire:model="address"
                                    value="<?php echo e(auth()->user()->default_shipping_address); ?>" id="user_address"
                                    placeholder="">
                            </div>
                            <div class="checkout-country-code clearfix">
                                <div class="form-group">
                                    <label for="user_post_code">Zip Code</label>
                                    <input type="text" class="form-control" wire:model="zip_code" value=""
                                        id="user_post_code" name="zipcode" value="">
                                </div>
                                <div class="form-group">
                                    <label for="user_city">City</label>
                                    <input type="text" class="form-control" wire:model="city" id="user_city" name="city"
                                        value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="user_country">Country</label>
                                <input type="text" class="form-control" disabled value="<?php echo e(auth()->user()->country); ?>"
                                    id="user_country" placeholder="">
                            </div>
                        </form>
                    </div>
                    <div class="block">
                        <h4 class="widget-title">Payment Method</h4>
                        <p>Credit Cart Details (Secure payment)</p>
                        <div class="checkout-product-details">
                            <div class="payment">
                                <div class="card-details">
                                    <form class="checkout-form" wire:submit.prevent="place_order">
                                        <div class="form-group">
                                            <label for="card-number">Card Number <span class="required">*</span></label>
                                            <input id="card-number" class="form-control" wire:model="card_number"
                                                name="card_number" type="tel" placeholder="•••• •••• •••• ••••">
                                            <?php $__errorArgs = ['card_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <?php echo e($message); ?>

                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="form-group half-width padding-right">
                                            <label for="card-expiry">Expiry (MM/YY) <span
                                                    class="required">*</span></label>
                                            <input id="card-expiry" class="form-control" wire:model="card_expiry"
                                                name="card_expiry" type="tel" placeholder="MM / YY">
                                            <?php $__errorArgs = ['card_expiry'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <?php echo e($message); ?>

                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="form-group half-width padding-left">
                                            <label for="card-cvc">Card Code <span class="required">*</span></label>
                                            <input id="card-cvc" class="form-control" wire:model="card_cvc"
                                                name="card_cvc" type="tel" maxlength="4" placeholder="CVC">
                                            <?php $__errorArgs = ['card_cvc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <?php echo e($message); ?>

                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <button class="btn btn-main mt-20" type="submit">Place Order</button>
                                        <div class="row">
                                            <div class="col mx-auto">
                                                <?php if(session()->has('message')): ?>
                                                    <div class="alert alert-success">
                                                        <?php echo e(session('message')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-checkout-details">
                        <div class="block">
                            <h4 class="widget-title">Order Summary</h4>
                            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div class="media product-card"
                                    <?php echo e($total_price = $total_price + $product->product->price); ?>>
                                    <a class="pull-left" href="<?php echo e(route('single_product', $product->product->id)); ?>">
                                        <img class="media-object"
                                            src="<?php echo e(config('app.url') . $product->product->thumbnail); ?>" alt="Image" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a
                                                href="product-single.html"><?php echo e($product->product->name); ?></a></h4>
                                        <p class="price">1 x $<?php echo e($product->product->price); ?></p>
                                        <span class="remove"
                                            wire:click="removePrduct(<?php echo e($product->id); ?>)">Remove</span>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <p class="text-warnning">You Don't have any product</p>
                            <?php endif; ?>
                            <?php if($products->count()): ?>
                            <?php endif; ?>
                            <ul class="summary-prices">
                                <li>
                                    <span>Subtotal:</span>
                                    <span class="price">$<?php echo e($total_price ? $total_price : '00.00'); ?></span>
                                </li>
                                <li>
                                    <span>Shipping:</span>
                                    <span>Free</span>
                                </li>
                            </ul>
                            <div class="summary-total">
                                <span>Total</span>
                                <span>$<?php echo e($total_price ? ($amount = $total_price) : '00.00'); ?></span>
                            </div>
                            <div class="verified-icon">
                                <img src="images/shop/verified.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php /**PATH E:\xampp\htdocs\Zshop\resources\views/livewire/checkout.blade.php ENDPATH**/ ?>