<?php $__env->startSection('title', 'Add Employee'); ?>

<?php $__env->startSection('css'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('employee-title'); ?>
    <h3>Add Employee</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('employee-items'); ?>
    <li class="employee-item">Employees</li>
    <li class="employee-item active"> Add Employee</li>
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
                                <h5>Add Employee</h5>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo e(url('admin/employee/add_post')); ?>" class="theme-form mega-form" method="POST"
                                    enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="col-form-label">Full Name</label>
                                                <input class="form-control" id="name" name="name" value=""
                                                    type="text" placeholder="Enter Name" data-bs-original-title=""
                                                    title="">

                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="col-form-label"> Category</label>
                                                <select name="category_id" class="form-control " id="category_id">
                                                    <option value="">Select Category</option>
                                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="col-form-label">Client</label>
                                                <textarea name="clients" id="clients"  class="form-control"  cols="30" rows="10"></textarea>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="col-form-label">Description</label>
                                                <textarea name="description" id="description"  class="form-control"  cols="30" rows="10"></textarea>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="col-form-label">link</label>
                                                <input class="form-control" id="link" name="link" value=""
                                                    type="text" placeholder="Enter Link" data-bs-original-title=""
                                                    title="">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="col-form-label">Designation</label>
                                                <input class="form-control" id="designation" name="designation" value=""
                                                    type="text" placeholder="Enter Designation" data-bs-original-title=""
                                                    title="">

                                            </div>
                                        </div>




                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="col-form-label">Image</label>
                                            <input type="file" name="image" class="form-control" >
                                        </div>
                                    </div>
 <input type="submit" class="btn btn-primary text-end mt-2" style="float: right"
                                        value="Add" data-bs-original-title="" title="">
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


<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/brewery/resources/views/admin/pages/employee/add.blade.php ENDPATH**/ ?>