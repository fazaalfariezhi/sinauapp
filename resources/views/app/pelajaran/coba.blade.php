@extends('app.layouts.main')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Semua Pelajaran</h1>
      </div>
      
      <div class="section-body">
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card">
              <div class="card-body text-center">
                <div class="mb-2">Confirmation</div>
                <button class="btn btn-primary" id="swal-6">Launch</button>
              </div>
            </div>
          </div>
      </div>
      <progress value="75" max="100"></progress>


      <div class="col-12 col-sm-6 col-lg-6">
        <div class="card">
          <div class="card-header">
            <h4>Show/Hide</h4>
            <div class="card-header-action">
              <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info" href="#"><i class="fas fa-minus"></i></a>
            </div>
          </div>
          <div class="collapse show" id="mycard-collapse">
            <div class="card-body">
              You can show or hide this card.
            </div>
            <div class="card-footer">
              Card Footer
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
@endsection