<?php $__env->startSection('title', 'Add Plan'); ?>

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
                                <h5>Add Plan</h5>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo e(url('admin/plan/add_post')); ?>" class="theme-form mega-form" method="POST"
                                    enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="col-form-label">Name</label>
                                                <input class="form-control" id="name" name="name" value=""
                                                    type="text" placeholder="Enter Name" data-bs-original-title=""
                                                    title="">

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="col-form-label">Status</label>
                                                <select name="status" class="form-control " id="status">
                                                    <option value="">Select Status</option>
                                                    <option value="1">Enabled</option>
                                                    <option value="0">Disabled</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="col-form-label">All Field Status</label>
                                                <select name="field_status" class="form-control " id="field_status">
                                                    <option value="">Select Status</option>
                                                    <option value="1">Enabled</option>
                                                    <option value="0">Disabled</option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="col-form-label">Description 1</label>
                                                <textarea name="description_1" id="description_1"  class="form-control"  cols="30" rows="5"></textarea>

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="col-form-label">Description 2</label>
                                                <textarea name="description_2" id="description_2"  class="form-control"  cols="30" rows="5"></textarea>

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="col-form-label">Image</label>
                                                <input type="file" name="img" accept="image/*" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-success theme" onclick="add_sub_plan()">Add Sub Plan</button>
                                            </div>
                                            <div class="col-md-10">
                                                <label class="col-form-label mb-2"><b>Sub Plan</b></label>
                                            </div>
                                            <div class="col-md-12">
                                                <div id="add_sub_plan_in_this" >


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


                                            </div>
                                        </div>
                                    </div>


                                    <input type="submit" class="btn btn-primary text-end mt-2" style="float: right"
                                    value="Add" data-bs-original-title="" title="">

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


<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/atlantis/resources/views/admin/pages/plan/add.blade.php ENDPATH**/ ?>