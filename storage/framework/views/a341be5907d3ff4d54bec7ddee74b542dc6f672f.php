

<?php $__env->startSection('content'); ?>
        <div class="row">

            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">

                        <a href="<?php echo e(url('/admin/item')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>

                        <?php if(Session::has('viewIndex')): ?>
                            <?php echo $__env->make('admin.action', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php endif; ?>



                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Title</th>
                                        <td><?php echo e($item->title); ?></td>
                                    </tr>
                                    <tr>
                                        <th> Publisher Name </th>
                                        <td> <?php echo e($item->publisher->publisherName); ?> </td>
                                    </tr>
                                    <tr>
                                        <th>  Service Category </th>
                                        <td> <?php echo e($item->category->itemCategory); ?> </td>
                                    </tr>
                                    <?php if($item->supervisor): ?>
                                        <tr>
                                            <th> Project Supervisor</th>
                                            <td> <?php echo e($item->supervisor->name); ?> </td>
                                        </tr>
                                    <?php endif; ?>
                                    <tr>
                                        <th> Item Standard Name </th>
                                        <td> <?php echo e($item->itemStandardNumber->itemStandardName); ?> </td>
                                    </tr>
                                    <tr>
                                        <th>item Standard Number Value</th>
                                        <td><?php echo e($item->itemStandardNumberValue); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Edition</th>
                                        <td><?php echo e($item->edition); ?></td>
                                    </tr>

                                    <tr>
                                        <th>Issue</th>
                                        <td><?php echo e($item->issue); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Keywords</th>
                                        <td><?php echo $item->keywords; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Summary</th>
                                        <td><?php echo $item->summary; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Cover Picture</th>

                                        <td>

                                            <?php if(!$item->imageUrl==null): ?>
                                                <img width="150" src="<?php echo $item->imageUrl; ?>" alt="not found!">
                                            <?php else: ?>
                                                <img width="150"
                                                     src="<?php echo e(url('uploads/item/covers', $item->uploadImageUrl)); ?>"
                                                     alt="not found!">
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Item File</th>
                                        <td> <a href="<?php echo e(url('uploads/item/'.$item->pdfUrl)); ?>"><img width="100" src="<?php echo e(url('assets/image/download.png')); ?>" alt="not found!"></a>  </td>
                                    </tr>
                                    <tr>
                                        <th>Publication Year</th>
                                        <td><?php echo e($item->publicationYear); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Place Of Publication</th>
                                        <td><?php echo e($item->placeOfPublication); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>