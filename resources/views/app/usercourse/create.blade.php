@extends('app.layouts.main')
@section('title', 'Membuat Materi')

@section('styleUpload')
  <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
@endsection

@section('beforeScript')
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
@endsection

@section('content')

<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Tambah Materi</h1>
    </div>
    
    <div class="section-body">
      <div class="row">
        <div class="col-lg-8">
          <div class="card">
            <form action="/home/mycourse" method="POST" enctype="multipart/form-data" onsubmit="setFormSubmitting()">
                @csrf
                <div class="card-header">
                    <h4>Isi Data Materi</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="title" class="form-label">Judul Materi</label>
                      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required>
                      @error('title')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="slug" class="form-label">Slug</label>
                      <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}" required placeholder="judul-materi">
                      <p class="text-muted">*huruf kecil dari judul</p>
                      @error('slug')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="jenjang_id">Jenjang</label>
                      <select class="custom-select" name="jenjang_id">
                        <option selected disabled value="">Pilih Jenjang</option>
                        @foreach ($jenjangs as $jenjang)
                        @if (old('jenjang_id') == $jenjang->id)
                        <option value="{{ $jenjang->id }}" selected>{{ $jenjang -> nama }}</option>
                        @else
                        <option value="{{ $jenjang->id }}">{{ $jenjang -> nama }}</option>
                        @endif
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="pelajaran_id">Mata Pelajaran</label>
                      <select class="custom-select" name="pelajaran_id">
                        <option selected disabled value="">Pilih Jenjang</option>
                        @foreach ($pelajarans as $pelajaran)
                        @if (old('pelajaran_id') == $pelajaran->id)
                        <option value="{{ $pelajaran->id }}" selected>{{ $pelajaran -> nama }}</option>
                        @else
                        <option value="{{ $pelajaran->id }}">{{ $pelajaran -> nama }}</option>
                        @endif
                        @endforeach
                      </select>
                    </div>
                    {{-- <div class="form-group">
                      <label for="image">Thumbnail Materi</label>
                      <input type="file" name="image" id="image" required class=" @error('image') is-invalid @enderror">
                      @error('image')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                    </div> --}}
                    <div class="form-group">
                      <label for="image">Thumbnail Materi</label>
                      <img class="img-preview img-fluid mb-3 col-sm-5" style="max-height: 400px;">
                      <input type="file" name="image" id="image" required class=" @error('image') is-invalid @enderror form-control" onchange="previewImage()">
                      @error('image')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="video">Video Materi</label>
                      <input type="file" name="video" id="video" required class="form-control @error('video') is-invalid @enderror">
                      @error('video')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="body" class="form-label mb-3">Penjelasan video</label>
                      <textarea name="body" id="body" cols="75" rows="5" class="d-block form-control @error('body') is-invalid @enderror" spellcheck="false" value="{{ old('body') }}"></textarea>
                      @error('body')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary" id="btn-create" type="submit">Tambahkan</button>
                  </div>
            </form>
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


@section('uploadScript')
{{-- <script>

  FilePond.registerPlugin(
    FilePondPluginImagePreview,
    FilePondPluginFileValidateSize,
    );
  
  const inputElement = document.querySelector('input[id="video"]');
  const pond = FilePond.create(inputElement);
  FilePond.setOptions({
    server: {
      process: '/home/my-course',
      revert: '/home/my-course/{my_course}',
      headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      }
    } 
});

    
</script> --}}
@endsection

{{-- @section('uploadScriptVideo')
<script>

  FilePond.registerPlugin(
    FilePondPluginImagePreview,
    FilePondPluginFileValidateSize,
    );
  
  const inputElement = document.querySelector('input[id="video"]');
  const pond = FilePond.create(inputElement);
  FilePond.setOptions({
    server: {
      process: '/home/my-course',
      revert: '/home/my-course/{my_course}',
      headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      }
    } 
  });

    
</script>
@endsection --}}
  
<script>

// const nama = document.querySelector('#nama');
// const slug = document.querySelector('#slug');

// nama.addEventListener('change', function(){
//   fetch('/home/pelajarans/checkSlug?nama=' + nama.value)
//     .then(response => response.json())
//     .then(data => slug.value = data.slug)
// });

function previewImage() {
  const image = document.querySelector('#image');
  const imgPreview = document.querySelector('.img-preview');

  imgPreview.style.display = 'block';

  const oFReader = new FileReader();
  oFReader.readAsDataURL(image.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
  }
}


var isDirty = function() { return false; }

window.onload = function() {
    window.addEventListener("beforeunload", function (e) {
        if (formSubmitting || !isDirty()) {
            return undefined;
        }
        
        var confirmationMessage = 'It looks like you have been editing something. '
                                + 'If you leave before saving, your changes will be lost.';

        (e || window.event).returnValue = confirmationMessage; //Gecko + IE
        return confirmationMessage; //Gecko + Webkit, Safari, Chrome etc.
    });
};


</script>



@endsection
