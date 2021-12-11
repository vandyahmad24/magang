@extends('layouts.admin.admin')
@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>

            <div class="card mb-4">
                <div class="card-header">
                    <h1>Rekap Magang</h1>
                </div>
                <div class="card-body">
                    <form method="GET" action="{{route('admin.rekap-perbulan')}}">
                        @csrf
                        <div class="form-group mt-3">
                          <label for="exampleInputEmail1">Tanggal Awal</label>
                          <input type="date" value="{{$start}}" class="form-control" name="tanggal_awal" >
                        </div>
                        <div class="form-group mt-3">
                            <label for="exampleInputEmail1">Tanggal Akhir</label>
                            <input type="date" value="{{$end}}" class="form-control" name="tanggal_akhir" >
                          </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        <a href="{{route('cetak-rekap',['tanggal_awal'=>$start,'tanggal_akhir'=>$end])}}" class="btn btn-warning mt-3">Cetak</a>
                       

                      </form>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <h1>Daftar Peserta</h1>
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
                                        <td>{{date('d-m-Y',strtotime($u->created_at))}}</td>
                                        <td>
                                            @if ($u->status_magang=='pendaftaran')
                                               Belum Mengisi Formulir
                                            @elseif ($u->status_magang=='pengajuan')
                                                Butuh Konfirmasi
                                            @elseif ($u->status_magang=='setuju')
                                                Diterima
                                            @elseif ($u->status_magang=='tolak')
                                                Ditolak
                                            @else

                                            @endif
                                           </td>
                                        <td>
                                            {{-- <a href="{{route('admin.edit-perserta',$u->id)}}" class="btn btn-success">Edit</a> --}}
                                            <a href="{{route('admin.delete-perserta',$u->id)}}" class="btn btn-danger">Hapus</a>
                                        </td>
                                      
                                    </tr>
                                @endforeach
                                


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
         
           
            
        </div>
    </main>

    @endsection
