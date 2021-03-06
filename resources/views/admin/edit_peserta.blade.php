@extends('layouts.admin.admin')
@section('content')



<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Pelamar Magang</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.rekap-perbulan')}}">Rekap</a></li>
                <li class="breadcrumb-item active">Data Pelamar Magang</li>
            </ol>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Pelamar Magang {{$user->name}}
                        </div>
                        <form action="">
                            @csrf
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                   
                                    {{-- <div class="d-flex justify-content-center"> --}}
                                        <div class="col-md-6" >
                                            <h5>Data Pribadi Peserta</h5>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">NIM</label>
                                                    <input type="text" class="form-control" id=""
                                                        value="{{$user->nim}}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Nama Lengkap</label>
                                                    <input type="text" class="form-control" id=""
                                                        value="{{$user->name}}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Tempat Lahir</label>
                                                    <input type="text" class="form-control" name="tempat_lahir"
                                                      value="{{$profile->tempat_lahir}}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Tanggal Lahir</label>
                                                    <input type="date" name="tanggal_lahir" class="form-control" id=""
                                                      value="{{$profile->tanggal_lahir}}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Jenis Kelamin</label>
                                                    {{-- <select name="jenis_kelamin" class="form-control"> --}}
                                                        
                                                        <select name="jenis_kelamin" class="form-control" required>
                                                            <option value="laki-laki" {{$profile->jenis_kelamin=="laki-laki" ? "selected":""}}>
                                                                Laki - laki</option>
                                                            <option value="perempuan" {{$profile->jenis_kelamin=="perempuan" ? "selected":""}}>
                                                                Perempuan</option>
                                                        </select>
                                                    {{-- </select> --}}
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Alamat</label>
                                                    <textarea name="alamat" id="" cols="5" rows="2" class="form-control"
                                                    >{{$profile->alamat}}</textarea>
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h5><br></h5>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Universitas</label>
                                                <input type="text" name="universitas" class="form-control"
                                                    value="{{$user->universitas}}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Fakultas/Prodi</label>
                                                <input type="text" name="fakultasi" class="form-control" value="{{$profile->fakultasi}}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Alamat Kampus</label>
                                                <input type="text" name="alat_kampus" class="form-control" value="{{$profile->alat_kampus}}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Waktu Awal Magang</label>
                                                <input type="date" name="start_magang" class="form-control" value="{{$profile->start_magang}}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Waktu Akhir Magang</label>
                                                <input type="date" name="selesai_magang" class="form-control" value="{{$profile->selesai_magang}}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Email</label>
                                                <input type="text" name="fakultasi" class="form-control"
                                                    value="{{$user->email}}" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">No Telepon</label>
                                                <input type="number" name="no_telpon" class="form-control" value="{{$profile->no_telpon}}" >
                                            </div>

                                           
                                        </div>
                                    {{-- </div> --}}
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Surat Magang</label>
                                            <br>
                                            <a href="{{asset('uploads/'.$upload->surat_magang)}}" target="_blank">Lihat File</a>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Kesbangkol</label>
                                            <br>
                                            <a href="{{asset('uploads/'.$upload->kesbangkol)}}" target="_blank">Lihat File</a>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Foto Diri</label>
                                            <br>
                                            <a href="{{asset('uploads/'.$upload->foto_diri)}}" target="_blank">Lihat File</a>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="" class="form-label">KTM</label>
                                            <br>
                                            <a href="{{asset('uploads/'.$upload->ktm)}}" target="_blank">Lihat File</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            
                                
                            </div>
                        </div>
                    </div>
                </form>
                </div>

            </div>

        </div>
    </main>
    @endsection
