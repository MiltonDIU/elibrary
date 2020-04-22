@extends('layouts.login_master')

@section('content')
    <form method="POST" action="{{ route('login') }}">

        @csrf
        <h3 class="form-title font-green">Sign In</h3>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <input id="email" type="text" autocomplete="off" placeholder="Email or Student/Employee ID"
                   class="form-control form-control-solid placeholder-no-fix {{ $errors->has('email') ? ' is-invalid' : '' }}"
                   name="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
                <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
            @endif
        </div>

        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <input id="password" type="password" autocomplete="off" placeholder="Password"
                   class="form-control form-control-solid placeholder-no-fix {{ $errors->has('password') ? ' is-invalid' : '' }}"
                   name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif
        </div>


        <div class="form-actions">
            <button type="submit" class="btn green uppercase">Login</button>

            <a class="forget-password" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
            <br>
             <a style="margin-top:-5px" class="forget-password" target="_blank" href="https://drive.google.com/file/d/1RjnFCJkMEeH1M261a7HDg4tqIHT51RVx/view?usp=sharing">
                {{ __('Login Tutorial') }}
            </a>
        </div>
        <div class="create-account">
            <p>
                <a href="{{url('register')}}" id="register-btn" class="uppercase">Create an account</a>
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
@endsection

@include('notification.notify')