<?php $__env->startSection('title', 'Edit Studio'); ?>

<?php $__env->startSection('css'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('studio-title'); ?>
    <h3>Edit Studio</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('studio-items'); ?>
    <li class="studio-item">Studios</li>
    <li class="studio-item active"> Edit Studio</li>
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
                                <h5>Edit Studio</h5>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo e(url('admin/studio/edit_post')); ?>" class="theme-form mega-form" method="POST"
                                    enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="col-form-label">Name</label>
                                                <input class="form-control" id="name" name="name" value="<?php echo e($studio->name ?? ""); ?>"
                                                    type="text" placeholder="Enter Studio Name" data-bs-original-title=""
                                                    title="">

                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="col-form-label"> Category</label>
                                                <select name="category_id" class="form-control " id="category_id">
                                                    <option value="">Select Category</option>
                                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($category->id); ?>" <?php echo e($studio->category_id == $category->id ? "selected" : ""); ?>><?php echo e($category->name); ?></option>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="col-form-label">Description</label>
                                                <textarea name="description" id="description"  class="form-control"  cols="30" rows="10"><?php echo e($studio->description ?? ""); ?></textarea>

                                            </div>
                                        </div>

                                        <input type="hidden" name="id" value="<?php echo e(request()->route('id')); ?>">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="col-form-label">Image</label>
                                                <input type="file" name="img" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="<?php echo e(asset($studio->img ?? "")); ?>" height="160" accept="image/*" alt="">
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="col-form-label">Slider Images</label>
                                                <input type="file" name="slide[]" class="form-control" accept="image/*" multiple>
                                            </div>
                                        </div>
                                        
                                        <?php if(isset($studio->slider)): ?>
                                        <?php $__currentLoopData = $studio->slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-md-1">
                                            <a
                                            href="<?php echo e(url('admin/studio/slide_delete/' . \Crypt::encrypt($slider->id))); ?>"
                                            type="button" title="" data-bs-original-title=""><i class="fa fa-trash"></i></a>
                                            <img src="<?php echo e(asset($slider->img ?? "")); ?>" height="50" class="p-1" alt="">
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>

                                    </div>


 <input type="submit" class="btn btn-primary text-end mt-2" style="float: right"
                                        value="Edit" data-bs-original-title="" title="">
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


<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/brewery/resources/views/admin/pages/studio/edit.blade.php ENDPATH**/ ?>