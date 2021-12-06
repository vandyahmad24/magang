@extends('layouts.admin.admin')
@section('content')



<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Pelamar Magang</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Pelamar Magang</li>
            </ol>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Pelamar Magang
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="#" class="datatables">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Peserta</th>
                                            <th>Nama</th>
                                            <th>Awal Magang</th>
                                            <th>Akhir Magang</th>
                                            <th>Nilai</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user as $u)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$u->no_peserta}}</td>
                                                <td>{{$u->name}}</td>
                                                <td>{{date("d-m-Y", strtotime($u->profile->start_magang))}}</td>
                                                <td>{{date("d-m-Y", strtotime($u->profile->selesai_magang))}}</td>
                                                <td>{{$u->nilai}}</td>
                                                <td>
                                                    <a href="{{route('admin.detailpenilaian',$u->id)}}" class="btn btn-primary">Detail</a>
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
