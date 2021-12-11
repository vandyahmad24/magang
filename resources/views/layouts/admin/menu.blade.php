<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            {{-- menu untuk admin --}}
            {{-- @if (Auth::user()->level=='admin') --}}
            <div class="nav">
                <a class="nav-link" href="/admin_dashboard">
                    Dashboard
                </a>
                {{-- <a class="nav-link" href="{{route('master')}}">
                    Data Master
                </a> --}}
                <a class="nav-link" href="{{route('admin.rekap-perbulan')}}">
                    Rekap Magang
                </a>
                <a class="nav-link" href="{{route('admin.pelamar')}}">
                    Daftar Pelamar
                </a>
                <a class="nav-link" href="{{route('admin.tolak')}}">
                    Daftar Ditolak
                </a>
                <a class="nav-link" href="{{route('admin.konfirmasi')}}">
                    Daftar Konfirmasi
                </a>
                <a class="nav-link" href="{{route('admin.absensi')}}">
                    Daftar Absensi
                </a>
                <a class="nav-link" href="{{route('admin.penilaian')}}">
                    Daftar Penilaian
                </a>
              
               
               
            </div>
          
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Login Sebagai: {{Auth::user()->name}}</div>
             Level: {{Auth::user()->level}}
        </div>
    </nav>
</div>