<?php $__env->startSection('title', 'Page Title'); ?>
<?php $__env->startSection('css'); ?>
<style>

</style>
<?php $__env->stopSection(); ?>
<?php
    $id =request()->route('id');
?>
<?php $__env->startSection('content'); ?>

<section id="category" class = "my-5">
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 py-3">
                    <h2 class = "h2 font-play">To Continue</h2>
                    <p class = "p text-dark font-poppins fw-light">Please click on the shape that best matches your spa shape!</p>
                </div>
               <div class = 'col-md-12' id="shapes">
                    <div class="row align-items-center py-5">
                        <div class="col-md-2 ">
                            <a href="<?php echo e(route('square_rounded_corners',$id)); ?>" class="d-flex flex-column justify-content-between align-items-center">
                                <div>
                                    <img src="<?php echo e(asset('home/images/shapes/1.png')); ?>" alt="" class="img-fluid">
                                </div>
                                <p class = "fs-18 text-center fw-bold">Square Rounded Corners</p>
                            </a>
                        </div>
                        <div class="col-md-2 ">
                           <a href="<?php echo e(route('rectangle_rounded_corners',$id)); ?>" class="d-flex flex-column justify-content-between align-items-center">
                            <div>
                                <img src="<?php echo e(asset('home/images/shapes/2.png')); ?>" alt="" class="img-fluid">
                            </div>
                            <p class = "fs-18 text-center fw-bold">Rectangle Rounded Corners</p>
                           </a>
                        </div>
                        <div class="col-md-2 ">
                           <a href="<?php echo e(route('square',$id)); ?>" class="d-flex flex-column justify-content-between align-items-center">
                            <div>
                                <img src="<?php echo e(asset('home/images/shapes/3.png')); ?>" alt="" class="img-fluid">
                            </div>
                            <p class = "fs-18 text-center fw-bold">Square</p>
                           </a>
                        </div>
                        <div class="col-md-2 ">
                            <a href="<?php echo e(route('rectangle',$id)); ?>" class="d-flex flex-column justify-content-between align-items-center">
                                <div>
                                    <img src="<?php echo e(asset('home/images/shapes/4.png')); ?>" alt="" class="img-fluid">
                                </div>
                                <p class = "fs-18 text-center fw-bold">Rectangle</p>
                            </a>
                        </div>
                        <div class="col-md-2 d-flex flex-column justify-content-between align-items-center">
                            <a href="<?php echo e(route('circle',$id)); ?>" class="d-flex flex-column justify-content-between align-items-center">
                                <div>
                                    <img src="<?php echo e(asset('home/images/shapes/5.png')); ?>" alt="" class="img-fluid">
                                </div>
                                <p class = "fs-18 text-center fw-bold">Circle</p>
                            </a>
                        </div>
                        <div class="col-md-2 ">
                           <a href="<?php echo e(route('square_cut_corners',$id)); ?>" class="d-flex flex-column justify-content-between align-items-center">
                            <div>
                                <img src="<?php echo e(asset('home/images/shapes/6.png')); ?>" alt="" class="img-fluid">
                            </div>
                            <p class = "fs-18 text-center fw-bold">Square Cut Corners</p>
                           </a>
                        </div>
                        <div class="col-md-2 ">
                            <a href="<?php echo e(route('rectangular_cut_corner',$id)); ?>" class="d-flex flex-column justify-content-between align-items-center">
                                <div>
                                    <img src="<?php echo e(asset('home/images/shapes/7.png')); ?>" alt="" class="" style="max-width: 100%;">
                                </div>
                                <p class = "fs-18 text-center fw-bold">Rectangle Cut Corners</p>
                            </a>
                        </div>
                        <div class="col-md-2 d-flex flex-column justify-content-between align-items-center">
                           <a href="<?php echo e(route('octagon',$id)); ?>">
                            <div>
                                <img src="<?php echo e(asset('home/images/shapes/8.png')); ?>" alt="" class="img-fluid">
                            </div>
                            <p class = "fs-18 text-center fw-bold">Octagon</p>
                           </a>
                        </div>
                        <div class="col-md-2 d-flex flex-column justify-content-between align-items-center">
                           <a href="<?php echo e(route('hexagon',$id)); ?>">
                            <div>
                                <img src="<?php echo e(asset('home/images/shapes/9.png')); ?>" alt="" class="img-fluid">
                            </div>
                            <p class = "fs-18 text-center fw-bold">Hexagon</p>
                           </a>
                        </div>
                        <div class="col-md-2 d-flex flex-column justify-content-between align-items-center">
                           <a href="<?php echo e(route('ellipse',$id)); ?>">
                            <div>
                                <img src="<?php echo e(asset('home/images/shapes/10.png')); ?>" alt="" class="img-fluid">
                            </div>
                            <p class = "fs-18 text-center fw-bold">Ellipse</p>
                           </a>
                        </div>
                        <div class="col-md-2 d-flex flex-column justify-content-between align-items-center">
                           <a href="<?php echo e(route('one_cut_corner',$id)); ?>">
                            <div>
                                <img src="<?php echo e(asset('home/images/shapes/11.png')); ?>" alt="" class="img-fluid">
                            </div>
                            <p class = "fs-18 text-center fw-bold">One Cut Corner</p>
                           </a>
                        </div>
                        <div class="col-md-2 d-flex flex-column justify-content-between align-items-center">
                         <a href="<?php echo e(route('two_cut_corner',$id)); ?>">
                            <div>
                                <img src="<?php echo e(asset('home/images/shapes/12.png')); ?>" alt="" class="img-fluid">
                            </div>
                            <p class = "fs-18 text-center fw-bold">Two Cut Corner</p>
                         </a>
                        </div>

                    </div>
               </div>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col-md-12 bg-black">
                    <p class = "fs-22 text-white mb-0 text-center py-2">Our Discounted Spa cover cap price is good for any cover up to 96” x 96”. If you have a larger cover please <span class = "text-sky">CLICK HERE</span></p>
            </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>

</script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('home.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/atlantis/resources/views/home/pages/category.blade.php ENDPATH**/ ?>