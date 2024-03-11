<?php if($plan && $plan->colors): ?>
<div class = "d-md-flex justify-content-between my-4 column3">
<?php $__empty_1 = true; $__currentLoopData = $plan->colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<div class = "woods">
        <label class="text-center" for="woods-color-<?php echo e($color->id); ?>">
            <img src="<?php echo e(asset($color->img ?? "")); ?>" alt="" class = "img-fluid">
            <p class = "text-center fw-bold mb-0"><?php echo e($color->name); ?> </p>
            <?php if($color->price>0): ?>
            <small class="text-sky fs-13">$<?php echo e($color->price); ?></small>

            <?php endif; ?>
        </label>
        <input type="radio" id="woods-color-<?php echo e($color->id); ?>" class="d-none">
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

<?php endif; ?>

</div>
<?php endif; ?>
<?php /**PATH /var/www/html/atlantis/resources/views/home/includes/wood.blade.php ENDPATH**/ ?>