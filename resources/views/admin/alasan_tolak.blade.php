@extends('layouts.admin.admin')
@section('content')



<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Alasan Tolak</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.pelamar')}}">Pelamar</a></li>
                <li class="breadcrumb-item active">Data Pelamar Magang</li>
            </ol>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Pelamar Magang {{$user->name}}
                        </div>
                        <form method="POST" action="{{route("admin.alasan_tolak_post")}}">
                            @csrf
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    {{-- <div class="d-flex justify-content-center"> --}}
                                        <div class="col-md-12" >
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Nama Pelamar</label>
                                                    <input type="text" class="form-control" id="" readonly
                                                        value="{{$user->name}}" readonly>
                                                        <input type="hidden" name="id" value="{{$user->id}}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Alasan Tolak</label>
                                                    <input type="text" class="form-control" name="alasan_tolak" required>
                                                </div>
                                        </div>
                                </div>
                                <div class="row">
                                    
                                    <button class="btn btn-danger mb-3" type="submit">Submit</button>
                                </div>
                                  
                                    
                            </div>
                        </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </main>
    @endsection
