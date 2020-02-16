<?php if($items->count()>0): ?>
<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row">
        <div class="col-md-3 col-sm-4">
            <a href="<?php echo e(url('service/'.$item->category->itemCategoryShort.'/'.$item->slug)); ?>">
                <?php if(!$item->imageUrl == null): ?>
                    <img class='img-responsive item-cover-image' alt='' src="<?php echo e(url($item->imageUrl)); ?>">
                <?php else: ?>
                    <img class='img-responsive item-cover-image' alt=''
                         src="<?php echo e(url('uploads/item/covers', $item->uploadImageUrl)); ?>">
                <?php endif; ?>
            </a>
        </div>
        <div class="col-md-9 col-sm-8">
            <h3>

                <a href="<?php echo e(url('service/'.$item->category->itemCategoryShort.'/'.$item->slug)); ?>">
                    <?php if(isset($q)): ?>
                        <?php echo str_replace($q,"<span class='highlight'>$q</span>",$item->title); ?>

                    <?php else: ?>
                        <?php echo $item->title; ?>

                    <?php endif; ?>
                </a>

            </h3>
            <ul class="blog-info">
                <li>
                    <ul class="author-item-ul"><i class="fa fa-user"></i>
                        <?php $__currentLoopData = $item->author; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e(url('author',$author->slug)); ?>"><?php echo e($author->authorName); ?></a>

                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </li>
                <li><i class="fa fa-download"></i>
                    <?php echo FrontEnd::itemDownloadCount($item->id); ?>

                </li>
                <li><i class="fa fa-eye"></i>
                    <?php echo FrontEnd::itemViewCount($item->id); ?>

                </li>
            </ul>


            <p>

                <?php if(isset($q)): ?>
                    <?php echo str_replace($q,"<span class='highlight'>$q</span>",substr($item->summary, 0, 350)); ?>

                <?php else: ?>
                    <?php echo substr($item->summary, 0, 350); ?>

                <?php endif; ?>


            </p>












            <a class='more btn btn-cool-blues' href="<?php echo e(url('service/'.$item->category->itemCategory.'/'.$item->slug)); ?>">Read more<i
                        class='fa fa-angle-double-right'></i></a>
            <?php if(!$item->pdfUrl == null): ?>
                <?php echo Form::open(['url' => '/download/' . $item->id . '/' . $item->slug, 'class' => 'form-horizontal download-form', 'name' => $item->id]); ?>

                <input type='hidden' name='id' value="<?php echo e($item->id); ?>">
                <input type='hidden' name='slug' value="<?php echo e($item->slug); ?>">
                <a class="btn btn-dark-blue" href="<?php echo e(url('download/'.$item->id.'/'.$item->slug)); ?>"><i class='fa fa-download'></i>
                    <input type='submit' class='download' value='Download'>
                </a>

                <?php echo Form::close(); ?>

            <?php endif; ?>
        </div>
    </div>
    <hr class="blog-post-sep">
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo e($items->links()); ?>

<?php else: ?>
    <div class="row">
        There are not found any data!
    </div>
<?php endif; ?>

<?php $__env->startPush('style'); ?>
    <style>
        .btn-cool-blues {
            background: #2193b0;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #6dd5ed, #2193b0);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #6dd5ed, #2193b0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            color: #fff!important;
            border: 3px solid #eee;
            line-height: 35px;
        }

        .btn-dark-blue {
            background: #7474BF;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #348AC7, #7474BF);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #348AC7, #7474BF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            color: #fff!important;
            border: 3px solid #eee;
            text-decoration: none;
            line-height: 35px;
        }
        .btn-dark-blue:focus {
            background-color:#2193b0;
        }
        .download:hover{text-decoration: none}

        .btn-cool-blues:focus {
            background-color:#4086C5;
        }
    </style>
    <?php $__env->stopPush(); ?>