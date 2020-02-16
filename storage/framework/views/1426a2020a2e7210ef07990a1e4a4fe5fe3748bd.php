<?php $__env->startSection('content'); ?>

    <form method="POST" action="<?php echo e(route('password.email')); ?>">
        <?php echo csrf_field(); ?>
        <h3 class="font-green">Forget Password ?</h3>
        <p> Enter your e-mail address below to reset your password. </p>
        <div class="form-group">
            <input id="email" type="email" placeholder="Email"
                   class="form-control placeholder-no-fix <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email"
                   value="<?php echo e(old('email')); ?>" required>
            <?php if($errors->has('email')): ?>
                <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
            <?php endif; ?>
        </div>
        <div class="form-actions">

            <a href="<?php echo e(url('login')); ?>" class="btn green btn-outline">Login</a>

            <button type="submit"
                    class="btn btn-success uppercase pull-right"><?php echo e(__('Send Password Reset Link')); ?></button>
        </div>
    </form>


    <?php /*?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
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

<?php echo $__env->make('layouts.login_master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>