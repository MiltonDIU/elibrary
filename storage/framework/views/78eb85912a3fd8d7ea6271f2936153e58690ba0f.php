<?php $__env->startSection('content'); ?>
    <form method="POST" action="<?php echo e(route('login')); ?>">

        <?php echo csrf_field(); ?>
        <h3 class="form-title font-green">Sign In</h3>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <input id="email" type="text" autocomplete="off" placeholder="Email or Username"
                   class="form-control form-control-solid placeholder-no-fix <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"
                   name="email" value="<?php echo e(old('email')); ?>" required autofocus>
            <?php if($errors->has('email')): ?>
                <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <input id="password" type="password" autocomplete="off" placeholder="Password"
                   class="form-control form-control-solid placeholder-no-fix <?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>"
                   name="password" required>

            <?php if($errors->has('password')): ?>
                <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
            <?php endif; ?>
        </div>


        <div class="form-actions">
            <button type="submit" class="btn green uppercase">Login</button>

            <a class="forget-password" href="<?php echo e(route('password.request')); ?>">
                <?php echo e(__('Forgot Your Password?')); ?>

            </a>
        </div>
        <div class="create-account">
            <p>
                <a href="<?php echo e(url('register')); ?>" id="register-btn" class="uppercase">Create an account</a>
            </p>
        </div>
    </form>
    <?php /*?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <?php */?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.login_master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>