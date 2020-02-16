

<?php $__env->startSection('content'); ?>
   <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <?php if(Session::has('create')): ?>
                            <a href="<?php echo e(url('/admin/item/create')); ?>" class="btn btn-success btn-sm"
                               title="Add New item">
                                <i class="fa fa-plus" aria-hidden="true"></i> New Item
                            </a>
                        <?php endif; ?>


                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-equalizer font-red-sunglo"></i>
                                    <span class="caption-subject font-red-sunglo bold uppercase">Search by </span>
                                    <span class="caption-helper">Title, Authors, Department, Service etc.</span>
                                </div>
                                <div class="actions">
                                    <div class="panel panel-default">
                                        <?php echo Form::open(['url' => '#', 'class' => 'form-horizontal', 'files' => true]); ?>

                                        <div class="input-group">
                                            <?php echo Form::text('q', null, ['class' => 'form-control', 'id'=>'searchText', 'required' => 'required']); ?>

                                            <?php echo $errors->first('q', '<p class="help-block">:message</p>'); ?>

                                            <?php echo Form::hidden('edit',Session::get('viewIndex.edit')=="edit"?true:false,['id'=>'edit']); ?>

                                            <?php echo Form::hidden('show',Session::get('viewIndex.show')=="show"?true:false,['id'=>'show']); ?>

                                            <?php echo Form::hidden('destroy',Session::get('viewIndex.destroy')=="destroy"?true:false,['id'=>'destroy']); ?>

                                            <?php echo Form::hidden('slug',Session::get('controller.slug')?Session::get('controller.slug'):false,['id'=>'slug']); ?>

                                        </div>
                                        <?php echo Form::close(); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <?php if(count($items) > 0): ?>
                            <div class="table-responsive">
                                <?php echo $__env->make('admin.item.getItem', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>

<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>

    <script type="text/javascript">
        $(function () {
            $("#searchText").keyup(function () {
                var q = $("#searchText").val();
                var edit = $("#edit").val();
                var show = $("#show").val();
                var destroy = $("#destroy").val();
                var slug = $("#slug").val();
                // alert("test");
                //console.log(q);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': Laravel.csrfToken
                    },
                    type: "POST",
                    url: '<?php echo e(url('/item')); ?>',
                    data: {'q': q,'edit': edit,'destroy': destroy,'show': show,'slug':slug},
                    cache: false,
                    success: function (response) {
                        // $("#message").show(3000).html("ok ths is success").addClass('success').hide(5000);
                        $('.table-responsive').html(response);
                    }
                });
            });

            $('body').on('click', '.pagination a', function (e) {
                e.preventDefault();
                $('#load a').css('color', '#dfecf6');
                //$('#load').append('<img style="position: absolute; left: 0; top: 0; z-index: 100000;" src="http://blog.teamtreehouse.com/wp-content/uploads/2015/05/InternetSlowdown_Day.gif" />');
                var url = $(this).attr('href');
                getArticles(url);
                window.history.pushState("", "", url);
            });

            function getArticles(url) {
                var edit = $("#edit").val();
                var show = $("#show").val();
                var destroy = $("#destroy").val();
                var slug = $("#slug").val();
                $.ajax({
                    url: url,
                    data: {'edit': edit,'destroy': destroy,'show': show,'slug':slug},
                }).done(function (data) {
                    $('.table-responsive').html(data);
                }).fail(function () {
                    alert('Articles could not be loaded.');
                });
            }
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>