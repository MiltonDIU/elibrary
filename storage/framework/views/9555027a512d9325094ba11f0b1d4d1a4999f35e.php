

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
                            <div class="col-md-9 col-sm-9">
                                <div class="margin-bottom-15">
                                    <a href="<?php echo e(url('feedback/new')); ?>" class="btn btn-primary new-feedback">New</a>
                                </div>
                                <div id="accordion1" class="panel-group">


                                    <?php $__currentLoopData = $issuetracking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $issue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">

                                                    <a class="accordion-toggle collapsed <?php echo $issue->unread2initiator==1?"unread":""; ?>"
                                                       data-toggle="collapse"
                                                       data-parent="#accordion<?php echo e($issue->id); ?>"
                                                       href="#accordion1_<?php echo e($issue->id); ?>">

                                                        <?php echo e($issue->title); ?>

                                                    </a>

                                                </h4>
                                            </div>
                                            <div style="height: 0px;" id="accordion1_<?php echo e($issue->id); ?>"
                                                 class="panel-collapse collapse">
                                                <div class="panel-body">

                                                    <blockquote>
                                                        <p><?php echo $issue->comments; ?></p>

                                                        <?php if($issue->rating_id==0): ?>
                                                            <span>
                            <a class="btn blue btn-outline sbold" data-toggle="modal" href="#issues<?php echo e($issue->id); ?>">
                                    <?php echo ($issue->isCompleted==0)?"Message":"Ratting"; ?>

                                                                                                                            </a>
                        </span>
                                                        <?php else: ?>
                                                            Your Ratting Point is : <?php echo e($issue->rating_id); ?>

                                                        <?php endif; ?>

                                                    </blockquote>

                                                    <div class="comments">

                                                        <?php $__currentLoopData = $issue->issueTrackingDetail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php
                                                                $img = $itd->user->imageIcon? $itd->user->imageIcon:'adminpic.png';
                                                            ?>
                                                            <div class="media">
                                                                <a href="javascript:" class="pull-left">
                                                                    <img src="<?php echo e(url('uploads/profile/icon',$img)); ?>"
                                                                         alt="" class="media-object">
                                                                </a>
                                                                <div class="media-body">

                                                                    <h4 class="media-heading"><?php echo e($itd->user->displayName); ?> </h4>

                                                                    <div class="modal fade bs-modal-sm"
                                                                         id="issues<?php echo e($issue->id); ?>" tabindex="-1"
                                                                         role="dialog" aria-hidden="true">
                                                                        <div class="modal-dialog modal-sm">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <button type="button" class="close"
                                                                                            data-dismiss="modal"
                                                                                            aria-hidden="true"></button>
                                                                                    <h4 class="modal-title">

                                                                                        <?php echo ($issue->isCompleted==0)?"Message":"Ratting"; ?>


                                                                                    </h4>
                                                                                </div>
                                                                                <?php if($issue->isCompleted==0): ?>
                                                                                    <?php echo Form::open(['url' => '/admin/issue-tracking/feedback', 'class' => 'form-horizontal', 'files' => true]); ?>

                                                                                    <div class="modal-body">
                                                                                        <div class="form-group">
                                                                                            <?php echo Form::textarea('actionComments', null, ['class' => 'form-control', 'required' => 'required']); ?>

                                                                                            <?php echo Form::hidden('issue_tracking_id',$issue->id, null, ['class' => 'form-control', 'required' => 'required']); ?>


                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <div class="form-group">
                                                                                            <div class="col-md-offset-4 col-md-4">
                                                                                                <input class="btn btn-primary"
                                                                                                       type="submit"
                                                                                                       value="Submit">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <?php echo Form::close(); ?>

                                                                                <?php endif; ?>
                                                                                <?php if($issue->isCompleted==1): ?>
                                                                                    <?php if($issue->user_id==Auth::id()): ?>
                                                                                        <?php echo Form::open(['method' => 'PATCH','url' => ['admin/issue-tracking/rating', $issue->id],'class' => 'form-horizontal','files' => true]); ?>

                                                                                        <div class="form-group <?php echo e($errors->has('rating_id') ? 'has-error' : ''); ?>">
                                                                                            <div class="col-md-6">
                                                                                                <div class="mt-radio-inline">
                                                                                                    <?php $__currentLoopData = $ratings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rating): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                                                                        <?php echo e(Form::radio('rating_id',$rating->id)); ?>

                                                                                                        <?php echo e($rating->ratingName); ?>

                                                                                                        <span></span>

                                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                                </div>

                                                                                                <?php echo $errors->first('rating_id', '<p class="help-block">:message</p>'); ?>

                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="col-md-offset-4 col-md-4">
                                                                                                <input class="btn btn-primary"
                                                                                                       type="submit"
                                                                                                       value="Submit">
                                                                                            </div>
                                                                                        </div>
                                                                                        <?php echo Form::close(); ?>

                                                                                    <?php endif; ?>
                                                                                <?php endif; ?>

                                                                            </div>
                                                                            <!-- /.modal-content -->
                                                                        </div>
                                                                        <!-- /.modal-dialog -->
                                                                    </div>

                                                                    <p><?php echo $itd->actionComments; ?> </p>
                                                                    <i class="fa fa-calendar"></i> <?php echo e(date_create($issue->created_at)->format('d M Y, h:i:s A')); ?>

                                                                </div>
                                                            </div>


                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                </div>
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
<?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.front_end', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>