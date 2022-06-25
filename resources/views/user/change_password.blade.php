@extends('layouts.front.front')

@section('content')
<main id="main" data-aos="fade-up" class="aos-init aos-animate">

    <section class="inner-page">
        <div class="container">
            <center>
            <div class="col-md-4">
                <div class="login-form">
                     <form method="POST" action="{{ route('change-password.post') }}">
                        @csrf
                        <h2 class="text-center">Ganti Password</h2>
                        
                        @if($errors->any())
                        <div class="alert alert-danger" role="alert">
                            {{$errors->first()}}
                        </div>
                        @endif
                        @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <ul>
                                    <li>{!! \Session::get('success') !!}</li>
                                </ul>
                            </div>
                        @endif
                        <div class="form-group mb-3">
                            <input type="password" class="form-control"  name="current_password" placeholder="Password Awal" required="required">
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" class="form-control"  name="password" placeholder="Password Baru" required="required">
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" class="form-control"  name="password_confirmation" placeholder="Konfirmasi Password" required="required">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary btn-block">Change Password</button>
                        </div>
                       
                    </form>
                    
                </div>
            </div>
        </center>
        </div>
    </section>


</main>
@endsection
