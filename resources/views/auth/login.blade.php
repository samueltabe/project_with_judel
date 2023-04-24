@extends('layouts.auth')

@section('content')

<body class="authentication-page">

    <div class="account-pages my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mt-4">
                        <div class="card-header bg-img p-5 position-relative">
                            <div class="bg-overlay"></div>
                            <h4 class="text-white text-center mb-0">Sign In</h4>
                        </div>
                        <div class="card-body p-4 mt-2">
                            <form method="POST" action="{{ route('login') }}" class="p-3">
                                @csrf

                                <div class="form-group mb-3">
                                    <input id="email" class="form-control" placeholder="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <input id="password" class="form-control" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                    </div>
                                </div>

                                <div class="form-group text-center mt-5 mb-4">
                                    <button class="btn btn-primary waves-effect width-md waves-light" type="submit"> Log In </button>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-sm-5">
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}"><i class="fa fa-lock mr-1"></i> Forgot password?</a>
                                        @endif
                                    </div>
                                    <div class="col-sm-2 text-center">
                                        <a href="/"><i class="fas fa-home"></i></a>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="/register">Create an account</a>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <!-- end row -->

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
    </div>


@endsection
