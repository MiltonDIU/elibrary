

<?php $__env->startSection('content'); ?>


    <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="<?php echo e(url('/admin/supervisor/create')); ?>" class="btn btn-success btn-sm" title="Add New supervisor">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table id="dataTables" class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Sl.No</th>
                                        <th>Name</th>
                                        <th>Department</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Designation</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $supervisors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supervisor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(isset($loop->iteration) ? $loop->iteration : $item->id); ?></td>
                                        <td><?php echo e($supervisor->name); ?></td>
                                        <td><?php echo e($supervisor->department->departmentName); ?></td>
                                        <td><?php echo e($supervisor->email); ?></td>
                                        <td><?php echo e($supervisor->mobile); ?></td>
                                        <td><?php echo e($supervisor->designation); ?></td>
                                        <td>
                                            <a href="<?php echo e(url('/admin/supervisor/' . $supervisor->id)); ?>" title="View supervisor"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="<?php echo e(url('/admin/supervisor/' . $supervisor->id . '/edit')); ?>" title="Edit supervisor"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="<?php echo e(url('/admin/supervisor' . '/' . $supervisor->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Delete supervisor"
                                                        onclick="return confirm(&quot;Confirm delete?;&quot;)"><i
                                                            class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>
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
        $(document).ready(function() {
            $('#dataTables').DataTable( {
                columnDefs: [
                    {
                        targets: [ 0, 1, 2 ],
                        className: 'mdl-data-table__cell--non-numeric',

                    }
                ],
                "order": [[ 0, 'desc' ]]

            } );
        } );
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>