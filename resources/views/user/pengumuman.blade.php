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
                <h2>DATA HASIL PESERTA MAGANG PDAM TIRTA MOEDAL</h2>
            </center>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>No Peserta</td>
                        <td>NIM</td>
                        <td>Nama</td>
                        <td>Tanggal Magang</td>
                        <td>Nilai</td>
                        <td>Keterangan</td>
                        <td>Cetak</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $u)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$u->no_peserta}}</td>
                        <td>{{$u->nim}}</td>
                        <td>{{$u->name}}</td>
                        <td>{{date("d-m-Y", strtotime($u->profile->start_magang))}} -
                            {{date("d-m-Y", strtotime($u->profile->selesai_magang))}}</td>
                        <td>{{$u->nilai}}</td>
                        <td>
                            @if ($u->nilai >75)
                            Lulus
                            @else
                            Tidak Lulus
                            @endif
                        </td>
                        <td>
                            @if (Auth::user()->id == $u->id)
                                @if ($u->nilai >75)
                                <a href="{{route('user.cetakhasilmagang',Auth::user()->id)}}">Cetak</a>
                                @else
                                Anda Tidak Lulus
                                @endif
                            @else
                            -
                            @endif
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>


</main>
@endsection
