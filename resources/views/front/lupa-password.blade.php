@extends('layouts.front.front')

@section('content')
<main id="main" data-aos="fade-up" class="aos-init aos-animate">

    <section class="inner-page">
        <div class="container">
            <center>
            <div class="col-md-4">
                <div class="login-form">
                     <form method="POST" action="{{ route('forget-password') }}">
                        @csrf
                        <h2 class="text-center">Lupa Password</h2>
                        <h5>Reset Password ke password default</h5>
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
                            <input type="text" class="form-control"  name="email" placeholder="email" required="required">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                        </div>
                       
                    </form>
                    
                </div>
            </div>
        </center>
        </div>
    </section>


</main>
@endsection
