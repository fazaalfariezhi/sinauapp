@extends('app.layouts.main')
@section('title', 'Pelajaran Saya')

@section('content')

<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Pelajaran Kamu</h1>
    </div>
    
    <div id="section" class="section-body">
        <a href="/home/mycourse/create" class="btn btn-icon icon-left btn-primary mb-4 ml-3"><i class="fa fa-plus"></i>  Tambah Materi</a>
      <div class="row">
        <div class="col">
          <div class="card">
          @if ($materis->count())
          <div class="row py-4 px-3">
            @foreach ($materis as $course)

            <div class="col-12 col-xs-2 col-lg-4">
              <div class="card card-danger">
                <div class="chocolat-parent">
                  <a href="/home/mycourse/{{ $course->slug }}" class="chocolat-image" title="{{ $course->nama }}">
                    <div data-crop-image="145">
                      <img alt="image" src="{{ asset('storage/' . $course->image) }}" class="img-fluid">
                    </div>
                  </a>
                </div>
                <div class="card-header">
                  <a href="/home/mycourse/{{ $course->slug }}" class="text-decoration-none"><h4>{{ $course->title }}</h4></a>
                  <div class="card-header-action">
                    <div class="dropdown">
                      <a href="#" data-toggle="dropdown"><span class="fa fa-ellipsis-v"></span></a>
                      <div class="dropdown-menu">
                        <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                        <a href="/home/mycourse/{{ $course->slug }}/edit" class="dropdown-item has-icon"><i class="far fa-edit"></i> Edit</a>
                        <div class="dropdown-divider"></div>
                        <form action="/home/mycourse/{{ $course->slug }}" method="POST">
                          @csrf
                          @method('delete')
                          <button class="dropdown-item has-icon text-danger"><i class="far fa-trash-alt mt-2"></i>Delete</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="publishedAt">
                    <p class="">Di unggah oleh <a href="#">{{ $course->mentor->nama_lengkap }}</a> <small class="text-muted">{{ $course->created_at->diffForHumans() }}</small></p>
                  </div>  
                  <p class="text-dark">{{ $course->excerpt }}</p>
                </div>
              </div>
            </div>
              @endforeach
          </div>
          @else
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
                          <a href="/home/my-course" class="btn btn-warning mt-4">Refresh</a>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
          @endif
          </div>
        </div>
      </div>
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

    {{-- <script>
      $("#swal").click(function(e) {
        id = e.target.dataset.id;
        swal({
            title: 'Are you sure?'+id,
            text: 'Once deleted, you will not be able to recover this imaginary file!',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
            swal('Poof! Your imaginary file has been deleted!', {
              icon: 'success',
            });
            $('#delete${id}').submit();
            } else {
            swal('Your imaginary file is safe!');
            }
          });
      });
    </script> --}}

@endsection

