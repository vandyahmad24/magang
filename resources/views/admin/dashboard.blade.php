@extends('layouts.admin.admin')
@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>

            <div class="card mb-4">
                <div class="card-body">
                    Admin Magang PDAM
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">{{$pengajuan}} Perlu Verifikasi </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{route('admin.pelamar')}}">View Details</a>
                            <div class="small text-white"><svg class="svg-inline--fa fa-angle-right fa-w-8"
                                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                    data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                    </path>
                                </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body"> {{$absensi}} Absensi</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{route('admin.absensi')}}">View
                                Details</a>
                            <div class="small text-white"><svg class="svg-inline--fa fa-angle-right fa-w-8"
                                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                    data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                    </path>
                                </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">{{$penilaian}} Penilaian</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{route('admin.penilaian')}}">View Details</a>
                            <div class="small text-white"><svg class="svg-inline--fa fa-angle-right fa-w-8"
                                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                    data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                    </path>
                                </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            
        </div>
    </main>

    @endsection
