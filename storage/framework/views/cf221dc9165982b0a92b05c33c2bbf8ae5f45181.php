<style>
    span.lan-3 {
        color: rgb(0, 0, 0) !important;
    }

    a.lan-4 {
        color: black !important;
    }

    ::before {
        color: black;
    }

    .simplebar-content-wrapper {
        background: white;
    }

    input.form-control,
    textarea.form-control {
        background: #ec322314 !important;
    }

    input.btn.btn-primary {
        background: red !important;
        border: none !important;
    }

    .page-wrapper.compact-wrapper .page-body-wrapper div.sidebar-wrapper .sidebar-main .sidebar-links .simplebar-wrapper .simplebar-mask .simplebar-content-wrapper .simplebar-content>li .sidebar-link.active {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
        position: relative;
        margin-bottom: 10px;
        background-color: transparent !important;
    }

    a.sidebar-link.sidebar-title.clickable:hover {
        background: rgba(128, 128, 128, 0.317)  !important;


    }
</style>
<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper">
            <a style="font-weight:900; text-decoration: none" href="<?php echo e(url('/')); ?>" class=" row justify-content-center">Brewery</a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a style="font-weight:900;color: #ec3223;text-decoration: none" href="<?php echo e(url('/')); ?>">Brewery</a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <a style="font-weight:900;color: #ec3223;text-decoration: none" href="<?php echo e(url('/')); ?>">Brewery</a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>

                    <li class="sidebar-list">
                        <label class="badge badge-success"></label><a
                            class="sidebar-link sidebar-title <?php echo e(request()->route()->uri == 'admin/dashboard' ? 'active1' : ''); ?>"
                            href="<?php echo e(url('/admin/dashboard')); ?>"><i style="font-size: 18px ; color: #2c323f;"
                                class="fa-solid fa-house"></i><span class="lan-3">&nbsp&nbspDashboard</span>

                        </a>
                    </li>

                    <li class="sidebar-list">
                        <label class="badge badge-success"></label><a
                            class="sidebar-link sidebar-title <?php echo e(request()->route()->uri == 'admin/header' ? 'active1' : ''); ?>"
                            href="<?php echo e(url('/admin/header/edit/' . \Crypt::encrypt(1))); ?>"><i style="font-size: 18px ; color: #2c323f;"
                                class="fa-solid fa-house"></i><span class="lan-3">&nbsp&nbspHeader</span>

                        </a>
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-success"></label><a
                            class="sidebar-link sidebar-title <?php echo e(request()->route()->uri == 'admin/breadcrumb' ? 'active1' : ''); ?>"
                            href="<?php echo e(url('/admin/breadcrumb')); ?>"><i style="font-size: 18px ; color: #2c323f;"
                                class="fa-solid fa-house"></i><span class="lan-3">&nbsp&nbspHero Slider</span>

                        </a>
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-success"></label><a
                            class="sidebar-link sidebar-title <?php echo e(request()->route()->uri == 'admin/social_icon' ? 'active1' : ''); ?>"
                            href="<?php echo e(url('/admin/social_icon')); ?>"><i style="font-size: 18px ; color: #2c323f;"
                                class="fa-solid fa-house"></i><span class="lan-3">&nbsp&nbspSocial Icon</span>

                        </a>
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-success"></label><a
                            class="sidebar-link sidebar-title <?php echo e(request()->route()->uri == 'admin/review' ? 'active1' : ''); ?>"
                            href="<?php echo e(url('/admin/review')); ?>"><i style="font-size: 18px ; color: #2c323f;"
                                class="fa-solid fa-house"></i><span class="lan-3">&nbsp&nbspReview</span>

                        </a>
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-success"></label><a
                            class="sidebar-link sidebar-title <?php echo e(request()->route()->uri == 'admin/category' ? 'active1' : ''); ?>"
                            href="<?php echo e(url('/admin/category')); ?>"><i style="font-size: 18px ; color: #2c323f;"
                                class="fa-solid fa-house"></i><span class="lan-3">&nbsp&nbspLocation</span>

                        </a>
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-success"></label><a
                            class="sidebar-link sidebar-title <?php echo e(request()->route()->uri == 'admin/studio' ? 'active1' : ''); ?>"
                            href="<?php echo e(url('/admin/studio')); ?>"><i style="font-size: 18px ; color: #2c323f;"
                                class="fa-solid fa-house"></i><span class="lan-3">&nbsp&nbspStudio</span>

                        </a>
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-success"></label><a
                            class="sidebar-link sidebar-title <?php echo e(request()->route()->uri == 'admin/client' ? 'active1' : ''); ?>"
                            href="<?php echo e(url('/admin/client')); ?>"><i style="font-size: 18px ; color: #2c323f;"
                                class="fa-solid fa-house"></i><span class="lan-3">&nbsp&nbspClient</span>

                        </a>
                    </li>

                    <li class="sidebar-list">
                        <label class="badge badge-success"></label><a
                            class="sidebar-link sidebar-title <?php echo e(request()->route()->uri == 'admin/employee' ? 'active1' : ''); ?>"
                            href="<?php echo e(url('/admin/employee')); ?>"><i style="font-size: 18px ; color: #2c323f;"
                                class="fa-solid fa-house"></i><span class="lan-3">&nbsp&nbspStaff</span>

                        </a>
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-success"></label><a
                            class="sidebar-link sidebar-title <?php echo e(request()->route()->uri == 'admin/service' ? 'active1' : ''); ?>"
                            href="<?php echo e(url('/admin/service')); ?>"><i style="font-size: 18px ; color: #2c323f;"
                                class="fa-solid fa-house"></i><span class="lan-3">&nbsp&nbspService</span>

                        </a>
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-success"></label><a
                            class="sidebar-link sidebar-title <?php echo e(request()->route()->uri == 'admin/gear' ? 'active1' : ''); ?>"
                            href="<?php echo e(url('/admin/gear')); ?>"><i style="font-size: 18px ; color: #2c323f;"
                                class="fa-solid fa-house"></i><span class="lan-3">&nbsp&nbspGear</span>

                        </a>
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-success"></label><a
                            class="sidebar-link sidebar-title <?php echo e(request()->route()->uri == 'admin/floor_plan' ? 'active1' : ''); ?>"
                            href="<?php echo e(url('/admin/floor_plan')); ?>"><i style="font-size: 18px ; color: #2c323f;"
                                class="fa-solid fa-house"></i><span class="lan-3">&nbsp&nbspFloor plan</span>

                        </a>
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-success"></label><a
                            class="sidebar-link sidebar-title <?php echo e(request()->route()->uri == 'admin/history' ? 'active1' : ''); ?>"
                            href="<?php echo e(url('/admin/history')); ?>"><i style="font-size: 18px ; color: #2c323f;"
                                class="fa-solid fa-house"></i><span class="lan-3">&nbsp&nbspHistory</span>

                        </a>
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-success"></label><a
                            class="sidebar-link sidebar-title <?php echo e(request()->route()->uri == 'admin/plan' ? 'active1' : ''); ?>"
                            href="<?php echo e(url('/admin/plan')); ?>"><i style="font-size: 18px ; color: #2c323f;"
                                class="fa-solid fa-house"></i><span class="lan-3">&nbsp&nbspStudio Booking</span>

                        </a>
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-success"></label><a
                            class="sidebar-link sidebar-title <?php echo e(request()->route()->uri == 'admin/other_service' ? 'active1' : ''); ?>"
                            href="<?php echo e(url('/admin/other_service')); ?>"><i style="font-size: 18px ; color: #2c323f;"
                                class="fa-solid fa-house"></i><span class="lan-3">&nbsp&nbspOther Service</span>

                        </a>
                    </li>

                    <li class="sidebar-list">
                        <label class="badge badge-success"></label><a
                            class="sidebar-link sidebar-title <?php echo e(request()->route()->uri == '/admin/map' ? 'active1' : ''); ?>"
                            href="<?php echo e(url('/admin/map')); ?>"><i style="font-size: 18px ; color: #2c323f;"
                                class="fa-solid fa-house"></i><span class="lan-3">&nbsp&nbspMap & Location</span>

                        </a>
                    </li>

                    <li class="sidebar-list">
                        <label class="badge badge-success"></label><a
                            class="sidebar-link sidebar-title <?php echo e(request()->route()->uri == '/admin/studio_tour' ? 'active1' : ''); ?>"
                            href="<?php echo e(url('/admin/studio_tour')); ?>"><i style="font-size: 18px ; color: #2c323f;"
                                class="fa-solid fa-house"></i><span class="lan-3">&nbsp&nbspStudio Tour</span>

                        </a>
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-success"></label><a
                            class="sidebar-link sidebar-title <?php echo e(request()->route()->uri == 'admin/footer' ? 'active1' : ''); ?>"
                            href="<?php echo e(url('/admin/footer/edit/' . \Crypt::encrypt(1))); ?>"><i style="font-size: 18px ; color: #2c323f;"
                                class="fa-solid fa-house"></i><span class="lan-3">&nbsp&nbspFooter</span>

                        </a>
                    </li>

                    

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
<?php /**PATH /var/www/html/brewery/resources/views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>