

<?php $__env->startSection('content'); ?>

    <div class="main">
        <div class="container">
        <?php echo $__env->make('frontend.partial.breadcrumb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- BEGIN SIDEBAR & CONTENT -->
            <div class="row margin-bottom-40">
                <!-- BEGIN CONTENT -->
                <div class="col-md-12 col-sm-12">
                    <div class="content-page">
                        <div class="row">
                            <div class="col-md-9 col-sm-9 blog-posts">
                                <p>This <strong>eLibrary</strong> offers over 28,000 eBooks. Download or read through
                                    online. You will find the world's great resources here. You also get a million of
                                    journal articles and articles information through this site.No fee is necessary but
                                    registration is required. If you find this eLibrary is useful, we think that our
                                    effort is success. Please don’t hesitate to give your intellectual and valuable
                                    suggestion for continuous development, maintain our online presence, and improve our
                                    programs and offerings.</p>

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