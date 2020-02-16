<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(url('assets/notification/toastr.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(url('assets/notification/toastr.min.js')); ?>"></script>
<script type="text/javascript">
    <?php if(Session::has('notification')): ?>
    //alert("<?php echo e(Session::get('notification.alert-type')); ?>");
    var type = "<?php echo e(Session::get('notification.alert-type', 'info')); ?>";
    switch(type){
        case 'info':
            toastr.info("<?php echo e(Session::get('notification.message')); ?>");
            break;
        case 'warning':
            toastr.warning("<?php echo e(Session::get('notification.message')); ?>");
            break;
        case 'success':
            toastr.success("<?php echo e(Session::get('notification.message')); ?>");
            break;
        case 'error':
            toastr.error("<?php echo e(Session::get('notification.message')); ?>");
            break;
    }
    <?php endif; ?>
</script>
<?php $__env->stopPush(); ?>
