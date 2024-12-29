<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Web Magang | {{ $title }} </title>
    <link rel="icon" href="assets/img/logo.png" type="image/png" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    

    <link rel="stylesheet" href="./assets/css/home.css" type="text/css">
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <link href="navbar.css" rel="stylesheet">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">


    

    <!-- Bootstrap core CSS -->

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    
  </head>
  <body class="text_align_center">
    <section class="navigation">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
              <a class="navbar-brand" href="/home">
                <img src="assets/img/logo.png" width="40%"alt="">

              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/anggota">Anggota</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/syarat">Persyaratan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/info">Informasi</a>
                  </li>
                  @auth
                  <li class="nav-item">
                    <a class="nav-link" href="/info">
                      Welcome back, {{ auth()->user()->name }}
                    </a>
                  </li>
                  <li class="nav-item">
                    <form action="/logout" method="post">
                      @csrf
                      <button type="submit">Logout</button>
                    </form>
                  </li>
                  @else
                  <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                  </li>
                  @endauth
                  
                </ul>
                
              </div>
            </div>
          </nav>
    </section>
    <section class="hero">
        <h1>Mau Magang di KPK?</h1>
        <p> Langsung daftarin diri kamu sekarang sesuai minat kamu dan lengkapi informasi profilmu.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
         
          <button type="button" class="btn btn-warning btn-round ml-auto" data-bs-toggle="modal" data-bs-target="#addModal">
            Daftar
            <i class="bi bi-plus-lg">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
              </svg>
            </i>
          </button>
        </div>  
    </section>
    

    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Tambah Kategori</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              
            </button>
          </div>
          <form action="/home/store" enctype="multipart/form-data" method="POST">
           @csrf 
          <div class="modal-body">
            <form >
              <div class="row g-3">
                <div class="col-sm-12">
                  <label> Nama Lengkap</label>  
                  <input type="text" name="nama_daftar" id="nama_daftar" class="form-control" placeholder="Nama Lengkap..." required>

                </div>
                <div class="col-sm-12">
                  <label> Email...</label>  
                  <input type="email" name="email" id="email" class="form-control" placeholder="you@example.com" required>

                </div>
                <div class="col-sm-6">
                  <label> NIK</label>  
                  <input type="text" name="nik" id="nik" class="form-control" placeholder="NIK..." required>

                </div>
                <div class="col-sm-6">
                  <label> Nomor Telepon</label>  
                  <input type="text" name="notel" id="notel" class="form-control" placeholder="Nomor Telepon..." required>

                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label> Jenis Kelamin</label>
                    <div class="form-check">
                      <input type="radio" class="form-check-input"
                      name="jk" id="jkl" value="laki-laki">
                      <label>Laki-laki</label>
                      
                    </div>
                    <div class="form-check">
                      <input type="radio" class="form-check-input"
                      name="jk" id="jkp" value="perempuan">
                      <label>Perempuan</label>
                    </div>
                  </div>

                </div>
                <div class="col-sm-12">
                  <label>Universitas</label>
                  <input type="text" class="form-control" name="univ" id="univ" placeholder="Universitas..." required>
                </div>

                <div class="col-sm-6">
                  <label>Program Studi</label>
                  <input type="text" class="form-control" name="ps" id="ps" placeholder="Program Studi..."  required>
                </div>

                <div class="col-sm-6">
                  <label>IPK Terakhir</label>
                  <input type="text" class="form-control" name="ipk" id="ipk" placeholder="IPK..." required>
                </div>

                <div class="mb-3">
                  <label>Input CV</label>
                  <input type="file" class="form-control" id="cv" name="cv" required>
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save changes</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        
        </div>
      </div>
    </div>
    </div>
    
  
    <div class="container">
      @yield('home')
      
    </div>
    
    <footer class="footer pt-3 mt-4 border-top text-muted">
    <?php echo "Hak Cipta ©" . date("Y") . " Komisi Pemberantasan Korupsi. Semua Hak Dilindungi." ?>
    </footer>
</main>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
