<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Web Magang | {{  $title }}</title>
    <link rel="icon" href="assets/img/logo.png" type="image/png" />



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">

    <link rel="stylesheet" href="./assets/css/splash.css" type="text/css">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

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

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    
  </head>
  <body class="text_align_center">
    <section class="navigation">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
               <a class="navbar-brand" href="/">
                  <img src="assets/img/logo.png"width="40%" alt="">
  
                </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
               
                <div class="d-flex ms-auto" role="search">
                    <a class="btn btn-primary" href="/login" role="button">Login</a>
                </div>
              </div>
            </div>
          </nav>
    </section>

    <section class="hero">
        <h1>Selamat Datang di Web Magang KPK </h1>
        <p> Informasi lebih lengkap tentang Magang di KPK silahkan Login.</p>
       
        {{-- <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a class="btn btn-primary" href="/login" role="button">Login</a>
        </div> --}}
    </section>
    <main>
        <section class="layout_padding what_we_do">
          <div class="container">
             <div class="row">
                <div class="col-md-12">
                   <div class="full">
                     <h1> Alur Pendaftaran</h1><br>
                      
                   </div>
                   <table class="table table-bordered"> 
                    <thead>
                       <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Jadwal</th>
                       </tr>
                    </thead>
                    <tbody>
                       <tr>
                          <th>1</th>
                             <td>Pengumuman Pembukaan Program Magang</td>
                             <td>9 September 2022</td>
                       </tr>
                       <tr>
                          <th>2</th>
                          <td>Pendaftaran Program Magang</td>
                             <td>9 September s.d. 23 September 2022</td>
                          </tr>
                       <tr>
                          <th>3</th>
                             <td>Seleksi Program Magang</td>
                             <td>26 September s.d. 30 September 2022</td>
                          </tr>
                       <tr>
                          <th>4</th>
                             <td>Pengumuman Hasil Seleksi Program Magang</td>
                             <td>7 Oktober 2022</td>
                          </tr>
                       <tr>
                          <th>5</th>
                             <td>Start Pelaksanaan Program Magang</td>
                             <td>17 Oktober 2022</td>
                          </tr>
                    </tbody>
                 </table>
                 <h1>Catatan :</h1>
                        <p>Jadwal dapat berubah sewaktu-waktu, dimohon untuk cek web secara berkala</p>
                </div>
             </div>
        
          </section>
          
        </div>

    
    <footer class="footer pt-3 mt-4 border-top text-muted">
    <?php echo "Hak Cipta ©" . date("Y") . " Komisi Pemberantasan Korupsi. Semua Hak Dilindungi." ?>
    </footer>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
