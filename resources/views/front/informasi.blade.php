@extends('layouts.front.front')

@section('content')
<main id="main" data-aos="fade-up" class="aos-init aos-animate">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Pendaftar</h2>
                <ol>
                    <li><a href="{{route('awal')}}">Home</a></li>
                    <li>Pendaftar</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <center>
                <h2>Informasi</h2>
                <h4>Informasi Magang PDAM</h4>
            </center>
            <div class="mt-5">
                <h5> Pendaftaran</h5>
                -Pilih menu sign up lalu isi semua data simpan email dan password untuk login
                <hr>
                <h5>Masuk</h5>
                -Pilih menu login masukkan email dan password, setelah masuk silahkan pilih menu Akun untuk melengkapi formulir dan upload berkas
                <hr>
                <h5>Berkas yang dibutuhkan</h5>
                -Surat magang dari kampus <br>
                -Surat pengantar dari kesbangpol <br>
                -KTM
            </div>

        </div>
    </section>


</main>
@endsection
