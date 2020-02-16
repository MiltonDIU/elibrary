<td>
    <?php echo e(Session::get('viewIndex.slug')); ?>

    <?php if(Session::get('viewIndex.show')=="show"): ?>
        <a href="<?php echo e(url('/admin/'. Session::get('controller.slug').'/'. $item->id)); ?>" title="View item">
            <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button>
        </a>
    <?php endif; ?>
    <?php if(Session::get('viewIndex.edit')=="edit"): ?>
        <a href="<?php echo e(url('/admin/' . Session::get('controller.slug').'/'. $item->id . '/edit')); ?>" title="Edit item">
            <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
            </button>
        </a>
    <?php endif; ?>
    <?php if(Session::get('viewIndex.destroy')=="destroy"): ?>
        <form method="POST" action="<?php echo e(url('/admin/' . Session::get('controller.slug').'/'. $item->id)); ?>"
              accept-charset="UTF-8"
              style="display:inline">
            <?php echo e(method_field('DELETE')); ?>

            <?php echo e(csrf_field()); ?>

            <button type="submit" class="btn btn-danger btn-sm" title="Delete item"
                    onclick="return confirm(&quot;Confirm; delete?;&quot;)"><i
                        class="fa fa-trash-o" aria-hidden="true"></i> Delete
            </button>
        </form>
    <?php endif; ?>
</td>