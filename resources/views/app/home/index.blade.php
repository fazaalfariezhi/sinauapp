@extends('app.layouts.main')
@section('title', 'Home')

@section('searchMobile')
<li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
@endsection

@section('search')
<div class="search-element">
  <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
  <button class="btn" type="submit"><i class="fas fa-search"></i></button>
  <div class="search-backdrop"></div>
  <div class="search-result">
    <div class="search-header">
      Histories
    </div>
    <div class="search-item">
      <a href="#">How to hack NASA using CSS</a>
      <a href="#" class="search-close"><i class="fas fa-times"></i></a>
    </div>
    <div class="search-item">
      <a href="#">Kodinger.com</a>
      <a href="#" class="search-close"><i class="fas fa-times"></i></a>
    </div>
    <div class="search-item">
      <a href="#">#Stisla</a>
      <a href="#" class="search-close"><i class="fas fa-times"></i></a>
    </div>
    <div class="search-header">
      Result
    </div>
    <div class="search-item">
      <a href="#">
        <img class="mr-3 rounded" width="30" src="assets/img/products/product-3-50.png" alt="product">
        oPhone S9 Limited Edition
      </a>
    </div>
    <div class="search-item">
      <a href="#">
        <img class="mr-3 rounded" width="30" src="assets/img/products/product-2-50.png" alt="product">
        Drone X2 New Gen-7
      </a>
    </div>
    <div class="search-item">
      <a href="#">
        <img class="mr-3 rounded" width="30" src="assets/img/products/product-1-50.png" alt="product">
        Headphone Blitz
      </a>
    </div>
    <div class="search-header">
      Projects
    </div>
    <div class="search-item">
      <a href="#">
        <div class="search-icon bg-danger text-white mr-3">
          <i class="fas fa-code"></i>
        </div>
        Stisla Admin Template
      </a>
    </div>
    <div class="search-item">
      <a href="#">
        <div class="search-icon bg-primary text-white mr-3">
          <i class="fas fa-laptop"></i>
        </div>
        Create a new Homepage Design
      </a>
    </div>
  </div>
</div>
@endsection

@section('content')

<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Beranda</h1>
    </div>
    
    <div class="section-body">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h4>Navigation &amp; Indicator</h4>
            </div>
            <div class="card-body">
              <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-crop-image="200">
                    <img class="d-block w-100" src="../assets/img/news/img01.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item" data-crop-image="200">
                    <img class="d-block w-100" src="../assets/img/news/img07.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item" data-crop-image="200">
                    <img class="d-block w-100" src="../assets/img/news/img08.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Semua Pelajaran</h4>
            </div>
            <div class="row">
              <div class="col-md-3 ml-4">
                <div class="card card-danger">
                    <div class="chocolat-parent">
                        <a href="assets/img/math.jpg" class="chocolat-image" title="Matematika">
                          <div data-crop-image="145">
                            <img alt="image" src="assets/img/math.jpg" class="img-fluid">
                          </div>
                        </a>
                      </div>
                    <div class="card-header mb-0">
                      <h4>Matematika</h4>
                        <div class="card-header-action">
                            <div class="dropdown">
                            <a href="#" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Options</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                                    <a href="#" class="dropdown-item has-icon"><i class="far fa-edit"></i> Edit</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item has-icon text-danger"><i class="far fa-trash-alt"></i> Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="col-md-3 ml-2">
                <div class="card card-danger">
                    <div class="chocolat-parent">
                        <a href="assets/img/math.jpg" class="chocolat-image" title="Just an example">
                          <div data-crop-image="145">
                            <img alt="image" src="assets/img/math.jpg" class="img-fluid">
                          </div>
                        </a>
                      </div>
                    <div class="card-header mb-0">
                      <h4>Matematika</h4>
                        <div class="card-header-action">
                            <div class="dropdown">
                            <a href="#" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Options</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                                    <a href="#" class="dropdown-item has-icon"><i class="far fa-edit"></i> Edit</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item has-icon text-danger"><i class="far fa-trash-alt"></i> Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
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
