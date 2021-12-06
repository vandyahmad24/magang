@extends('layouts.front.front')

@section('content')
<main id="main" data-aos="fade-up" class="aos-init aos-animate">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Akun</h2>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Akun</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <center>
                <h1>Halaman Utama User</h1>
                <h4>Hai selamat datang {{Auth::user()->name}}</h4>
                <h5>Silahkan Lengkapi Biodata serta berkas & Dokumen yang diperlukan</h5>
            </center>
        </div>
    </section>
    <div class="inner-page mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    @if ($profile==null)
                    <a href="{{route('user.formulir')}}" style="text-decoration: none; color: #444444">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{asset('assets/img/false.png')}}" alt="" width="100%">
                            </div>
                            <div class="col-md-9">
                                <h3>Lengkapi Formulir</h3>
                                <p>Melengkapi formulir pendaftaran</p>
                            </div>
                        </div>
                    </a>
                    @else
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{asset('assets/img/true.png')}}" alt="" width="100%">
                        </div>
                        <div class="col-md-9">
                            <h3>Lengkapi Formulir</h3>
                            <p>Melengkapi formulir pendaftaran</p>
                        </div>
                    </div>
                    @endif
                   
                </div>
                <div class="col-md-4">
                    @if ($upload==null)
                    <a href="{{route('user.berkas')}}" style="text-decoration: none; color: #444444">
                        @else
                    <a href="{{route('user.berkas.update',$upload->id)}}" style="text-decoration: none; color: #444444">
                    @endif
                        <div class="row">
                            <div class="col-md-3">
                                @if ($upload!=null)
                                <img src="{{asset('assets/img/true.png')}}" alt="" width="100%"> 
                                @else
                                <img src="{{asset('assets/img/false.png')}}" alt="" width="100%">
                                @endif
                               
                            </div>
                            <div class="col-md-9">
                                <h3>Upload Berkas</h3>
                                <p>Mengupload dokumen & berkas</p>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-md-4">
                    @if ($profile==null)
                    <a href="" style="text-decoration: none; color: #444444">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{asset('assets/img/false.png')}}" alt="" width="100%">
                            </div>
                            <div class="col-md-9">
                                <h3>Lihat Data</h3>
                                <p>Edit dan Cetak Pendaftaran</p>
                            </div>
                        </div>
                    </a>
                    @else
                    <a href="{{route('user.formulir.update',$profile->id)}}" style="text-decoration: none; color: #444444">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{asset('assets/img/true.png')}}" alt="" width="100%">
                            </div>
                            <div class="col-md-9">
                                <h3>Lihat Data</h3>
                                <p>Edit dan Cetak Pendaftaran</p>
                            </div>
                        </div>
                    </a>
                    @endif
                    

                </div>
            </div>
        </div>
    </div>


</main>
@endsection
