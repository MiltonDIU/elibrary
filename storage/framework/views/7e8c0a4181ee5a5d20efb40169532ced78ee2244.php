

<?php $__env->startSection('content'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                   <div class="card-body">
                        <a href="<?php echo e(url('/admin/item')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />
                      <?php echo Form::model($item, [
                                       'method' => 'PATCH',
                                       'url' => ['/admin/item', $item->id],
                                       'class' => 'form-horizontal',
                                       'files' => true,
                                       'id'=>'item-form'
                                   ]); ?>

                         <?php echo $__env->make('admin.item.form', ['submitButtonText' => 'Update'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                        <?php echo Form::close(); ?>


                    </div>
                </div>
            </div>
        </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>