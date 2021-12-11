<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Magang PDAM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.ico')}}" rel="icon">
  <link href="{{asset('assets/img/favicon.ico')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v3.6.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <!-- <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i> -->
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" >+6281000000000</a>
        <a href="#" >PDAM@gmail.com</a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="/">PDAM<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        @auth
          @if (Auth::user()->level=='magang')
          <ul>
            <li><a class="nav-link" href="{{route('home')}}">Akun</a></li>
            <li><a class="nav-link" href="{{route('user.validasi')}}">Status</a></li>
            <li><a class="nav-link " href="{{route('user.pengumuman-after')}}">Surat Balasan</a></li>
            <li><a class="nav-link" href="{{route('user.absensi')}}">Absensi</a></li>
            <li><a class="nav-link" href="{{route('user.hasilmagang')}}">Hasil Magang</a></li>
            <li>
            <a class="nav-link"  href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
          @else
          <ul>
            <li><a class="nav-link" href="{{route('awal')}}">Beranda</a></li>
            <li><a class="nav-link" href="{{route('profil')}}">Profil</a></li>
            <li><a class="nav-link" href="{{route('pendaftar')}}">Pendaftar</a></li>
            {{-- <li><a class="nav-link " href="{{route('pengumuman')}}">Pengumuman</a></li> --}}
            <li><a class="nav-link" href="{{route('informasi')}}">Informasi</a></li>
            <li><a class="nav-link" href="{{route('admin')}}">Dashboard</a></li>
          </ul>
          @endif
        @else     
        <ul>
          <li><a class="nav-link" href="{{route('awal')}}">Beranda</a></li>
          <li><a class="nav-link" href="{{route('profil')}}">Profil</a></li>
          <li><a class="nav-link" href="{{route('pendaftar')}}">Pendaftar</a></li>
          {{-- <li><a class="nav-link " href="{{route('pengumuman')}}">Pengumuman</a></li> --}}
          <li><a class="nav-link" href="{{route('informasi')}}">Informasi</a></li>
          <li><a class="nav-link" href="{{route('login')}}">Login</a></li>
          <li><a class="nav-link" href="{{route('register')}}">Sign Up</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        @endauth
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  
@yield('content')



<div class="container py-4">
    <div class="copyright">
      &copy; Copyright <strong><span>PDAM Kota Semarang</span></strong>. All Rights Reserved
    </div>
   
  </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('assets/vendor/purecounter/purecounter.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>