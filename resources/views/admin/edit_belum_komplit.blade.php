@extends('layouts.admin.admin')
@section('content')



<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Pelamar Magang</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.rekap-perbulan')}}">Pelamar</a></li>
                <li class="breadcrumb-item active">Data Pelamar Magang</li>
            </ol>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Pelamar Magang {{$user->name}}
                        </div>
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
                                        </div>
                                        <div class="col-md-6">
                                            <h5><br></h5>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Universitas</label>
                                                <input type="text" name="universitas" class="form-control"
                                                    value="{{$user->universitas}}">
                                            </div>
                                           
                                            <div class="mb-3">
                                                <label for="" class="form-label">Email</label>
                                                <input type="text" name="fakultasi" class="form-control"
                                                    value="{{$user->email}}" readonly>
                                            </div>
                                          

                                           
                                        </div>
                                    {{-- </div> --}}
                                </div>
                               
                                    
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </main>
    @endsection
