<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/detail.css" type="text/css">
    

    <title>Web Magang | {{ $title }}</title>
    <link rel="icon" href="assets/img/logo.png" type="image/png" />

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
      <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
          <div class="container">
            <a href="/home">
            <img src="./assets/img/logo.png" alt="" width="35%">
            </a>
      
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
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
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">|</a>
                </li>
                @can('admin')
              
                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Anggota
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/anggotacrud">Anggota</a></li>
                    <li><a class="dropdown-item" href="/unitcrud">Unit</a></li>
                    <li><a class="dropdown-item" href="/posisicrud">Posisi</a></li>
                    <li><a class="dropdown-item" href="/daftar">Pendaftar</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Persyaratan
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/syaratcrud">Syarat</a></li>
                    <li><a class="dropdown-item" href="/tatacrud">Tata Cara</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Informasi
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/infocrud">Informasi</a></li>
                    <li><a class="dropdown-item" href="/ketentuancrud">Ketentuan</a></li>
                  </ul>
                </li>
                @endcan
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Welcome back, {{ auth()->user()->name }}
      
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li class="nav-item">
                      <form action="/logout" method="post">
                        @csrf
                        <button type="submit">Logout</button>
                      </form>
                    </li>
                  </ul>
                </li>          
                
            </div>
          </div>
        </nav>
          
      </section>
  </head>
  <body>
<section class="layout_padding what_we_do">
    <div class="container">
        <div class="row">

        <div class="full">
            <h3>Detail Unit</h3>
        </div>

            <div class="full">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Detail</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    {{ $unit->nama_unit }}<br>
                                    {{ $unit->deskripsi }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
  <footer class="footer pt-3 mt-4 border-top text-muted">
    <?php echo "Hak Cipta ©" . date("Y") . " Komisi Pemberantasan Korupsi. Semua Hak Dilindungi." ?>
    </footer>
</html>
    

