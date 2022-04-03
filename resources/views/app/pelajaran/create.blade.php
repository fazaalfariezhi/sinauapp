@extends('app.layouts.main')
@section('title', 'Membuat Pelajaran')
    
@section('content')

<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Tambah Pelajaran</h1>
    </div>
    
    <div class="section-body">
      <div class="row">
        <div class="col-lg-8">
          <div class="card">
            <form action="/pelajarans" method="POST" id="isDirty" enctype="multipart/form-data" onsubmit="setFormSubmitting()">
                @csrf
                <div class="card-header">
                    <h4>Isi Data Pelajaran</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="nama" class="form-label">Nama Pelajaran</label>
                      <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" required>
                      @error('nama')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="slug" class="form-label">Slug</label>
                      <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}" required>
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
                      <label for="image" class="form-label">Gambar Pelajaran</label>
                      <img class="img-preview img-fluid mb-3 img-thumbnail col-sm-5 d-block " style="max-height: 400px;">
                      <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                      @error('image')
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
  
  const inputElement = document.querySelector('input[id="image"]');
  const pond = FilePond.create(inputElement);
  FilePond . setOptions ( { 
  server : { 
    url : '/filepond/api' , 
    proses : '/process' , 
    revert : '/process' , 
    headers : { 
      'X-CSRF-TOKEN' : '{{ csrf_token() }}' 
    } 
  } 
} ) ;

    
</script> --}}
@endsection
  
  
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


// var isDirty = function() { return false; }

// window.onload = function() {
//     window.addEventListener("beforeunload", function (e) {
//         if (formSubmitting || !isDirty()) {
//             return undefined;
//         }
        
//         var confirmationMessage = 'It looks like you have been editing something. '
//                                 + 'If you leave before saving, your changes will be lost.';

//         (e || window.event).returnValue = confirmationMessage; //Gecko + IE
//         return confirmationMessage; //Gecko + Webkit, Safari, Chrome etc.
//     });
// };

</script>



@endsection
