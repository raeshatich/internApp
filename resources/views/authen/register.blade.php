@extends("layout.auth")
@section('auth')
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Buat akun dulu yaa</h1>
                        </div>
                        <form class="user" method="POST" action="/register">
                            @csrf
                            <div class="form-group">
                                    <input type="text" name="name" class="form-control form-control-user @error('name')
                                    is-invalid @enderror" id="name" placeholder="Nama..." required value="{{ old('name') }}">
                                    @error('name')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user @error('email')" 
                                is-invalid @enderror id="email" name="email" placeholder="Email..." required value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                            <input type="password" class="form-control form-control-user" name="password"id="password" placeholder="Password">
                            </div>
                            <button class="btn btn-primary btn-user btn-block" type="submit">Register</button>
                            
                        </form>
                        <hr>
                        <div class="text-center">
                            Kamu sudah punya akun?
                            <a class="small" href="{{ url('/login')}}">Yuk login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="{{ url('sbadmin/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ url('sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ url('sbadmin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ url('sbadmin/js/sb-admin-2.min.js')}}"></script>

</body>

</html>

    
@endsection