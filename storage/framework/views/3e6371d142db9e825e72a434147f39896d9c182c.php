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
            <a style="font-weight:900; text-decoration: none" href="<?php echo e(url('/')); ?>" class=" row justify-content-center">Atlantis</a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a style="font-weight:900;color: #ec3223;text-decoration: none" href="<?php echo e(url('/')); ?>">Atlantis</a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <a style="font-weight:900;color: #ec3223;text-decoration: none" href="<?php echo e(url('/')); ?>">Atlantis</a>
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
                            class="sidebar-link sidebar-title <?php echo e(request()->route()->uri == 'admin/cover_cap' ? 'active1' : ''); ?>"
                            href="<?php echo e(url('/admin/cover_cap')); ?>"><i style="font-size: 18px ; color: #2c323f;"
                                class="fa-solid fa-house"></i><span class="lan-3">&nbsp&nbspCover Cap</span>

                        </a>
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-success"></label><a
                            class="sidebar-link sidebar-title <?php echo e(request()->route()->uri == 'admin/steam_stopper' ? 'active1' : ''); ?>"
                            href="<?php echo e(url('/admin/steam_stopper')); ?>"><i style="font-size: 18px ; color: #2c323f;"
                                class="fa-solid fa-house"></i><span class="lan-3">&nbsp&nbspSteam Stopper</span>

                        </a>
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-success"></label><a
                            class="sidebar-link sidebar-title <?php echo e(request()->route()->uri == 'admin/vapor_barrier' ? 'active1' : ''); ?>"
                            href="<?php echo e(url('/admin/vapor_barrier')); ?>"><i style="font-size: 18px ; color: #2c323f;"
                                class="fa-solid fa-house"></i><span class="lan-3">&nbsp&nbspVapor Barrier</span>

                        </a>
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-success"></label><a
                            class="sidebar-link sidebar-title <?php echo e(request()->route()->uri == 'admin/tie_down' ? 'active1' : ''); ?>"
                            href="<?php echo e(url('/admin/tie_down')); ?>"><i style="font-size: 18px ; color: #2c323f;"
                                class="fa-solid fa-house"></i><span class="lan-3">&nbsp&nbspTie Down</span>

                        </a>
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-success"></label><a
                            class="sidebar-link sidebar-title <?php echo e(request()->route()->uri == 'admin/foam_density' ? 'active1' : ''); ?>"
                            href="<?php echo e(url('/admin/foam_density')); ?>"><i style="font-size: 18px ; color: #2c323f;"
                                class="fa-solid fa-house"></i><span class="lan-3">&nbsp&nbspFoam Density</span>

                        </a>
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-success"></label><a
                            class="sidebar-link sidebar-title <?php echo e(request()->route()->uri == 'admin/cover_lift' ? 'active1' : ''); ?>"
                            href="<?php echo e(url('/admin/cover_lift')); ?>"><i style="font-size: 18px ; color: #2c323f;"
                                class="fa-solid fa-house"></i><span class="lan-3">&nbsp&nbspCover Lift</span>

                        </a>
                    </li>

                    <li class="sidebar-list">
                        <label class="badge badge-success"></label><a
                            class="sidebar-link sidebar-title <?php echo e(request()->route()->uri == 'admin/cover_taper' ? 'active1' : ''); ?>"
                            href="<?php echo e(url('/admin/cover_taper')); ?>"><i style="font-size: 18px ; color: #2c323f;"
                                class="fa-solid fa-house"></i><span class="lan-3">&nbsp&nbspCover Taper</span>

                        </a>
                    </li>

                    <li class="sidebar-list">
                        <label class="badge badge-success"></label><a
                            class="sidebar-link sidebar-title <?php echo e(request()->route()->uri == 'admin/plan' ? 'active1' : ''); ?>"
                            href="<?php echo e(url('/admin/plan')); ?>"><i style="font-size: 18px ; color: #2c323f;"
                                class="fa-solid fa-house"></i><span class="lan-3">&nbsp&nbspPlan</span>

                        </a>
                    </li>

                    

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
<?php /**PATH /var/www/html/atlantis/resources/views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>