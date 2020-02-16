

<?php $__env->startSection('content'); ?>

    <div class="main">
        <div class="container">
            <!-- BEGIN SIDEBAR & CONTENT -->
            <?php echo $__env->make('frontend.partial.breadcrumb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row margin-bottom-40">

                <div class="col-md-9 col-sm-12">
                    <div class="content-form-page">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <h2>Years</h2>
                                <?php echo FrontEnd::years(); ?>

                            </div>
                        </div>
                    </div>
                </div>
            <?php echo $__env->make('frontend.partial.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- END CONTENT -->
            </div>
            <!-- END SIDEBAR & CONTENT -->
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front_end', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>