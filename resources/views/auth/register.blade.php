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
                        <h4 class="text-white text-center mb-0">Create a new Account</h4>
                    </div>
                    <div class="card-body p-4 mt-2">
                        <form method="POST" action="{{ route('register') }}" class="p-3">
                            @csrf

                            <div class="form-group mb-3">
                                <input id="name" type="text" placeholder="Names" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="form-group text-center mt-5 mb-4">
                                <button class="btn btn-primary waves-effect width-md waves-light" type="submit"> Register </button>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-sm-12 text-center">
                                    <a href="/login">Already have account?</a>
                                </div>
                            </div>
                            <div class="col-sm-12 text-center mt-3">
                                <a href="/"><i class="fas fa-home"></i></a>
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
