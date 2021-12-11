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
                <h2>Pendaftar</h2>
                <h4>Daftar Peserta Magang PDAM</h4>
            </center>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>No Peserta</td>
                        <td>NIM</td>
                        <td>Nama Peserta</td>
                        <td>Universitas</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $u)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$u->no_peserta}}</td>
                        <td>{{$u->nim}}</td>
                        <td>{{$u->name}}</td>
                        <td>{{$u->universitas}}</td>
                       
                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
    </section>


</main>
@endsection
