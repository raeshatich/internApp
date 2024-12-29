@extends('layout.auth')
@section('auth')
    

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session()->has('loginError'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{ session('loginError') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="container">

    <!-- Outer Row -->
         <div class="row justify-content-center">

        <div class="col-lg-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row"> 
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900"><?php echo "Selamat Datang Calon Peserta Magang KPK "  . date("Y") . "!" ?></h1>
                                    <p>Silahkan Login</p>
                                </div>
                                <form class="user" method="POST" action="/login">
                                      @csrf
                                    <div class="form-group">
                                        
                                        <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" id="email" placeholder="Masukkan email kamu..." autofocus required> 
                                        @error('email')
                                        <div class="invalid-feedback">
                                          {{ $message }}
                                        </div>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" id="password" placeholder="Masukkan password kamu..." required>
                                        @error('password')
                                        <div class="invalid-feedback">
                                          {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <button class="btn btn-primary btn-user btn-block"  type="submit">Login</button>

                                </form>
                                <hr>
                                <div class="text-center">
                                    Belum punya akun? 
                                    <a class="small" href="{{ url('/register')}}">Register dulu ya!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>


@endsection