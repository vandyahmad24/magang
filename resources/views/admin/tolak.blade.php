@extends('layouts.admin.admin')
@section('content')



<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Pelamar Magang Ditolak</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Pelamar Magang Ditolak</li>
            </ol>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Pelamar Magang Ditolak
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="#" class="datatables">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Peserta</th>
                                            <th>Nama</th>
                                            <th>Universitas</th>
                                            <th>NIM</th>
                                            <th>Tanggal Daftar</th>
                                            <th>Status</th>
                                            <th>Alasan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user as $u)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$u->no_peserta}}</td>
                                                <td>{{$u->name}}</td>
                                                <td>{{$u->universitas}}</td>
                                                <td>{{$u->nim}}</td>
                                                <td>{{$u->created_at}}</td>
                                                <td>{{$u->status_magang}}</td>
                                                <td>{{$u->alasan_tolak}}</td>
                                                <td>
                                                    <a href="{{route('admin.detail_pelamar',$u->id)}}" class="btn btn-primary">Detail</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
             
            </div>
         
        </div>
    </main>
    @endsection
