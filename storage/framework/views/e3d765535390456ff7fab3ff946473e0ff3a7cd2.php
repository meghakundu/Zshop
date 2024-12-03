<div class="col-lg-6 col-md-offset-3">
    <?php if(session()->has('message')): ?>
        <div class="alert alert-success">
            <?php echo e(session('message')); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <form wire:submit.prevent="add_subscriber" class="input-group subscription-form">
        <input type="email" autocomplete="email" name="email" class="form-control" wire:model="email"
            placeholder="Enter Your Email Address">
        <span class="input-group-btn">
            <button class="btn btn-main" type="submit">Subscribe Now!</button>
        </span>
        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </form><!-- /input-group -->
</div><!-- /.col-lg-6 -->
<?php /**PATH E:\xampp\htdocs\Zshop\resources\views/livewire/subscribe.blade.php ENDPATH**/ ?>