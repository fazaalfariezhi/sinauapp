@extends('userAuth.layouts.main')

@section('title', 'Login')
	

@section('container')

<body>
	<div id="app">
		<section class="section">
			<div class="d-flex flex-wrap align-items-stretch">
				<div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white p-3 mt-1">
					@if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible show fade">
                            <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>&times;</span>
                            </button>
                            {{ session('loginError') }}
                            </div>
                        </div>
					@endif
                    
					<div class="p-5 m-3">
                        <img src="assets/img/stisla-fill.svg" alt="logo" width="80" class="shadow-light rounded-circle mb-5 mt-2 pos">
                        <h4 class="text-dark font-weight-normal">Selamat datang di <span class="font-weight-bold">Sinau</span></h4>
                        <p class="text-muted">Sebelum kamu memulai belajar, kamu harus login atau daftar dulu jika belum mempunyai akun.</p>
                        <form method="POST" action="/login" class="needs-validation" novalidate="">
							@csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus value="{{ old('email') }}">
                                <div class="invalid-feedback">
                                    Please fill in your email
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="d-block">
                                    <label for="password" class="control-label">Password</label>
                                </div>
                                <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                <div class="invalid-feedback">
                                    please fill in your password
                                </div>
                            </div>

                            <div class="form-group">
                                {{-- <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                                    <label class="custom-control-label" for="remember-me">Remember Me</label>
                                </div> --}}
                            </div>

                            <div class="form-group text-right">
                                {{-- <a href="auth-forgot-password.html" class="float-left mt-3">Forgot Password?</a> --}}
                                <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
									Login
								</button>
                            </div>

                            <div class="mt-5 text-center">
                                Belum mempunyai akun? <a href="register">Daftar yuk!</a>
                            </div>
                        </form>

                        <div class="text-center mt-5 text-small">
                            Copyright &copy; SinauApp.
                            {{-- <div class="mt-2">
                                <a href="#">Privacy Policy</a>
                                <div class="bullet"></div>
                                <a href="#">Terms of Service</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="assets/img/unsplash/login-bg.jpg">
                    <div class="absolute-bottom-left index-2">
                        <div class="text-light p-5 pb-2">
                            <div class="mb-5 pb-3">
                                <h1 class="mb-2 display-4 font-weight-bold">Selamat Datang</h1>
                            </div>  
                            Photo by <a class="text-light bb" target="_blank" href="https://unsplash.com/@dollargill?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Dollar Gill</a> on <a class="text-light bb" target="_blank" href="https://unsplash.com/?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection