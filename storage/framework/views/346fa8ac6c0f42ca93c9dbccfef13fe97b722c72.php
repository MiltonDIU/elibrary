

<?php $__env->startSection('content'); ?>

    <div class="main">
        <div class="container">
        <?php echo $__env->make('frontend.partial.breadcrumb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- BEGIN SIDEBAR & CONTENT -->
            <?php echo $__env->make('frontend.partial.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row margin-bottom-40">
                <!-- BEGIN CONTENT -->
                <div class="col-md-12 col-sm-12">
                    <div class="content-page">
                        <div class="row">
                            <!-- BEGIN LEFT SIDEBAR -->

                            <div class="col-md-9 col-sm-9 table-responsive">
                                <?php echo $__env->make('frontend.getItem', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            </div>
                            <?php echo $__env->make('frontend.partial.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END SIDEBAR & CONTENT -->
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front_end', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>