

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Issue Tracking</div>
                <div class="card-body">
                    <a href="<?php echo e(url('/admin/issue-tracking/create')); ?>" class="btn btn-success btn-sm"
                       title="Add New IssueTracking">
                        <i class="fa fa-plus" aria-hidden="true"></i> New Issue
                    </a>

                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table id="dataTables" class="table table-borderless">
                            <thead>
                            <tr>
                                <th>Sl.No</th>
                                <th>Title of Comments</th>
                                <th>Comments</th>
                                <th>Comments Author</th>
                                <th>Assign To</th>
                                <th>Assign By</th>
                                <th>Number of Message</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $issuetracking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $issue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($issue->id); ?></td>
                                    <td><?php echo e($issue->title); ?>

                                        <?php if($issue->assignTo==null): ?>
                                            <span class="badge badge-default bg-green">New</span>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e(substr($issue->comments, 0, 60) . '..'); ?></td>
                                    <td><?php echo e($issue->user->displayName); ?></td>
                                    <td>
                                        <?php echo Service::assignTo($issue->assignTo); ?>

                                    </td>
                                    <td><?php echo Service::assignBy($issue->assignBy); ?></td>
                                    <td>
                                    <span class="bg-green">
                                        <?php echo Service::feedbackCount($issue->id); ?>

                                        <br>
                                        <?php if($issue->isCompleted==!null): ?>
                                            Completed
                                        <?php endif; ?>
                                    </span>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(url('/admin/issue-tracking/' . $issue->id)); ?>"
                                           title="View IssueTracking">
                                            <button class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                                                   aria-hidden="true"></i> View
                                            </button>
                                        </a>
                                        <a href="<?php echo e(url('/admin/issue-tracking/' . $issue->id . '/edit')); ?>"
                                           title="Edit IssueTracking">
                                            <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                                      aria-hidden="true"></i> Edit
                                            </button>
                                        </a>

                                        <form method="POST"
                                              action="<?php echo e(url('/admin/issue-tracking' . '/' . $issue->id)); ?>"
                                              accept-charset="UTF-8" style="display:inline">
                                            <?php echo e(method_field('DELETE')); ?>

                                            <?php echo e(csrf_field()); ?>

                                            <button type="submit" class="btn btn-danger btn-sm"
                                                    title="Delete IssueTracking"
                                                    onclick="return confirm(&quot;Confirm; delete?;&quot;)"><i
                                                        class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                            </button>
                                        </form>
                                        <a class="btn blue btn-outline sbold" data-toggle="modal"
                                           href="#assignTo<?php echo e($issue->id); ?>"> Assign To </a>

                                        <div class="modal fade bs-modal-sm" id="assignTo<?php echo e($issue->id); ?>" tabindex="-1"
                                             role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true"></button>
                                                        <h4 class="modal-title">Assign To</h4>
                                                    </div>
                                                    <?php echo Form::open(['url' => '/admin/issue-tracking/assignTo', 'class' => 'form-horizontal', 'files' => true]); ?>

                                                    <div class="modal-body">
                                                        <div class="form-group" style="margin-left:0px">

                                                            <select name="assignTo" class="form-control input-medium">
                                                                <option> Assign to......</option>
                                                                <?php $__currentLoopData = $assignTo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assign): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($assign->user_id); ?>"><?php echo e($assign->displayName); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                            <input type="hidden" value="<?php echo e($issue->id); ?>" name="id">
                                                        </div>


                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn dark btn-outline"
                                                                data-dismiss="modal">Close
                                                        </button>


                                                        <div class="form-group">
                                                            <div class="col-md-offset-4 col-md-4">
                                                                <input class="btn btn-primary" type="submit"
                                                                       value="Assign To">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php echo Form::close(); ?>

                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <?php if(isset($issue->assignTo)): ?>
                                            <span class="bg-purple"><?php echo e(\App\User::find($issue->assignTo)->name); ?></span>
                                        <?php endif; ?>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>


                    </div>

                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets/datatable/css/material.min.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets/datatable/css/dataTables.material.min.css')); ?>"/>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript" src="<?php echo e(url('assets/datatable/js/datatables.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('assets/datatable/js/dataTables.material.min.js')); ?>"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables').DataTable({
                columnDefs: [
                    {
                        targets: [0, 1, 2],
                        className: 'mdl-data-table__cell--non-numeric',

                    }
                ],
                "order": [[0, 'desc']]

            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>