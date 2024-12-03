
<?php $__env->startSection('content'); ?>

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="page-name"><?php echo e(__("Frequently Asked Questions")); ?></h1>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                            <li class="active">F.A.Q's</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2><?php echo e(__("Frequently Asked Questions")); ?></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, repudiandae.</p>
                    <p><?php echo e(env('MY_EMAIL')); ?></p>
                </div>
                <div class="col-md-8">
                    <?php $__empty_1 = true; $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <h4><i><?php echo e($faq->question); ?> ?</i></h4>
                        <p><?php echo e($faq->answer); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <h1><?php echo e(__("no FAQ yet")); ?>!</h1>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Zshop\resources\views/faq.blade.php ENDPATH**/ ?>