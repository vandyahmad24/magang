@extends('layouts.front.front')

@section('content')
<main id="main" data-aos="fade-up" class="aos-init aos-animate">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Formulir</h2>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('home')}}">Akun</a></li>
                    <li>Formulir</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <center>
                <h4>Formulir Pendaftaran</h4>
                <h5>Magang</h5>
            </center>
        </div>
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center">
                <div class="col-md-4" style="margin-right: 10px">
                    <h5>Data Pribadi Peserta</h5>
                    <form method="post" action="{{route('user.formulir.post',Auth::user()->id)}}">
                        @csrf
                        <div class="mb-3">
                          <label for="" class="form-label">NIM</label>
                          <input type="text" class="form-control" id="" readonly value="{{Auth::user()->nim}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="" readonly value="{{Auth::user()->name}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" id="" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control" required>
                                <option value="laki-laki">Laki - laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Alamat</label>
                            <textarea name="alamat" id="" cols="5" rows="2" class="form-control" required></textarea>
                        </div>
                </div>
                <div class="col-md-4">
                    <h5><br></h5>
                        <div class="mb-3">
                            <label for="" class="form-label">Universitas</label>
                            <input type="text" name="universitas" class="form-control" value="{{Auth::user()->universitas}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Fakultas/Prodi</label>
                            <input type="text" name="fakultasi" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Alamat Kampus</label>
                            <input type="text" name="alat_kampus" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Waktu Awal Magang</label>
                            <input type="date" name="start_magang" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Waktu Akhir Magang</label>
                            <input type="date" name="selesai_magang" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="text" name="fakultasi" class="form-control" value="{{Auth::user()->email}}" readonly required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">No Telepon</label>
                            <input type="number" name="no_telpon" class="form-control" required>
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