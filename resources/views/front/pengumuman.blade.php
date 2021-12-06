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
                <h2>Pengumuman</h2>
                <h4>Pengumuman Peserta Magang PDAM</h4>
            </center>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>No Peserta</td>
                        <td>NIM</td>
                        <td>Nama Peserta</td>
                        <td>Universitas</td>
                        <td>Seleksi</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $u)
                    @if ($u->status_magang=="setuju" || $u->status_magang=="tolak")
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$u->no_peserta}}</td>
                        <td>{{$u->nim}}</td>
                        <td>{{$u->name}}</td>
                        <td>{{$u->universitas}}</td>
                        <td>
                            @if ($u->status_magang=="setuju")
                                @auth
                                    {{-- Diterima Dengan Auth --}}
                                    @if (Auth::user()->id==$u->id)
                                        <a href="{{route('user.cetakpengumuman',$u->id)}}">Diterima</a>
                                        @else
                                        Diterima
                                    @endif

                                @else
                                Diterima Saja
                                @endauth
                                
                            @elseif ($u->status_magang=="tolak")
                                Ditolak 
                            @else
                                Menunggu Konfirmasi
                            @endif
                        </td>
                    </tr>  
                    @endif
                    
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>


</main>
@endsection
