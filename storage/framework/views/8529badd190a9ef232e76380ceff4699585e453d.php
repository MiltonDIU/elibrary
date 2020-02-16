<?php echo e(count($items) ." out of ".$items->total()); ?>

<br>
<span>Query Time : </span>
<?php echo e($queryTime); ?>

<br>
<tr>
    <td colspan="5"><?php echo e($items->setPath('item')); ?></td>
</tr>
<table id="dataTables" class="table table-borderless">

    <thead>
    <tr>
        <th>Sl.No</th>
        <th>Title</th>
        <th>Publisher</th>
        <th>Item Standard Number</th>
        <th>Service Category</th>
        <th>Submit by</th>
        <?php if(Session::has('viewIndex')): ?>
        <th>Actions</th>
        <?php endif; ?>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($item->id); ?></td>
            <td><?php echo e($item->title); ?><br>
                <i class="icon-calendar font-blue"></i>
                <?php echo e(date_create($item->created_at)->format('d-m-Y')); ?>

            </td>
            <td><?php echo e($item->publisher->publisherName); ?></td>
            <td><?php echo e($item->itemStandardNumberValue); ?></td>
            <td><?php echo e($item->category->itemCategory); ?></td>
            <td><?php echo $item->user->displayName ."<br>". $item->user->diu_id; ?> </td>
            <!--just call static function with id-->
            <?php if(Session::has('viewIndex')): ?>
                <?php echo $__env->make('admin.action', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endif; ?>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>

    <tfoot>
    <tr>
        <td colspan="5"><?php echo e($items->setPath('item')); ?></td>
    </tr>
    </tfoot>

</table>
