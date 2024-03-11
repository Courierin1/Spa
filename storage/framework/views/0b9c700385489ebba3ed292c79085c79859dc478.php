<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="pixelstrap">
    
    <title>BREWERY </title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/font-awesome.css')); ?>">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/icofont.css')); ?>">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/themify.css')); ?>">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/flag-icon.css')); ?>">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/feather-icon.css')); ?>">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/bootstrap.css')); ?>">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link id="color" rel="stylesheet" href="<?php echo e(asset('assets/css/color-1.css')); ?>" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/responsive.css')); ?>">
</head>

<body>
    <!-- login page start-->
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card">
                    <div>
                        <div><a class="logo" href="/"><img style="width: 250px" class="img-fluid"
                                    src="http://carrental.arm-sc.com/wp-content/uploads/sites/28/2022/12/logo.png" alt="looginpage"></a></div>
                        <div class="login-main">
                            <form class="theme-form" action="<?php echo e(route('login_post')); ?>" method="POST">
                                <?php echo csrf_field(); ?>

                                <h4>Sign in to account</h4>
                                <p>Enter your email & password to login</p>
                                <?php if(session()->has('error')): ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <?php echo e(session('error')); ?>

                                        <button class="btn-close" type="button" data-bs-dismiss="alert"
                                            aria-label="Close" data-bs-original-title="" title=""></button>
                                    </div>
                                <?php endif; ?>
                                <div class="form-group">
                                    <label class="col-form-label">Email Address</label>
                                    <input class="form-control" name="email" type="text" required=""
                                        placeholder="Abc123">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <div class="form-input position-relative">
                                        <input class="form-control" name="password" type="password" required=""
                                            placeholder="*********">
                                        <div class="show-hide"><span class="show"> </span></div>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <div class="checkbox p-0">
                                        <input id="checkbox1" type="checkbox">
                                        
                                        
                                        <div class="text-end mt-3">
                                            <button class="btn btn-primary btn-block w-100" type="submit">Sign
                                                in</button>
                                        </div>
                                    </div>

                                    
                                    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- latest jquery-->
        <script  src="<?php echo e(asset('assets/js/jquery-3.5.1.min.js')); ?>"></script>
        <!-- Bootstrap js-->
        <script  src="<?php echo e(asset('assets/js/bootstrap/bootstrap.bundle.min.js')); ?>"></script>
        <!-- feather icon js-->
        <script  src="<?php echo e(asset('assets/js/icons/feather-icon/feather.min.js')); ?>"></script>
        <script  src="<?php echo e(asset('assets/js/icons/feather-icon/feather-icon.js')); ?>"></script>
        <!-- scrollbar js-->
        <!-- Sidebar jquery-->
        <script  src="<?php echo e(asset('assets/js/config.js')); ?>"></script>
        <!-- Plugins JS start-->
        <!-- Plugins JS Ends-->
        <!-- Theme js-->
        <script  src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
        <!-- login js-->
        <!-- Plugin used-->
        <script>

            $(document).ready(function() {

                $('.show-hide').on('click', function() {
                    var passInput = $("input[name=password]");
                    if (passInput.attr('type') === 'password') {
                        passInput.attr('type', 'text');
                    } else {
                        passInput.attr('type', 'password');
                    }
                })
            })
        </script>
    </div>
</body>

</html>
<?php /**PATH /var/www/html/atlantis/resources/views/admin/auth/login.blade.php ENDPATH**/ ?>