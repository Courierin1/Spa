<?php $__env->startSection('title', 'Page Title'); ?>
<?php $__env->startSection('css'); ?>
<style>
.checkbox-wrapper-19 {
    box-sizing: border-box;
    --background-color: #fff;
    --checkbox-height: 20px;
  }

  @-moz-keyframes dothabottomcheck-19 {
    0% {
      height: 0;
    }
    100% {
      height: calc(var(--checkbox-height) / 2);
    }
  }

  @-webkit-keyframes dothabottomcheck-19 {
    0% {
      height: 0;
    }
    100% {
      height: calc(var(--checkbox-height) / 2);
    }
  }

  @keyframes dothabottomcheck-19 {
    0% {
      height: 0;
    }
    100% {
      height: calc(var(--checkbox-height) / 2);
    }
  }

  @keyframes dothatopcheck-19 {
    0% {
      height: 0;
    }
    50% {
      height: 0;
    }
    100% {
      height: calc(var(--checkbox-height) * 1.2);
    }
  }

  @-webkit-keyframes dothatopcheck-19 {
    0% {
      height: 0;
    }
    50% {
      height: 0;
    }
    100% {
      height: calc(var(--checkbox-height) * 1.2);
    }
  }

  @-moz-keyframes dothatopcheck-19 {
    0% {
      height: 0;
    }
    50% {
      height: 0;
    }
    100% {
      height: calc(var(--checkbox-height) * 1.2);
    }
  }

  .checkbox-wrapper-19 input[type=checkbox] {
    display: none;
  }

  .checkbox-wrapper-19 .check-box {
    height: var(--checkbox-height);
    width: var(--checkbox-height);
    background-color: transparent;
    border: 1px solid #333;
    border-radius: 5px;
    position: relative;
    display: inline-block;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -moz-transition: border-color ease 0.2s;
    -o-transition: border-color ease 0.2s;
    -webkit-transition: border-color ease 0.2s;
    transition: border-color ease 0.2s;
    cursor: pointer;
  }
  .checkbox-wrapper-19 .check-box::before,
  .checkbox-wrapper-19 .check-box::after {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    position: absolute;
    height: 0;
    width: calc(var(--checkbox-height) * .2);
    background-color: #0091a0;
    display: inline-block;
    -moz-transform-origin: left top;
    -ms-transform-origin: left top;
    -o-transform-origin: left top;
    -webkit-transform-origin: left top;
    transform-origin: left top;
    border-radius: 5px;
    content: " ";
    -webkit-transition: opacity ease 0.5;
    -moz-transition: opacity ease 0.5;
    transition: opacity ease 0.5;
  }
  .checkbox-wrapper-19 .check-box::before {
    top: calc(var(--checkbox-height) * .72);
    left: calc(var(--checkbox-height) * .41);
    box-shadow: 0 0 0 calc(var(--checkbox-height) * .05) var(--background-color);
    -moz-transform: rotate(-135deg);
    -ms-transform: rotate(-135deg);
    -o-transform: rotate(-135deg);
    -webkit-transform: rotate(-135deg);
    transform: rotate(-135deg);
  }
  .checkbox-wrapper-19 .check-box::after {
    top: calc(var(--checkbox-height) * .37);
    left: calc(var(--checkbox-height) * .05);
    -moz-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
  }

  .checkbox-wrapper-19 input[type=checkbox]:checked + .check-box,
  .checkbox-wrapper-19 .check-box.checked {
    border-color: #0091a0;
  }
  .checkbox-wrapper-19 input[type=checkbox]:checked + .check-box::after,
  .checkbox-wrapper-19 .check-box.checked::after {
    height: calc(var(--checkbox-height) / 2);
    -moz-animation: dothabottomcheck-19 0.2s ease 0s forwards;
    -o-animation: dothabottomcheck-19 0.2s ease 0s forwards;
    -webkit-animation: dothabottomcheck-19 0.2s ease 0s forwards;
    animation: dothabottomcheck-19 0.2s ease 0s forwards;
  }
  .checkbox-wrapper-19 input[type=checkbox]:checked + .check-box::before,
  .checkbox-wrapper-19 .check-box.checked::before {
    height: calc(var(--checkbox-height) * 1.2);
    -moz-animation: dothatopcheck-19 0.4s ease 0s forwards;
    -o-animation: dothatopcheck-19 0.4s ease 0s forwards;
    -webkit-animation: dothatopcheck-19 0.4s ease 0s forwards;
    animation: dothatopcheck-19 0.4s ease 0s forwards;
  }

</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php $title = " " ;?>

<?php $heading = "SPA COVER PRICE LIST" ;?>
<?php $img_path = "banner.png" ;?>

<?php echo $__env->make('home.includes.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section id="pricing" class="my-5 py-5">
    <div class="container">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <h2 class="h2 text-dark font-play fw-bold">Pricing plans and options</h2>
                    <p class="p text-dark font-poppins fw-light ">Simple, flexible, and predictable pricing. Select which package is best suited for you.</p>
                </div>
            </div>
            <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-md-4 position-relative shadow pb-5 mb-4">
                    <div class="bar">


                   <div class="text py-3">
                        <p class="text-sky text-center pt-2"><?php echo e($plan->name); ?></p>
                        <p class="fs-18 text-center fw-bold">
                            <?php echo e($plan->description_1); ?>

                        </p>
                   </div>
                   <hr>

                    <div class="listing pt-3 pb-3">
                        <ul class="list-group m-0">
                            <?php $__empty_2 = true; $__currentLoopData = $plan->bullets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bullet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                            <li class="list-group-item d-flex justify-content-between align-items-start m-1 p-1">
                                <div class="me-auto d-flex text-gray">
                                    <div class="checkbox-wrapper-19 me-2">
                                        <input type="checkbox" id="cbtest-19-<?php echo e($bullet->id); ?>" data-id="<?php echo e($bullet->plan_id); ?>"  data-ids="<?php echo e($bullet->id); ?>"    value="<?php echo e($bullet->price); ?>" class="input_lebal_<?php echo e($bullet->id); ?> check_box_lebal_data check_box_lebal_<?php echo e($bullet->plan_id); ?>" />
                                        <label for="cbtest-19-<?php echo e($bullet->id); ?>" data-id="<?php echo e($bullet->plan_id); ?>" data-ids="<?php echo e($bullet->id); ?>"  class="check-box check_box_lebal_<?php echo e($bullet->plan_id); ?> input_lebal_<?php echo e($bullet->id); ?> check_box_lebal_data"></label>
                                    </div>
                                    <label for="cbtest-19-<?php echo e($bullet->id); ?>" data-id="<?php echo e($bullet->plan_id); ?>"  data-ids="<?php echo e($bullet->id); ?>"   class="check_box_lebal_<?php echo e($bullet->plan_id); ?> input_lebal_<?php echo e($bullet->id); ?> check_box_lebal_data"><?php echo e($bullet->description); ?></label>

                                </div>
                            <span class="fw-bold ms-2">$<?php echo e($bullet->price); ?></span>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>

                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="text">
                        <p class="fs-18 fw-bold text-center">
                            <?php echo e($plan->description_2); ?>

                        </p>
                    </div>
                    <div class="button d-flex">
                        <a href="<?php echo e(url('shape/' . \Crypt::encrypt($plan->id))); ?>" class="btn btn-outline-primary mx-auto"> Click Here </a>
                    </div>
                </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-md-4 position-relative shadow pb-5 mb-4">
                    Not Available
                </div>
                <?php endif; ?>


            </div>
        </div>
    </div>
</section>
<?php echo $__env->make('home.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
$(document).ready(function () {
    $('.check_box_lebal_data').on('click', function () {
        var id = $(this).data('id');
        var ids = $(this).data('ids');
        var checkbox = $('#cbtest-19-'+ids);
        if (checkbox.is(':checked')) {
             // Disable all labels
        $(".check_box_lebal_" + id).not(this).addClass('disabled');

        // Enable the clicked checkbox and label
        $('.input_lebal_'+ids).removeClass('disabled');
        }else{
            // $('.check_box_lebal_data').removeClass('disabled');
            $('.check_box_lebal_'+id).removeClass('disabled');
        }

    });
});

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/atlantis/resources/views/home/pages/index.blade.php ENDPATH**/ ?>