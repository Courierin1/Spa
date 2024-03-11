<?php $__env->startSection('title', 'Edit Plan'); ?>

<?php $__env->startSection('css'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <?php if(session()->has('green')): ?>
                <div class="alert alert-success dark alert-dismissible fade show" role="alert"><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-thumbs-up">
                        <path
                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                        </path>
                    </svg>
                    <p><?php echo e(session('green')); ?></p>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"
                        data-bs-original-title="" title=""></button>
                </div>
            <?php endif; ?>
            <div class="col-sm-12 col-xl-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Edit Plan</h5>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo e(url('admin/plan/edit_post')); ?>" class="theme-form mega-form" method="POST"
                                    enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="id" value="<?php echo e(request()->route('id')); ?>">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="col-form-label">Name</label>
                                                <input class="form-control" id="name" name="name" value="<?php echo e($plan->name); ?>"
                                                    type="text" placeholder="Enter Name" data-bs-original-title=""
                                                    title="">

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="col-form-label">Status</label>
                                                <select name="status" class="form-control " id="status">
                                                    <option value="">Select Status</option>
                                                    <option value="1" <?php echo e($plan->status ==1 ? "selected": ""); ?>>Enabled</option>
                                                    <option value="0" <?php echo e($plan->status ==0 ? "selected": ""); ?>>Disabled</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="col-form-label"> Field Status</label>
                                                <select name="field_status" class="form-control " id="field_status">
                                                    <option value="">Select Field Status</option>
                                                    <option value="1" <?php echo e($plan->field_status ==1 ? "selected": ""); ?>>Enabled</option>
                                                    <option value="0" <?php echo e($plan->field_status ==0 ? "selected": ""); ?>>Disabled</option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="col-form-label">Description 1</label>
                                                <textarea name="description_1" id="description_1"  class="form-control"  cols="30" rows="5"><?php echo e($plan->description_1); ?></textarea>

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="col-form-label">Description 2</label>
                                                <textarea name="description_2" id="description_2"  class="form-control"  cols="30" rows="5"><?php echo e($plan->description_2); ?></textarea>

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="col-form-label">Image</label>
                                                <input type="file" name="img" accept="image/*" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="<?php echo e(asset($plan->img ?? "")); ?>" height="100" accept="image/*" alt="">
                                        </div>
                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-success theme" onclick="add_sub_plan()">Add Sub Plan</button>
                                            </div>
                                            <div class="col-md-10">
                                                <label class="col-form-label mb-2"><b>Sub Plan</b></label>
                                            </div>
                                            <div class="col-md-12">
                                                <div id="add_sub_plan_in_this" >
<?php $__empty_1 = true; $__currentLoopData = $plan->bullets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bullet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<div class="row mb-1">
    <div class="col-8"><input class="form-control " type="text" id="ed_bullets_name" required name="ed_bullets_name[<?php echo e($bullet->id); ?>]"  value="<?php echo e($bullet->description); ?>"  placeholder="Enter Sub Plan Name " ></div>
    <div class="col-3">    <input class="form-control" id="ed_bullets_price" required name="ed_bullets_price[<?php echo e($bullet->id); ?>]" value="<?php echo e($bullet->price); ?>"
                type="number" step="00.01" placeholder="Enter price" ></div>
    <div class="col-1"><button type="button" class="btn btn-danger  removesub_plan theme"><i class="fa fa-trash"></i></button></div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

<?php endif; ?>

                                                </div>
                                            </div>
                                             <div class="col-md-2">
                                        <button type="button" class="btn btn-success theme" onclick="add_plan_color()">Add Plan Colors</button>
                                        </div>
                                        <div class="col-md-10">
                                            <label class="col-form-label mb-2"><b>Plan Color</b></label>
                                        </div>
                                            <div class="col-md-12">
                                            <div id="add_plan_color_in_this" >
                                                <?php $__empty_1 = true; $__currentLoopData = $plan->colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <div class="row mb-1">
                                                    <div class="col-3"><input class="form-control " required type="text" id="ed_color_name" name="ed_color_name[<?php echo e($color->id); ?>]" value="<?php echo e($color->name); ?>" placeholder="Enter Color Name " ></div>
                                                    <div class="col-3"><input class="form-control " type="file" id="ed_color_img" name="ed_color_img[<?php echo e($color->id); ?>]"  ></div>
                                                    <div class="col-3"><img src="<?php echo e(asset($color->img ?? "")); ?>"  height="50" accept="image/*" alt=""></div>
                                                    <div class="col-2">    <input class="form-control" id="ed_bullets_price" required name="ed_color_price[<?php echo e($color->id); ?>]" value="<?php echo e($color->price); ?>" value="0.00"
                                                                type="number" step="00.01" placeholder="Enter price" ></div>
                                                    <div class="col-1"><button type="button" class="btn btn-danger removeplan_color theme"><i class="fa fa-trash"></i></button></div>
                                                </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                                <?php endif; ?>

                                            </div>
                                        </div>
                                    </div>


                                    <input type="submit" class="btn btn-primary text-end mt-2" style="float: right"
                                    value="Edit" data-bs-original-title="" title="">

                                    </div>
                                </div>




                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/atlantis/resources/views/admin/pages/plan/edit.blade.php ENDPATH**/ ?>