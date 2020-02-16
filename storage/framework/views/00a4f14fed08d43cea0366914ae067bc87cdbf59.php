
<?php $__env->startSection('content'); ?>
    <form method="POST" action="<?php echo e(route('register')); ?>">
        <?php echo csrf_field(); ?>
        <h3 class="font-green">Sign Up</h3>
        <p class="hint"> Enter your personal details below: </p>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Name</label>
            <input id="name" type="text" placeholder="Name"
                   class="form-control placeholder-no-fix <?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name"
                   value="<?php echo e(old('name')); ?>" required autofocus>
            <?php if($errors->has('name')): ?>
                <span class="invalid-feedback">
                <strong><?php echo e($errors->first('name')); ?></strong>
                </span>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Email</label>
            <input id="email" placeholder="Email" type="email"
                   class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email"
                   value="<?php echo e(old('email')); ?>" required>
            <?php if($errors->has('email')): ?>
                <span class="invalid-feedback">
                <strong><?php echo e($errors->first('email')); ?></strong>
                </span>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Member Type</label>
            <?php echo Form::select('member_type', ['Concern'=>'Concern member','Guest'=>'Guest'], null, ['placeholder' => 'Please select member type', 'class' => 'form-control','onchange'=>'java_script_:show(this.options[this.selectedIndex].value)']); ?>

            <?php echo $errors->first('member_type', '<p class="invalid-feedback"><strong>:message</strong></p>'); ?>

        </div>
        <div class="form-group" id="sister_concern_id">
            <label class="control-label visible-ie8 visible-ie9">Concern Name</label>
            <?php echo Form::select('sister_concern_id', $concerns, null, ['placeholder' => 'Please select ...', 'class' => 'form-control']); ?>

            <?php echo $errors->first('sister_concern_id', '<p class="invalid-feedback">:message</p>'); ?>

        </div>
        <p class="hint"> Enter your account details below: </p>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <input id="username" type="text" placeholder="Username"
                   class="form-control placeholder-no-fix <?php echo e($errors->has('username') ? ' is-invalid' : ''); ?>"
                   name="username" value="<?php echo e(old('username')); ?>" autofocus>
            <?php if($errors->has('username')): ?>
                <span class="invalid-feedback">
                <strong><?php echo e($errors->first('username')); ?></strong>
                </span>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <input id="password" type="password" autocomplete="off" placeholder="Your Password"
                   class="form-control placeholder-no-fix<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>"
                   name="password">
            <?php if($errors->has('password')): ?>
                <span class="invalid-feedback">
                <strong><?php echo e($errors->first('password')); ?></strong>
                </span>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
            <input id="password-confirm" autocomplete="off" placeholder="Re-type Your Password" type="password"
                   class="form-control" name="password_confirmation">
        </div>
        <div class="form-actions">
            <a href="<?php echo e(url('login')); ?>" id="register-back-btn" class="btn green btn-outline">Login</a>
            <button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right">Submit</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript">
        function show(concern) {
            if (concern == "Concern") {
                sister_concern_id.style.display = 'inline-block';
                Form.fileURL.focus();
            }
            else {
                sister_concern_id.style.display = 'none';
            }
        }
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.login_master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>