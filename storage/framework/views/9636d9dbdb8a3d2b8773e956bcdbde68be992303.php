
<div class="form-group <?php echo e($errors->has('title') ? 'has-error' : ''); ?>">
    <label for="title" class="col-md-4 control-label"><?php echo e('Title'); ?></label>
    <div class="col-md-6">
        <?php echo Form::text('title', null, ['class' => 'form-control','maxlength'=>'500']); ?>

        <?php echo $errors->first('title', '<p class="help-block">:message</p>'); ?>

    </div>
</div>
<div class="form-group <?php echo e($errors->has('authors_ids') ? 'has-error' : ''); ?>">
    <label for="authors" class="col-md-4 control-label"><?php echo e('Authors'); ?></label>
    <div class="col-md-6">
        <?php echo Form::select('authors_ids[]', $authors, isset($selected_author)?$selected_author:null, ['class' => 'form-control','id'=>'author_ids', 'multiple' => 'multiple']); ?>

        <?php echo $errors->first('authors_ids', '<p class="help-block">:message</p>'); ?>

    </div>
</div>

<div class="form-group <?php echo e($errors->has('edition') ? 'has-error' : ''); ?>">
    <label for="edition" class="col-md-4 control-label"><?php echo e('Edition'); ?></label>
    <div class="col-md-6">
        <?php echo Form::text('edition', null, ['class' => 'form-control','maxlength'=>'20']); ?>

        <?php echo $errors->first('edition', '<p class="help-block">:message</p>'); ?>

    </div>
</div>



<div class="form-group <?php echo e($errors->has('publisher_id') ? 'has-error' : ''); ?>">
    <?php echo Form::label('publisher_id', 'Publisher', ['class' => 'col-md-4 control-label']); ?>

    <div class="col-md-6">


        <?php echo Form::select('publisher_id',$publishers,null,['class' => 'form-control','placeholder'=>'Please Select','id'=>'publisher_id','required' => 'required']); ?>


            <?php echo $errors->first('publisher_id', '<p class="help-block">:message</p>'); ?>



    </div>
</div>


<div class="form-group <?php echo e($errors->has('placeOfPublication') ? 'has-error' : ''); ?>">
    <label for="placeOfPublication" class="col-md-4 control-label"><?php echo e('Place of Publication'); ?></label>
    <div class="col-md-6">
        <?php echo Form::text('placeOfPublication', null, ['class' => 'form-control','maxlength'=>'100']); ?>

        <?php echo $errors->first('placeOfPublication', '<p class="help-block">:message</p>'); ?>

    </div>
</div>

<div class="form-group <?php echo e($errors->has('publicationYear') ? 'has-error' : ''); ?>">
    <label for="publicationYear" class="col-md-4 control-label"><?php echo e('Publication Year'); ?></label>
    <div class="col-md-6">
        <?php echo Form::text('publicationYear', null, ['class' => 'form-control','maxlength'=>'4']); ?>

        <?php echo $errors->first('publicationYear', '<p class="help-block">:message</p>'); ?>

    </div>
</div>

<div class="form-group <?php echo e($errors->has('item_standard_number_id') ? 'has-error' : ''); ?>">
    <label for="item_standard_number_id" class="col-md-4 control-label"><?php echo e('Item Standard Number'); ?></label>
    <div class="col-md-6">
        <?php echo Form::select('item_standard_number_id', $itemStandardNumbers, null, ['placeholder' => 'Please select ...','class' => 'form-control']); ?>

        <?php echo $errors->first('item_standard_number_id', '<p class="help-block">:message</p>'); ?>

    </div>
</div>

<div class="form-group <?php echo e($errors->has('itemStandardNumberValue') ? 'has-error' : ''); ?>">
    <label for="itemStandardNumberValue" class="col-md-4 control-label"><?php echo e('Item Standard Number Value'); ?></label>
    <div class="col-md-6">
        <?php echo Form::text('itemStandardNumberValue', null, ['class' => 'form-control','maxlength'=>'20','id'=>'itemStandardNumberValue']); ?>

        <?php echo $errors->first('itemStandardNumberValue', '<p class="help-block" id="message">:message</p>'); ?>

        <span id="message"></span>

    </div>
</div>


<div class="form-group <?php echo e($errors->has('itemStandardNumberValue2') ? 'has-error' : ''); ?>">
    <label for="itemStandardNumberValue2" class="col-md-4 control-label"><?php echo e('Item Standard Number 2nd Value '); ?></label>
    <div class="col-md-6">
        <?php echo Form::text('itemStandardNumberValue2', null, ['class' => 'form-control','maxlength'=>'20','id'=>'itemStandardNumberValue2']); ?>

        <?php echo $errors->first('itemStandardNumberValue2', '<p class="help-block" id="message">:message</p>'); ?>

        <span id="message"></span>
    </div>
</div>


<div class="form-group <?php echo e($errors->has('departments_ids') ? 'has-error' : ''); ?>">
    <label for="departments" class="col-md-4 control-label"><?php echo e('Department'); ?></label>
    <div class="col-md-6">
        <?php echo Form::select('departments_ids[]', $departments, isset($selected_department)?$selected_department:null, ['class' => 'form-control js-example-basic-multiple', 'multiple' => 'multiple']); ?>

        <?php echo $errors->first('departments_ids', '<p class="help-block">:message</p>'); ?>

    </div>
</div>


<div class="form-group <?php echo e($errors->has('summary') ? 'has-error' : ''); ?>">
    <label for="summary" class="col-md-4 control-label"><?php echo e('Summary/ Abstract'); ?></label>
    <div class="col-md-6">
        <?php echo Form::textarea('summary', null, ['class' => 'form-control','maxlength'=>'1000']); ?>

        <?php echo $errors->first('summary', '<p class="help-block">:message</p>'); ?>

    </div>
</div>



<div class="form-group <?php echo e($errors->has('keywords') ? 'has-error' : ''); ?>">
    <label for="keywords" class="col-md-4 control-label"><?php echo e('Keywords'); ?></label>
    <div class="col-md-6">
        <?php echo Form::textarea('keywords', null, ['class' => 'form-control','maxlength'=>'250']); ?>

        <?php echo $errors->first('keywords', '<p class="help-block">:message</p>'); ?>

    </div>
</div>


<div class="form-group <?php echo e($errors->has('category_id') ? 'has-error' : ''); ?>">
    <label for="category_id" class="col-md-4 control-label"><?php echo e('Service Category'); ?></label>
    <div class="col-md-6">
        <?php echo Form::select('category_id', $itemCategories, null, ['placeholder' => 'Please select ...', 'class' => 'form-control', 'id'=>'category_id', 'required' => 'required']); ?>

        <?php echo $errors->first('category_id', '<p class="help-block">:message</p>'); ?>

    </div>
</div>




<div id="supervisorName">
    <div class="form-group <?php echo e($errors->has('supervisor_id') ? 'has-error' : ''); ?>">
        <label for="supervisor_id" class="col-md-4 control-label"><?php echo e('Supervisor'); ?></label>
        <div class="col-md-6">
            <?php echo Form::select('supervisor_id', $supervisors, (isset($item->itemSemesterSupervisor))?($item->itemSemesterSupervisor)?$item->itemSemesterSupervisor->supervisor_id:null:null, ['placeholder' => 'Please select ...', 'class' => 'form-control', 'id'=>'supervisor']); ?>

            <?php echo $errors->first('supervisor_id', '<p class="help-block">:message</p>'); ?>

        </div>
    </div>
    <div class="form-group <?php echo e($errors->has('semester_id') ? 'has-error' : ''); ?>">
        <label for="semester_id" class="col-md-4 control-label"><?php echo e('Semester'); ?></label>
        <div class="col-md-6">
            <?php echo Form::select('semester_id', $semesters, (isset($item->itemSemesterSupervisor))?($item->itemSemesterSupervisor)?$item->itemSemesterSupervisor->semester_id:null:null, ['placeholder' => 'Please select ...', 'class' => 'form-control', 'id'=>'semester_id']); ?>

            <?php echo $errors->first('semester_id', '<p class="help-block">:message</p>'); ?>

        </div>
    </div>
</div>








<div class="form-group <?php echo e($errors->has('issue') ? 'has-error' : ''); ?>">
    <label for="issue" class="col-md-4 control-label"><?php echo e('Issue'); ?></label>
    <div class="col-md-6">
        <?php echo Form::text('issue', null, ['class' => 'form-control','maxlength'=>'50']); ?>

        <?php echo $errors->first('issue', '<p class="help-block">:message</p>'); ?>

    </div>
</div>


<div class="form-group <?php echo e($errors->has('imageUrl') ? 'has-error' : ''); ?>">
    <label for="imageUrl" class="col-md-4 control-label"><?php echo e('Cover Image URL'); ?></label>
    <div class="col-md-6">
        <?php echo Form::text('imageUrl', null, ['class' => 'form-control','maxlength'=>'250']); ?>

        <?php echo $errors->first('imageUrl', '<p class="help-block">:message</p>'); ?>

    </div>
</div>


<div class="form-group ">
    <label for="imageUrl" class="col-md-4 control-label"></label>
    <div class="col-md-6">
        OR
    </div>
</div>

<div class="form-group <?php echo e($errors->has('uploadImageUrl') ? 'has-error' : ''); ?>">
    <label for="uploadImageUrl" class="col-md-4 control-label"><?php echo e('Upload Cover Image'); ?></label>
    <div class="col-md-6">
        <?php echo Form::file('uploadImageUrl', null, ['class' => 'form-control','maxlength'=>'250']); ?>

        <?php echo $errors->first('uploadImageUrl', '<p class="help-block">:message</p>'); ?>

        <span>Max file size 1 MB and .jpg, .png only</span>
    </div>
</div>

<div class="form-group <?php echo e($errors->has('pdfUrl') ? 'has-error' : ''); ?>">
    <label for="pdfUrl" class="col-md-4 control-label"><?php echo e('Item Upload '); ?></label>
    <div class="col-md-6">
        <?php echo Form::file('pdfUrl', null, ['class' => 'form-control','maxlength'=>'250']); ?>

        <?php echo $errors->first('pdfUrl', '<p class="help-block">:message</p>'); ?>

    </div>
</div>

<div class="form-group <?php echo e($errors->has('trial') ? 'has-error' : ''); ?>">
    <label for="isPublished" class="col-md-4 control-label"><?php echo e('Is Published'); ?></label>
    <div class="col-md-6">
        <div class="mt-radio-inline">
            <label class="mt-radio">
                <?php echo e(Form::radio('isPublished', 1,isset($item->isPublished)?(($item->isPublished==1)?true:false):true)); ?>

                Yes
                <span></span>
            </label>
            <label class="mt-radio">
                <?php echo e(Form::radio('isPublished', 0, isset($item->isPublished)?(($item->isPublished==0)?true:false):false)); ?>

                No
                <span></span>
            </label>
        </div>
        <?php echo $errors->first('isPublished', '<p class="help-block">:message</p>'); ?>

    </div>
</div>






<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="<?php echo e(isset($submitButtonText) ? $submitButtonText : 'Submit'); ?>">
    </div>
</div>

<?php $__env->startPush('style_plugins'); ?>
    <link href="<?php echo e(url('assets/admin/global/plugins/select2/css/select2.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <style>
        #supervisorName {
            display: none
        }
        input:required {
            content:"*";
            background: red;
            border: 2px solid gray;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts_plugins'); ?>
    <script src="<?php echo e(url('assets/admin/global/plugins/select2/js/select2.min.js')); ?>" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
            $('#publisher_id').select2({
                tags: true,
                tokenSeparators: [","],
            });
            $('#author_ids').select2({
                tags: true,
                tokenSeparators: [","],
            });

        });
        document.getElementById("item-form").onkeypress = function (e) {
            var key = e.charCode || e.keyCode || 0;
            if (key == 13) {
                e.preventDefault();
            }
        };

        $(document).ready(function () {
            var category = $('#category_id :selected').val();
            if (category == 7) {
                $('#supervisorName').show();
            } else {
                $('#supervisorName').hide('slow');
            }
        });

        $('#category_id').on('change', function () {
            if (this.value == 7) {
                $('#supervisorName').show('slow');
            } else {
                $('#supervisorName').hide('slow');
            }
        });

        $('#item_value').on('', function () {
            if (this.value == 7) {
                $('#supervisorName').show('slow');
            } else {
                $('#supervisorName').hide('slow');
            }
        });
        //title and name convert to slug value auto
        $(document).ready(function(){
            $("#itemStandardNumberValue").blur(function(e){
                var q = $(this).val().trim().toLowerCase().replace(/\s+/g, '-').replace(/\//g,'-');
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': Laravel.csrfToken
                    },
                    type: "POST",
                    url: '<?php echo e(url('/check-item-standard-value')); ?>',
                    data: {'q': q},
                    cache: false,
                    success: function (response) {
                        if (response){
                            $("#message").html("This ISBN number already added in our database.").addClass
                            ('red');
                        } else{
                            $("#message").html("This ISBN number it's new, go-ahead").addClass
                            ('green').hide(7500);
                        }
                    }
                });
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('styles'); ?>
    <style>
        .red{
            color: red;
        }
        .green{
            color: green;
        }
    </style>
    <?php $__env->stopPush(); ?>