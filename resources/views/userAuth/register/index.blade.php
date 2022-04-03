@extends('userAuth.layouts.main')

@section('title', 'Daftar')

@push('register')
  <link rel="stylesheet" href="node_modules/selectric/public/selectric.css">
@endpush	

@section('container')

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header d-block text-center"><h4>Daftar dulu yuk.</h4></div>

              <div class="card-body">
                <form action="/register" method="POST" novalidate="" class="needs-validation">
					@csrf
                    <div class="form-group">
                      <label for="nama_lengkap">Nama Lengkap</label>
                      <input id="nama_lengkap" type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" required autofocus value="{{ old('nama_lengkap') }}">
						@error('nama_lengkap')
						<div class="invalid-feedback">
						  {{ $message }}
						</div>
						@enderror
                    </div>

					<div class="row">
						<div class="form-group col-6">
						  <label for="username">Username</label>
						  <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required>
							@error('username')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
						<div class="form-group col-6">
                            <label for="role">Daftar Sebagai</label>
                            <select class="form-control selectric @error('role') is-inalid @enderror" name="role" required>
                                <option value="" disabled selected>Pilih Role</option>
                                <option value="murid">Murid</option>
                                <option value="mentor">Mentor</option>
                            </select>
                          @error('role')
                          <div class="invalid-feedback">
                              <p>Kamu belum mengisi Daftar sebagai apa</p>
                          </div>
                          @enderror
                          
                        </div>
						
					</div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                              @error('email')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                              @enderror
                        </div>
                        <div class="form-group col-6">
                          <label for="password" class="d-block">Password</label>
                          <input id="password" type="password" class="form-control pwstrength @error('password') is-invalid @enderror" data-indicator="pwindicator" name="password" value="{{ old('password') }}"  required>
                                  @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                          <div id="pwindicator" class="pwindicator">
                            <div class="bar"></div>
                            <div class="label"></div>
                          </div>
                        </div>
                    </div>

                  <div class="form-divider">
                    Informasi tentang kamu
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
						<label for="tgl_lahir">Tanggal Lahir</label>
						<input id="tgl_lahir" type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" value="{{ old('tgl_lahir') }}" required>
							@error('tgl_lahir')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
							@enderror
                    </div>
                    <div class="form-group col-6">
                      <label for="j_kelamin">Jenis Kelamin</label>
                      <select class="form-control selectric @error('j_kelamin') is-inalid @enderror" name="j_kelamin" required>
						<option disabled value="" selected>Pilih Jenis Kelamin Kamu</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
					</select>
					@error('j_kelamin')
					<div class="invalid-feedback">
						<p>Kamu belum mengisi Jenis Kelaminmu</p>
					</div>
					@enderror
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Daftar
                    </button>
                  </div>
                  <p class="text-center">Sudah Mendaftar? <a href="/login">Login disini!</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

@push('name')
<script src="node_modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
<script src="node_modules/selectric/public/jquery.selectric.min.js"></script>
<script src="assets/js/page/auth-register.js"></script>	
@endpush


@endsection
