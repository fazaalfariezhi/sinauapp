
@extends('landing.layouts.main')

@section('title', 'Belajar bareng bersama Sinau')
  <!-- ======= Header ======= -->
@include('landing.partials.navbar')
  <!-- ======= Hero Section ======= -->
@include('landing.partials.hero')
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>Apa itu Sinau?</h2>
            <h3>Sinau adalah aplikasi pembelajaran online berbasis web terbaik di Indonesia.</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Dengan penjelasan materi melalui video, kamu akan lebih mudah untuk memahami materi yang disampaikan, dan tentunya tidak mudah merasa bosan. Kalau ada yang tidak paham dengan apa ang disampaikan, kamu juga bisa kok untuk bertanya kepada mentor. Apa saja yang kami sediakan?
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>Pembelajaran yang Interaktif.</li>
              <li><i class="ri-check-double-line"></i>Video Pembelajaran yang Asik</li>
              <li><i class="ri-check-double-line"></i>Harga yang terjangkau</li>
            </ul>
            <p class="fst-italic">
              Jadi, tunggu apa lagi. Ayo daftar sekarang!
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">

          <div class="col-lg-4">
            <div class="box">
              <span>01</span>
              <h4>Pembelajaran yang Interaktif</h4>
              <p>Kamu bisa bertanya kepada Mentor.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>02</span>
              <h4>Video Pembelajaran yang Asik</h4>
              <p>Materi yang disampaikan mudah untuk dipahami, jadi kamu tidak akan merasa bosan untuk belajar.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>03</span>
              <h4>Harga yang terjangkau</h4>
              <p>Pasti kalian khawatir masalah harga. Gausah khawatir, untuk berlangganan dengan SinauApp sangat terjangkau kok! akan ada Diskon di setiap awal semester.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>Langganan</h2>
          <p>Kami menyediakan beberapa tawaran yang bagus untuk kamu.</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 box">
            <h3>Coba Gratis!</h3>
            <h4>Rp. 0<span>3 hari</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Akses untuk 1 Kelas</li>
              <li><i class="bx bx-check"></i>Akses untuk 3 Pelajaran</li>
              <li class="na"><i class="bx bx-x"></i> <span>Download Video Materi</span></li>
              <li class="na"><i class="bx bx-x"></i> <span>Tanya Jawab dengan Mentor</span></li>
            </ul>
            <a href="#" class="btn-buy">Yuk Cobain!</a>
          </div>

          <div class="col-lg-4 box featured">
            <h3>Penawaran terbaik!</h3>
            <h4>Rp. 420.000<span>per Semester</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Akses untuk 1 Kelas</li>
              <li><i class="bx bx-check"></i> Akses untuk semua Pelajaran</li>
              <li><i class="bx bx-check"></i> Download Video Materi</li>
              <li><i class="bx bx-check"></i> Tanya Jawab dengan Mentor</li>
            </ul>
            <a href="#" class="btn-buy">Berlangganan</a>
          </div>

          <div class="col-lg-4 box">
            <h3>Jangka Panjang</h3>
            <h4>Rp. 2.400.000<span class="mb-2">per Jenjang</span><span>SD/SMP/SMA</span></h4>
            <ul>
                <li><i class="bx bx-check"></i> Akses untuk 1 Jenjang</li>
                <li><i class="bx bx-check"></i> Akses untuk semua Pelajaran</li>
                <li><i class="bx bx-check"></i> Download Video Materi</li>
                <li><i class="bx bx-check"></i> Tanya Jawab dengan Mentor</li>
              </ul>
            <a href="#" class="btn-buy">Berlangganan</a>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
