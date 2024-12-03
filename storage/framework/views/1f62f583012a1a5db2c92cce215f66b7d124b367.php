<div class="media ">
    <div class="pull-left text-center" href="#!">
        <img class="media-object user-img" src="<?php echo e((auth()->user()->photo ? config('app.url').auth()->user()->photo : 'images/avater.jpg')); ?>" alt="Image">
        <input type="file" name="" wire:model="photo" id="" class="form-control">
        <?php if(session()->has('message')): ?>
        <div class="alert alert-success">
            <?php echo e(session('message')); ?>

        </div>
    <?php endif; ?>
    </div>
    <div class="media-body">
        <ul class="user-profile-list">
            <li><span>Full Name:</span><?php echo e(auth()->user()->full_name); ?></li>
            <li><span>Country:</span><?php echo e(auth()->user()->country); ?></li>
            <li><span>Email:</span><?php echo e(auth()->user()->email); ?></li>
            <li><span>Phone:</span><?php echo e(auth()->user()->phone); ?></li>
            <li><span>Joined on:</span><?php echo e(auth()->user()->created_at->format('D d-M-Y')); ?></li>
        </ul>
    </div>
</div><?php /**PATH E:\xampp\htdocs\Zshop\resources\views/livewire/customer-profile.blade.php ENDPATH**/ ?>