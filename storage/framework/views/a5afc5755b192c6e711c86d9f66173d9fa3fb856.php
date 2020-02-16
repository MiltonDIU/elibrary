<?php
    $path = request()->path();
    $pathArray = explode('/', $path);
    $urlPath ="";
    $numItems = count($pathArray);
    $i = 0;
?>
<ul class="breadcrumb margin-bottom-40 ">
    <li><a href="<?php echo e(url('/')); ?>">home</a></li>
    <?php $__currentLoopData = $pathArray; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $urlPath .="/$item";
        $item=ucwords(str_replace('-',' ',$item));
        ?>
        <?php if(++$i===$numItems): ?>
            <?php
                echo "<li class='active'>$item</li>";
            ?>
        <?php else: ?>
            <?php
                echo "<li><a href=".url($urlPath).">$item</a></li>";
            ?>
        <?php endif; ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>