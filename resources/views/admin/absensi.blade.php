@extends('layouts.admin.admin')
@section('content')



<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Absensi</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="#calonindex">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Absensi</li>
            </ol>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Absensi
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
                                            <th>Jam </th>
                                            <th>Hari</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($absensi as $u)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$u->user->no_peserta}}</td>
                                                <td>{{$u->user->name}}</td>
                                                <td>{{$u->user->universitas}}</td>
                                                @php     
                                                $datetime = new DateTime( $u->absensi, new DateTimeZone( "Asia/Jakarta" ) );
                                                @endphp
                                                
                                                <td>{{$datetime->format( 'H:i:s' )}}</td>
                                                <td>{{$datetime->format( 'd-m-Y' )}}</td>
                                                <td>{{$u->status}}</td>

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
