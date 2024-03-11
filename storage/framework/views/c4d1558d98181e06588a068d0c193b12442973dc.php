<?php $__env->startSection('title', 'Page Title'); ?>
<?php $__env->startSection('css'); ?>
<style>

</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php $img_path = "banner.png" ;?>
<?php
if (isset($plan)) {
$heading = $plan->description_1 ;
$title = $plan->name;
}
?>
<?php $shape = "Square Corners"?>
<?php $page_title = "Square Corners";?>
<?php $img_shape = "Square.png";?>

<?php echo $__env->make('home.includes.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section id="measurment">
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 my-5">
                    <h2 class="h2 font-play text-center mb-0"><?php echo $shape; ?></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-sky my-3 py-2">
        <div class="container">
            <p class="fs-25 text-white mb-0">Please give us your Measurements.</p>
        </div>
    </div>
    <div class="container" >
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-4 position-relative" id="images">
                    <img src="<?php echo e(asset('home/images/'.$img_shape)); ?>" alt="" class="img-fluid">
                </div>
                <div class="col-md-8 my-5" id="inputs">
                    <form action="">
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label for="staticEmail" class="col-sm-3 col-form-label mb-0 fs-15">A (Inches):</label>
                                    <div class="col-sm-9">
                                      <input type="number" class="form-control" id="staticEmail" step="0.01">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label for="staticEmail" class="col-sm-3 col-form-label mb-0 fs-15">B (Inches):</label>
                                    <div class="col-sm-9">
                                      <input type="number" class="form-control" id="staticEmail" step="0.01">
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-md-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label for="staticEmail" class="col-sm-3 col-form-label mb-0 fs-15">C (Radius):</label>
                                    <div class="col-sm-9">
                                      <input type="number" class="form-control" id="staticEmail" >
                                    </div>
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9">
                                        <a href="" class="text-sky fs-13">How to find a Radius?</a>
                                    </div>
                                </div>
                            </div> -->

                            <?php echo $__env->make('home.includes.inputs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <?php echo $__env->make('home.includes.wood', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <?php echo $__env->make('home.includes.cover_lift', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</section>

<?php echo $__env->make('home.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/atlantis/resources/views/home/pages/square.blade.php ENDPATH**/ ?>