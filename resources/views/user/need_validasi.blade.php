@extends('layouts.front.front')

@section('content')
<main id="main" data-aos="fade-up" class="aos-init aos-animate">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Absensi</h2>
                <ol>
                    <li><a href="{{route('awal')}}">Home</a></li>
                    <li>Absensi</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <center>
                <h2>Status Anda Belum di Konfirmasi</h2>
                <h4>Silahkan Hubungi Admin PDAM Untuk Verifikasi Pendaftaran Anda</h4>
            </center>

            
        </div>
    </section>

    <br>
    <br>
</main>
@endsection
