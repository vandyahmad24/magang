@extends('layouts.front.front')

@section('content')
<main id="main" data-aos="fade-up" class="aos-init aos-animate">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Pengumuman</h2>
                <ol>
                    <li><a href="{{route('awal')}}">Home</a></li>
                    <li>Pengumuman</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <center>
                <h2>PENGUMUMAN MAGANG {{Auth::user()->name}}</h2>
            </center>
            <div class="row">
                <div class="container mt-5">
                    @if (Auth::user()->status_magang=="setuju")
                    Cetak Surat Balasan <a href="{{route('user.cetakhasilmagang',Auth::user()->id)}}">Cetak</a>
                    <br>
                        @if (Auth::user()->is_selesai==1)
                        Cetak Surat Selesai Magang <a href="{{route('user.cetakSelesaiMagang',Auth::user()->id)}}">Cetak</a>
                        @endif
                    @elseif (Auth::user()->status_magang=="pendaftaran")
                    Mohon Maaf Silahkan Tunggu Konfirmasi Dari Admin
                    @elseif (Auth::user()->status_magang=="tolak")
                    Cetak Surat Balasan <a href="{{route('user.tolak',Auth::user()->id)}}">Cetak</a>
                    @endif
                </div>
            </div>

        </div>
    </section>


</main>
@endsection
