<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Web Magang | {{  $title }}</title>
    <link rel="icon" href="assets/img/logo.png" type="image/png" />


    <!-- Custom fonts for this template-->
    <link href="{{ url('sbadmin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url('sbadmin/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/auth.css" type="text/css">


</head>

<body>
    <div class="container mt-4">
        

    @yield('auth')
    </div>
    <footer class="footer pt-3 mt-4 border-top full text-muted">
      
        <?php echo "Hak Cipta ©" . date("Y") . " Komisi Pemberantasan Korupsi. Semua Hak Dilindungi." ?>

    
        </footer>
        
            <!-- Bootstrap core JavaScript-->
    <script src="{{ url('sbadmin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ url('sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    
    <!-- Core plugin JavaScript-->
    <script src="{{ url('sbadmin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    
    <!-- Custom scripts for all pages-->
    <script src="{{ url('sbadmin/js/sb-admin-2.min.js')}}"></script>
      </body>
    </html>