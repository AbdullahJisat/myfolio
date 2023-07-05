<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    @include('backend\partials\links')
</head>

<body class="login-page">
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">

                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">Login</h2>
                        </div>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="input-group custom">
                                <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" placeholder="Name" name="name"
                                value="{{ old('name') ?: old('email') }}" autocomplete="name" required autofocus/>
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                </div>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="input-group custom">
                                <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="**********" name="password" required autocomplete="current-password"/>
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                </div>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row pb-30">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                                        <label class="custom-control-label" for="remember">
                                            {{ __('Remember Me') }}</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="forgot-password">
                                        <a href="forgot-password.html">Forgot Password</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
        </div>
    </div>

    @include('backend\partials\scripts')
</body>

</html>
