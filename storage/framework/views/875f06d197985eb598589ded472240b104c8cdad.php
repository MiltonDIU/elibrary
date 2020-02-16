<div class="photo-stream">
    <h2>Recent Visitor</h2>
    <ul class="list-unstyled">
        <?php $__currentLoopData = FrontEnd::recentVisitors(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visitor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($visitor->user->imageIcon || $visitor->user->imageBase64): ?>
                <li>
                    <?php
                        $imageUrl = $visitor->user->imageBase64==null?url('uploads/profile/icon/'.$visitor->user->imageIcon)
                        :"data:image/png;base64,".$visitor->user->imageBase64;
                    ?>
                    <img alt="<?php echo e($visitor->user->displayName); ?>" src="<?php echo e($imageUrl); ?>">
                </li>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>