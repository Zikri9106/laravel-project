@extends('layouts.main')
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if (session()->has('loginError'))
        <div class="alert alert-danger col-lg-12" role="alert">
            {{ session('loginError') }}
        </div>
    @endif
    <div class="container-fluid ps-md-0">
        <div class="row g-0">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4">Welcome Back!</h3>

                                <form action="/login" method="POST">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">Email address</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" name="password" id="password"
                                            placeholder="Password">
                                        <label for="floatingPassword">Password</label>
                                    </div>

                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="rememberPasswordCheck">
                                        <label class="form-check-label" for="rememberPasswordCheck">
                                            Remember Me
                                        </label>
                                    </div>

                                    <div class="d-grid">
                                        <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2"
                                            type="submit">Log in</button>
                                        <div class="text-center">
                                            <a class="small" href="#">Forgot password?</a>
                                        </div>
                                        <div class="text-center mt-3">
                                            <p class="small">Don't have an account?<a class=""
                                                    href="/register">Register</a></p>
                                        </div>
                                    </div>

                                    <hr class="my-4">

                                    <div class="d-grid mb-2">
                                        <button class="btn btn-lg btn-google btn-login fw-bold text-uppercase"
                                            type="submit">
                                            <i class="fab fa-google me-2"></i> Log In with Google
                                        </button>
                                    </div>

                                    <div class="d-grid">
                                        <button class="btn btn-lg btn-facebook btn-login fw-bold text-uppercase"
                                            type="submit">
                                            <i class="fab fa-facebook-f me-2"></i> Log In with Facebook
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
