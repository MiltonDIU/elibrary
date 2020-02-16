<?php $__env->startSection('content'); ?>
    <!-- Header END -->
    <div class="main">
        <div class="container">
            <!-- BEGIN SIDEBAR & CONTENT -->
            <div class="row margin-bottom-40">
                <!---search box---->
            <?php echo $__env->make('frontend.partial.advance_search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- BEGIN CONTENT -->
                <div class="col-md-9 col-sm-12">
                    <div class="content-form-page">
                        <div class="row">

                           <?php echo FrontEnd::services(); ?>



                        </div>
                    </div>
                </div>
            <?php echo $__env->make('frontend.partial.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- END CONTENT -->
            </div>
            <!-- END SIDEBAR & CONTENT -->
        </div>
    </div>
    <?php echo $__env->make('frontend.partial.latest_book', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.partial.service-css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.front_end', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>