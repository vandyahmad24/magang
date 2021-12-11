@extends('layouts.front.front')

@section('content')
<main id="main" data-aos="fade-up" class="aos-init aos-animate">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Update Berkas</h2>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('home')}}">Akun</a></li>
                    <li>Update Berkas</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <center>
                <h4>Update Berkas</h4>
                <h5>Magang</h5>
            </center>
        </div>
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center">
                <div class="col-md-6" >
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        {{ $error }} <br/>
                        @endforeach
                    </div>
                    @endif
                    <form method="post" action="{{route('user.berkas.put',$upload->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="" class="form-label">Upload Surat Magang</label>
                          <input type="file" class="form-control" id="" name="surat_magang" >
                          <small><a href="{{asset('uploads/'.$upload->surat_magang)}}" target="_blank">Lihat File</a></small>
                          <br>
                          <small>Tipe : PDF</small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Upload Surat Kesbangpol</label>
                            <input type="file" class="form-control" id="" name="kesbangkol" >
                            <small><a href="{{asset('uploads/'.$upload->kesbangkol)}}" target="_blank">Lihat File</a></small>
                            <br>
                            <small>Tipe : PDF</small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Upload Surat Balasan</label>
                            <input type="file" class="form-control" id="" name="foto_diri" >
                            <small><a href="{{asset('uploads/'.$upload->foto_diri)}}" target="_blank">Lihat File</a></small>
                            <br>
                            <small>Tipe : PDF</small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Upload KTM</label>
                            <input type="file" class="form-control" id="" name="ktm" >
                            <small><a href="{{asset('uploads/'.$upload->ktm)}}" target="_blank">Lihat File</a></small>
                            <br>
                            <small>Tipe : JPG/PNG</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                       
                    </form>
                </div>
               
            </div>
            </div>
        </div>
    </section>
    


</main>
@endsection
