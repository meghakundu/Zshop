<div class="contact-form col-md-6 ">
    <?php if(session()->has('success')): ?>
        <div id="mail-success" class="alert alert-success">
            <p class="text-primary text-capitalize"><?php echo e(__("Thank you For Contacting us")); ?>. </p>
        </div>

    <?php endif; ?>
    <form id="contact-form" wire:submit.prevent="add_contact_us_request" role="form">

        <div class="form-group">
            <input type="text" placeholder="Your Name" class="form-control" wire:model.lazy="name" name="name"
                id="name">

            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div id="" class="text-danger">
                    <?php echo e($message); ?>

                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="form-group">
            <input type="email" placeholder="Your Email" class="form-control" name="email" wire:model.lazy="email"
                id="email">

            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div id="" class="text-danger">
                    <?php echo e($message); ?>

                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="form-group">
            <input type="text" placeholder="Subject" class="form-control" wire:model.lazy="subject" name="subject"
                id="subject">

            <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div id="" class="text-danger">
                    <?php echo e($message); ?>

                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="form-group">
            <textarea rows="6" placeholder="Message" class="form-control" wire:model.lazy="message" name="message"
                id="message"></textarea>

            <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div id="" class="text-danger">
                    <?php echo e($message); ?>

                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>




        <div id="cf-submit">
            <input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
        </div>

    </form>
</div>
<?php /**PATH E:\xampp\htdocs\Zshop\resources\views/livewire/contact-us.blade.php ENDPATH**/ ?>