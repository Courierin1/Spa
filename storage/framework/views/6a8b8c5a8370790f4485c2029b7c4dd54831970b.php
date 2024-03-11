<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap js-->
<script src="<?php echo e(asset('assets/js/bootstrap/bootstrap.bundle.min.js')); ?>"></script>
<!-- feather icon js-->
<script src="<?php echo e(asset('assets/js/icons/feather-icon/feather.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/icons/feather-icon/feather-icon.js')); ?>"></script>
<!-- scrollbar js-->
<script src="<?php echo e(asset('assets/js/scrollbar/simplebar.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/scrollbar/custom.js')); ?>"></script>
<!-- Sidebar jquery-->
<script src="<?php echo e(asset('assets/js/config.js')); ?>"></script>
<!-- Plugins JS start-->
<script id="menu" src="<?php echo e(asset('assets/js/sidebar-menu.js')); ?>"></script>
<?php echo $__env->yieldContent('script'); ?>

<?php if(Route::current()->getName() != 'popover'): ?>
    <script src="<?php echo e(asset('assets/js/tooltip-init.js')); ?>"></script>

<?php endif; ?>


<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/select2/select2-custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatables/datatable.custom.js')); ?>"></script>

<script src="<?php echo e(asset('assets/js/jsgrid/jsgrid.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jsgrid/griddata.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jsgrid/jsgrid.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.custom.js')); ?>"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>


<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });

        function add_header_tab(){
var html = ` <div class="row mb-1">
                                        <div class="col-9"><input class="form-control " id="tabs" name="tabs[]"  placeholder="Enter Header Tab" ></div>
                                        <div class="col-3"><button type="button" class="btn btn-danger theme"><i class="fa fa-trash"></i></button></div>
                                    </div>`;
    $("#add_header_tab_in_this").append(html);

}
$(document).on('click', '.removeheadertab', function () {
        $(this).parent().parent().remove();
    });

</script>

<?php /**PATH /var/www/html/brewery/resources/views/admin/layouts/script.blade.php ENDPATH**/ ?>