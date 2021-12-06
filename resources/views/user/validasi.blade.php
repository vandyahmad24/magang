@extends('layouts.front.front')

@section('content')
<main id="main" data-aos="fade-up" class="aos-init aos-animate">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Validasi</h2>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Validasi</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <center>
                <h2>Prosedur</h2>
                <h3>Proses Validasi pendaftaran magang</h3>
            </center>
        </div>

        <div class="container mt-5">
            {{-- <center> --}}
            <div class="row mt-5">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <div class="col-md-8">
                            <div class="row border border-success">
                                <div class="col-md-4">
                                    <div class="d-flex justify-content-end">
                                        <img src="{{asset('assets/img/true.png')}}" width="30%">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <br>
                                    <h3>PROSES PENDAFTARAN</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if ($formulir==null)
            <div class="row mt-5">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <div class="col-md-8">
                            <div class="row border border-danger">
                                <div class="col-md-4">
                                    <div class="d-flex justify-content-end">
                                        <img src="{{asset('assets/img/false.png')}}" width="30%" style="
                                        margin-top: 20px;
                                    ">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <br>
                                    <h3>PROSES MENGISI BIODATA DAN UPLOAD BERKAS</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="row mt-5">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <div class="col-md-8">
                            <div class="row border border-success">
                                <div class="col-md-4">
                                    <div class="d-flex justify-content-end">
                                        <img src="{{asset('assets/img/true.png')}}" width="30%" style="
                                        margin-top: 20px;
                                    ">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <br>
                                    <h3>PROSES MENGISI BIODATA DAN UPLOAD BERKAS</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if (Auth::user()->status_magang=="setuju")
            <div class="row mt-5">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <div class="col-md-8">
                            <div class="row border border-success">
                                <div class="col-md-4">
                                    <div class="d-flex justify-content-end">
                                        <img src="{{asset('assets/img/true.png')}}" width="30%">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <br>
                                    <h3>PROSES VERIVIKASI DATA</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            @else
            <div class="row mt-5">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <div class="col-md-8">
                            <div class="row border border-danger">
                                <div class="col-md-4">
                                    <div class="d-flex justify-content-end">
                                        <img src="{{asset('assets/img/false.png')}}" width="30%">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <br>
                                    <h3>PROSES VERIVIKASI DATA</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endif
           

            {{-- </center> --}}
        </div>

    </section>



</main>
@endsection
