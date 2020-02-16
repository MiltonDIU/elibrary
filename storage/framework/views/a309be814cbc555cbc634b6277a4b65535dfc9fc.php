<?php $__env->startSection('content'); ?>
                    <form method="POST" action="<?php echo e(route('password.request')); ?>">
                        <?php echo csrf_field(); ?>
                        <h3 class="font-green">Reset Password</h3>
                        <input type="hidden" name="token" value="<?php echo e($token); ?>">

                        <div class="form-group row">
                            <label for="email"
                                   class="control-label visible-ie8 visible-ie9"><?php echo e(__('E-Mail Address')); ?></label>


                            <input id="email" placeholder="Email Address" type="email"
                                   class="form-control form-control-solid placeholder-no-fix<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"
                                   name="email" value="<?php echo e(isset($email) ? $email : old('email')); ?>" required autofocus>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                   class="control-label visible-ie8 visible-ie9"><?php echo e(__('Password')); ?></label>
                            <input id="password" type="password" placeholder="Password"
                                   class="form-control form-control-solid placeholder-no-fix<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>"
                                   name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        </div>


                        <div class="form-group row">
                            <label for="password-confirm"
                                   class="control-label visible-ie8 visible-ie9"><?php echo e(__('Confirm Password')); ?></label>

                            <input id="password-confirm" placeholder="Confirm Password" type="password"
                                   class="form-control form-control-solid placeholder-no-fix <?php echo e($errors->has('password_confirmation') ? ' is-invalid' : ''); ?>"
                                   name="password_confirmation" required>

                                <?php if($errors->has('password_confirmation')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                    </span>
                                <?php endif; ?>

                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Reset Password')); ?>

                                </button>
                            </div>
                        </div>
                    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.login_master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>