
<?php if($plan && $plan->field_status == 1): ?>
<?php
    $data = Helper::get_data();

$heading = $plan->description_1 ;
$title = $plan->name;
?>
<div class="col-md-6 mb-2">
    <div class="mb-3 row align-items-center">
        <label for="staticEmail" class="col-sm-3 col-form-label mb-0 fs-15 text-nowrap">Skirt Length:</label>
        <div class="col-sm-9">
          <input type="number" class="form-control" id="staticEmail" step="0.01">
        </div>
    </div>
</div>
<div class="col-md-6 mb-2">
    <div class="mb-3 row align-items-center">
        <label for="staticEmail" class="col-sm-3 col-form-label mb-0 fs-15 text-nowrap">Cover Color:</label>
        <div class="col-sm-9">
           <select name="cover_color" id="cover_color"  class= "form-select">
            <option value="">Please Select Cover Color</option>
          <?php $__empty_1 = true; $__currentLoopData = $plan->colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
          <option value="<?php echo e($value->id ?? ""); ?>" data-price="<?php echo e($value->price ?? ""); ?>"><?php echo e($value->name ?? ""); ?> <?php echo e((int)$value->price >0 ? "$".$value->price: ""); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

          <?php endif; ?>
           </select>
        </div>
    </div>
</div>
<div class="col-md-6 mb-2">
    <div class="mb-3 row align-items-center">
        <label for="staticEmail" class="col-sm-3 col-form-label mb-0 fs-15 text-nowrap">Cover Taper:</label>
        <div class="col-sm-9">
           <select name="cover_taper" id="cover_taper"  class= "form-select">
            <option value="">Please Select Insulation</option>
            <?php $__empty_1 = true; $__currentLoopData = $data['cover_tapers']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <option value="<?php echo e($value->id ?? ""); ?>" data-price="<?php echo e($value->price ?? ""); ?>"><?php echo e($value->name ?? ""); ?> <?php echo e((int)$value->price >0 ? "$".$value->price: ""); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

            <?php endif; ?>
           </select>
        </div>
    </div>
</div>

<div class="col-md-6 mb-2">
    <div class="mb-3 row align-items-center">
        <label for="staticEmail" class="col-sm-3 col-form-label mb-0 fs-15 text-nowrap">Foam Density:</label>
        <div class="col-sm-9">
           <select name="foam_density" id="foam_density"  class= "form-select">
            <option value="">Please Select Foam Density (Strength)</option>
                <?php $__empty_1 = true; $__currentLoopData = $data['foam_densitys']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <option value="<?php echo e($value->id ?? ""); ?>" data-price="<?php echo e($value->price ?? ""); ?>"><?php echo e($value->name ?? ""); ?> <?php echo e((int)$value->price >0 ? "$".$value->price: ""); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <?php endif; ?>
           </select>
        </div>
    </div>
</div>

<div class="col-md-6 mb-2">
    <div class="mb-3 row align-items-center">
        <label for="staticEmail" class="col-sm-3 col-form-label mb-0 fs-15 text-nowrap">Tie Down:
            </label>
        <div class="col-sm-9">
           <select name="tie_down" id="tie_down"  class= "form-select">
            <option value="" selected>Please Select Tie Down Placement</option>
                <?php $__empty_1 = true; $__currentLoopData = $data['tie_downs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <option value="<?php echo e($value->id ?? ""); ?>" data-price="<?php echo e($value->price ?? ""); ?>"><?php echo e($value->name ?? ""); ?> <?php echo e((int)$value->price >0 ? "$".$value->price: ""); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <?php endif; ?>
           </select>
        </div>
    </div>
</div>
<div class="col-md-6 mb-2">
    <div class="mb-3 row align-items-center">
        <label for="staticEmail" class="col-sm-3 col-form-label mb-0 fs-15 text-nowrap">Vapor Barrier:</label>
        <div class="col-sm-9">
           <select name="vapor_barrier" id="vapor_barrier" required class= "form-select">
            <option value="">Please Select Vapor Barrier </option>
            <?php $__empty_1 = true; $__currentLoopData = $data['vapor_barriers']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <option value="<?php echo e($value->id ?? ""); ?>" data-price="<?php echo e($value->price ?? ""); ?>"><?php echo e($value->name ?? ""); ?> <?php echo e((int)$value->price >0 ? "$".$value->price: ""); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

            <?php endif; ?>
           </select>
        </div>
    </div>
</div>
<div class="col-md-6 mb-2">
    <div class="mb-3 row align-items-center">
        <label for="staticEmail" class="col-sm-3 col-form-label mb-0 fs-15 text-nowrap">Steam Stopper:</label>
        <div class="col-sm-9">
           <select name="steam_stopper" id="steam_stopper"  class= "form-select">
            <option value="">Please Select Steam Stopper</option>
            <?php $__empty_1 = true; $__currentLoopData = $data['steam_stoppers']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <option value="<?php echo e($value->id ?? ""); ?>" data-price="<?php echo e($value->price ?? ""); ?>"><?php echo e($value->name ?? ""); ?> <?php echo e((int)$value->price >0 ? "$".$value->price: ""); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

            <?php endif; ?>
           </select>
        </div>
    </div>
</div>
<div class="col-md-6 mb-2">
    <div class="mb-3 row align-items-center">
        <label for="staticEmail" class="col-sm-3 col-form-label mb-0 fs-15 text-nowrap">Cover Lift:</label>
        <div class="col-sm-9">
           <select name="cover_lift" id="cover_lift"  class= "form-select">
            <option value="">Add a Cover lift</option>
            <?php $__empty_1 = true; $__currentLoopData = $data['cover_lifts']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <option value="<?php echo e($value->id ?? ""); ?>" data-price="<?php echo e($value->price ?? ""); ?>"><?php echo e($value->name ?? ""); ?> <?php echo e((int)$value->price >0 ? "$".$value->price: ""); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

            <?php endif; ?>
           </select>
        </div>
    </div>
</div>
<div class="col-md-6 mb-2">
    <div class="mb-3 row align-items-center">
        <label for="staticEmail" class="col-sm-3 col-form-label mb-0 fs-15 text-nowrap">Cover Cap:</label>
        <div class="col-sm-9">
           <select name="cover_cap" id="cover_cap"  class= "form-select">
            <option value="">Add a Cover Cap</option>
            <?php $__empty_1 = true; $__currentLoopData = $data['cover_caps']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <option value="<?php echo e($value->id ?? ""); ?>" data-price="<?php echo e($value->price ?? ""); ?>"><?php echo e($value->name ?? ""); ?> <?php echo e((int)$value->price >0 ? "$".$value->price: ""); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

            <?php endif; ?>
           </select>
        </div>
    </div>
</div>


<div class="col-md-12 mb-2">
    <div class="mb-3 row align-items-center">
        <label for="staticEmail" class="col-1 col-form-label mb-0 fs-15 text-nowrap">Comment:</label>
        <div class="col-sm-11 ps-4">
          <textarea name="comment" id="comment" cols="10" class="form-control ms-4"></textarea>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="mb-3 row align-items-center">
        <div class="col-1">
            <input type="checkbox" name="agree" class = "form-check" id = "check" required>
        </div>
        <label for="check" class="col-10 col-form-label mb-0 fs-15">Yes, I have read and agree to the <a href="<?php echo e(route('terms')); ?>" class="text-uppercase text-dark">terms and conditions</a>.</label>
    </div>
</div>

<div class="col-10"></div>
<div class="col-2">
    <button type="submit" class="btn btn-warning   text-white  ">Add to Cart</button>
</div>
<?php endif; ?>
<?php /**PATH /var/www/html/atlantis/resources/views/home/includes/inputs.blade.php ENDPATH**/ ?>