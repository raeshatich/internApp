<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./assets/css/navbar.css" type="text/css">

    

    <!-- Bootstrap core CSS -->
    
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="navbar.css" rel="stylesheet">


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
  <nav class="navbar navbar-expand-lg navbar-light">
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


<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
