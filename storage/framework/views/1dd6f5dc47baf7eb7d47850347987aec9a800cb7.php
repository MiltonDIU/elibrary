<div class="col-md-12">
    <?php echo Form::open(['url' => '#', 'class' => 'form-horizontal content-search-view2', 'files' => true]); ?>

    <div class="input-group col-md-12">
        <?php echo Form::text('q', null, ['class' => 'form-control','placeholder'=>'Keyword Search...', 'id'=>'searchText', 'required' => 'required']); ?>

        <?php echo $errors->first('q', '<p class="help-block">:message</p>'); ?>

        <span class="input-group-btn">
            <button class="btn btn-default" type="button" id="getItem">Search</button>
        </span>
    </div>
    <?php echo Form::close(); ?>

</div>
<?php $__env->startPush('script'); ?>
    <script type="text/javascript">

        $("form").keypress(function (e) {
            if (e.which == 13) {
                return false;
            }
        });


    </script>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript">
        $(function () {
            $("#searchText").keyup(function () {
                var q = $("#searchText").val();
                //alert("test");
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': Laravel.csrfToken
                    },
                    type: "POST",
                    url: '<?php echo e(url('/search')); ?>',
                    data: {'q': q},
                    cache: false,
                    success: function (response) {
                        //console.log(q);
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
                $.ajax({
                    url: url
                }).done(function (data) {
                    $('.table-responsive').html(data);

                }).fail(function () {
                    alert('Articles could not be loaded.');
                });
            }
        });
    </script>
<?php $__env->stopPush(); ?>
