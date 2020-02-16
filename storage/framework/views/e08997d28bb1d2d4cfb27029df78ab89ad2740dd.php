<!DOCTYPE html>
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8"/>
    <title>e-library</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="Preview page of Metronic Admin Theme #1 for " name="description"/>
    <meta content="" name="author"/>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">


    <link href="<?php echo e(url('assets/admin/global/plugins/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo e(url('assets/admin/global/plugins/simple-line-icons/simple-line-icons.min.css')); ?>" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo e(url('assets/admin/global/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo e(url('assets/admin/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')); ?>" rel="stylesheet"
          type="text/css"/>

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="<?php echo e(url('assets/global/plugins/select2/css/select2.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(url('assets/global/plugins/select2/css/select2-bootstrap.min.css')); ?>" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo e(url('assets/admin/global/css/components.min.css')); ?>" rel="stylesheet" id="style_components"
          type="text/css"/>
    <link href="<?php echo e(url('assets/admin/global/css/plugins.min.css')); ?>" rel="stylesheet" type="text/css"/>


    <?php echo $__env->yieldPushContent('styles'); ?>
    <link href="<?php echo e(url('assets/admin/pages/css/login.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(url('assets/admin/custom.css')); ?>" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>
</head>
<body class=" login">
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="<?php echo e(url('/')); ?>">
        <img src="<?php echo e(url('assets/image/library_logo.png')); ?>" alt="Logo"/> </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    <?php echo e(csrf_field()); ?>

    <?php echo $__env->yieldContent('content'); ?>


</div>
<div class="copyright"> <?php echo e(date('Y')); ?> © e-library,DIU.</div>
<!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<script src="../assets/global/plugins/ie8.fix.min.js"></script>


<![endif]-->

<!-- BEGIN CORE PLUGINS -->
<script src="<?php echo e(url('assets/admin/global/plugins/jquery.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(url('assets/admin/global/plugins/bootstrap/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(url('assets/admin/global/plugins/js.cookie.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(url('assets/admin/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')); ?>"
        type="text/javascript"></script>
<script src="<?php echo e(url('assets/admin/global/plugins/jquery.blockui.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(url('assets/admin/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')); ?>"
        type="text/javascript"></script>
<!-- END CORE PLUGINS -->


<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo e(url('assets/admin/global/plugins/jquery-validation/js/jquery.validate.min.js')); ?>"
        type="text/javascript"></script>
<script src="<?php echo e(url('assets/admin/global/plugins/jquery-validation/js/additional-methods.min.js')); ?>"
        type="text/javascript"></script>
<script src="<?php echo e(url('assets/admin/global/plugins/select2/js/select2.full.min.js')); ?>" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="<?php echo e(url('assets/admin/global/scripts/app.min.js')); ?>" type="text/javascript"></script>

<?php echo $__env->yieldPushContent('scripts'); ?>

<script src="<?php echo e(url('assets/admin/pages/scripts/login.js')); ?>" type="text/javascript"></script>


<script>
    window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?>;
</script>

</body>

</html>