@extends('layouts.front.front')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  <div class="container" data-aos="zoom-out" data-aos-delay="100">
    <h1>Selamat Datang <span></span></h1>
    <h2>Website Magang PDAM KOTA SEMARANG</h2>
    <div class="d-flex">
      @auth
      <a href="{{route('register')}}" class="btn-get-started scrollto">Home</a>
      @else
      <a href="{{route('register')}}" class="btn-get-started scrollto">Pendaftaran</a>
      @endauth
     </div>
  </div>
</section><!-- End Hero -->
  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Profil PDAM</h2>
        </div>

        <div class="row">
         
          <div class="col-lg-12 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3 class="text-center">PDAM atau Perusahaan Daerah Air Minum merupakan salah satu unit usaha milik daerah, yang yang bergerak dalam distribusi air bersih bagi masyarakat umum. PDAM terdapat di setiap provinsi, kabupaten, dan kotamadya di seluruh Indonesia. PDAM merupakan perusahaan daerah sebagai sarana penyedia air bersih yang diawasi dan dimonitor oleh aparat-aparat eksekutif maupun legislatif daerah.
            </h3>
            
         
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak</h2>
          <h3><span>Hubungi Kami</span></h3>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Alamat</h3>
              <p>Jl. Kelud Raya No.60, Petompon, Kec. Gajahmungkur, Kota Semarang, Jawa Tengah 50237</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>No Telpon</h3>
              <p>(024) 8315514</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15840.263899448873!2d110.402626!3d-7.0015134!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x45df144e649bf217!2sPDAM%20Tirta%20Moedal%20Kota%20Semarang!5e0!3m2!1sid!2sid!4v1637758799634!5m2!1sid!2sid" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>

          

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
@endsection