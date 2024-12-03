
<?php $__env->startSection('content'); ?>
    <section class="page-wrapper">
        <div class="contact-section">
            <div class="container">
                <div class="row">
                    <!-- Contact Form -->
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('contact-us')->html();
} elseif ($_instance->childHasBeenRendered('RxatDqr')) {
    $componentId = $_instance->getRenderedChildComponentId('RxatDqr');
    $componentTag = $_instance->getRenderedChildComponentTagName('RxatDqr');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('RxatDqr');
} else {
    $response = \Livewire\Livewire::mount('contact-us');
    $html = $response->html();
    $_instance->logRenderedChild('RxatDqr', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    <!-- ./End Contact Form -->
                    <!-- Contact Details -->
                    <div class="contact-details col-md-6 ">
                        <div class="google-map">
                            <div id="map"></div>
                        </div>
                        <ul class="contact-short-info">
                            <li>
                                <i class="tf-ion-ios-home"></i>
                                <span><?php echo e(env('MY_ADDRESS')); ?></span>
                            </li>
                            <li>
                                <i class="tf-ion-android-phone-portrait"></i>
                                <span>Phone: <?php echo e(env('MY_PHONE_NUMBER')); ?></span>
                            </li>
                            <li>
                                <i class="tf-ion-android-globe"></i>
                                <span>Fax: <?php echo e(env('MY_FAX')); ?></span>
                            </li>
                            <li>
                                <i class="tf-ion-android-mail"></i>
                                <span>Email: <?php echo e(env('MY_EMAIL')); ?></span>
                            </li>
                        </ul>
                        <!-- Footer Social Links -->
                        <div class="social-icon">
                            <ul>
                                <li><a class="fb-icon" href="<?php echo e(env('MY_FACEBOOK')); ?>"><i
                                            class="tf-ion-social-facebook"></i></a></li>
                                <li><a href="<?php echo e(env('MY_TWITTER')); ?>"><i class="tf-ion-social-twitter"></i></a>
                                </li>
                                <li><a href="<?php echo e(env('MY_GOOGLEPLUS')); ?>"><i class="tf-ion-social-googleplus-outline"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!--/. End Footer Social Links -->
                    </div>
                    <!-- / End Contact Details -->



                </div> <!-- end row -->
            </div> <!-- end container -->
        </div>
    </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Zshop\resources\views/contact_us.blade.php ENDPATH**/ ?>