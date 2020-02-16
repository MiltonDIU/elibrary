

<?php $__env->startSection('content'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                   <div class="card-body">
                        <a href="<?php echo e(url('/admin/item-standard-number/create')); ?>" class="btn btn-success btn-sm" title="Add New itemStandardNumber">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>


                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table id="dataTables" class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Sl.No</th>
                                        <th>Item Standard Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $itemstandardnumber; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(isset($loop->iteration) ? $loop->iteration : $item->id); ?></td>
                                        <td><?php echo e($item->itemStandardName); ?></td>
                                        <td>
                                            <a href="<?php echo e(url('/admin/item-standard-number/' . $item->id)); ?>" title="View itemStandardNumber"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="<?php echo e(url('/admin/item-standard-number/' . $item->id . '/edit')); ?>" title="Edit itemStandardNumber"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="<?php echo e(url('/admin/item-standard-number' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Delete itemStandardNumber"
                                                        onclick="return confirm(&quot;Confirm; delete?;&quot;)"><i
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