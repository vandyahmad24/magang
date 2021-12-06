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
    @if ($a==null)
    <section class="inner-page">
        <div class="container">
            <center>
                <h3>Entri Kehadiran</h3>
            </center>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-md-5">
                        <div class="mt-3">
                            <label for="" class="form-label">Jam</label>
                            @php
                                
                            $datetime = new DateTime( "now", new DateTimeZone( "Asia/Jakarta" ) );

                        // echo $datetime->format( 'Y-m-d H:i:s' );

                            @endphp
                            <input type="text" name="jam" class="form-control" readonly value="{{$datetime->format( 'H:i:s' )}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-md-5">
                        <div class="mt-3">
                            <label for="" class="form-label">Tanggal/Bulan/Tahun</label>
                            <input type="date" name="absensi" class="form-control" readonly value="{{$datetime->format( 'Y-m-d' )}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-md-5">
                        <div class="mt-3">
                        <a href="{{route('user.absensi.status','masuk')}}" class="btn btn-primary">Masuk</a>
                        <a href="{{route('user.absensi.status','ijin')}}" class="btn btn-warning">Ijin</a>
                        <a href="{{route('user.absensi.status','sakit')}}" class="btn btn-danger">Sakit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @else
    <section class="inner-page">
        <div class="container">
            <center>
                <h4>Anda Sudah Melakukan Absensi Pada</h4>
            </center>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-md-5">
                        <div class="mt-3">
                            <label for="" class="form-label">Jam</label>
                            @php
                                
                            $datetime = new DateTime( "now", new DateTimeZone( "Asia/Jakarta" ) );

                        // echo $datetime->format( 'Y-m-d H:i:s' );

                            @endphp
                            <input type="text" name="jam" class="form-control" readonly value="{{$datetime->format( 'H:i:s' )}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-md-5">
                        <div class="mt-3">
                            <label for="" class="form-label">Tanggal/Bulan/Tahun</label>
                            <input type="date" name="absensi" class="form-control" readonly value="{{$datetime->format( 'Y-m-d' )}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-md-5">
                        <div class="mt-3">
                            <label for="" class="form-label">Status</label>
                            <input type="text" name="absensi" class="form-control" readonly value="{{$a->status}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
   


</main>
@endsection
