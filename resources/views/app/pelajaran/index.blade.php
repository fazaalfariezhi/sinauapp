@extends('app.layouts.main')
@section('title', 'Data Pelajaran')

@section('content')

<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Semua Pelajaran</h1>
    </div>
    
    <div id="section" class="section-body">
        <a href="/pelajarans/create" class="btn btn-icon icon-left btn-primary mb-4 ml-3"><i class="fa fa-plus"></i>  Tambah Pelajaran</a>
          @if ($pelajarans->count())
          <div class="row">
            <div class="col-12 col-md-8 col-lg-8">
              <div class="card">
                <div class="card-header">
                  <h4>Pelajaran</h4>
                </div>
                <div class="card-bod
                y">
                  <div class="table-responsive">
                    <table class="table table-bordered table-md">
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Jenjang</th>
                        <th>Action</th>
                      </tr>
                      @foreach ($pelajarans as $pelajaran)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pelajaran->nama }}</td>
                        <td></a><div class="badge badge-success">{{ $pelajaran->jenjang->nama }}</div></td>
                        <td>
                          <a href="/pelajarans/{{ $pelajaran->slug }}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                          <a href="/pelajarans/{{ $pelajaran->slug }}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                          {{-- <a href="#" class="badge badge-danger"><i class="fa fa-trash"></i></a> --}}
                          <form action="/pelajarans/{{ $pelajaran->slug }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            {{-- <input type="button" class="badge badge-danger"> --}}
                            <button class="btn btn-danger border-0" onclick="return confirm('Apakah anda yakin untuk menghapus Pelajaran ini?')"><i class="far fa-trash-alt mt-2" ></i></button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </table>
                  </div>
                </div>
                <div class="card-footer text-right mr-4">
                  <nav class="d-inline-block">
                    <ul class="pagination mb-0">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                      </li>
                      <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                      <li class="page-item">
                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
              {{-- @foreach ($pelajarans as $pelajaran)
              <div class="col-sm-3 col-lg-3">
                
                <div class="card card-info">
                    <div class="chocolat-parent">
                        <a href="{{ asset('storage/' . $pelajaran->image) }}" class="chocolat-image" title="{{ $pelajaran->nama }}">
                          <div data-crop-image="145">
                            <div class="position-absolute px-3 py-2 " style="background-color: rgba(0, 0, 0, 0.6); border-radius: 5px"><a href="/posts?category={{ $pelajaran-> jenjang -> slug }}" class="text-white text-decoration-none">
                              {{ $pelajaran -> jenjang -> nama }}</a>
                          </div>
                            <img alt="image" src="{{ asset('storage/' . $pelajaran->image) }}" class="img-fluid">
                          </div>
                        </a>
                      </div>
                    <div class="card-header mb-0">
                      <h4>{{ $pelajaran->nama }}</h4>
                        <div class="card-header-action">
                            <div class="dropdown">
                            <a href="#" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Options</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                                    <a href="/home/pelajarans/{{ $pelajaran->slug }}/edit" class="dropdown-item has-icon"><i class="far fa-edit"></i> Edit</a>
                                    <div class="dropdown-divider"></div>
                                    <form action="/home/pelajarans/{{ $pelajaran->slug }}" method="POST">
                                      @method('delete')
                                      @csrf
                                      <button class="dropdown-item has-icon text-danger" onclick="return confirm('Apakah anda yakin untuk menghapus Pelajaran ini?')"><i class="far fa-trash-alt mt-2" ></i> Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              @endforeach --}}
          </div>
          @else
              <div class="card">
                <div class="row px-5 py-4 justify-content-center">
                  <div class="col-lg-10">
                    <div class="card">
                      <div class="card-header justify-content-center">
                        <h4>Not Found</h4>
                      </div>
                      <div class="card-body">
                        <div class="empty-state" data-height="600">
                          <div class="img w-100 h-100">
                            <img class="img-fluid" src="{{ asset('assets/img/not-found.png') }}" alt="image" style="width: 450px; height: 450px;">
                          </div>
                          <h2 class="mt-0">Seperti nya tidak ada Pelajaran disini</h2>
                          <p class="lead">
                            Kita tidak bisa menemukan apa yang kamu cari, Coba untuk membuat satu pelajaran dan Refresh Halaman
                          </p>
                          <a href="/home/pelajarans" class="btn btn-warning mt-4">Refresh</a>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          @endif
    </div>
  </section>
</div>
<footer class="main-footer">
  <div class="footer-left">
    Copyright &copy; SinauApp 2021 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhammad Faza Al Fariezhi</a>
  </div>
  <div class="footer-right">
    2.3.0
  </div>
</footer>


@endsection
