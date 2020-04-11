<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Maxim Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('user/assets/img/favicon.png') }}" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('user/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('user/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('user/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('user/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('user/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('user/assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('user/assets/css/style.css') }}" rel="stylesheet">

  
</head>
<style>
  input[type=email], select {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=password], select {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=text], select {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  
  input[type=submit] {
    width: 30%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color: #45a049;
  }
  
  </style>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="{{ url('/') }}">book now</a></h1>
        
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        <li>
        
         <a href="#" data-toggle="modal" data-target="#exampleModalCenter">BOOK NOW</a>
     </li>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="{{ url('hotels') }}">Hotels</a></li>
        
        <li><a href="#">Contact</a></li>
        <li><a href="{{ route('login') }}">Login</a></li>
        <li class="active"><a href="{{ route('register') }}">Register</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Check Availability</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
      <form method="POST">
      
      <label for="cars">From :</label>
        <input type="date" class="form-group input-group">

      <label for="cars">To :</label>
        <input type="date" class="form-group input-group">
        

      <label for="cars">Capacity :</label>
        <input type="number" class="form-group input-group">

        
      <label for="cars">Rooms :</label>
        <input type="number" class="form-group input-group">
        </form>


      </div>
   
    </div>
  </div>
</div>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-center">
      <h1>Create your account</h1>

      <form method="POST" action="{{ route('register') }}">
      @csrf
        <input type="text" placeholder="Name" required name="name">
      </br>
        <input type="email" placeholder="Email" required name="email">
      </br>
        <input type="password" placeholder="Password" required name="password">
      </br>
      <input type="password" placeholder="Confirm Password" required name="password_confirmation">
      </br>
      <button type="submit" class="btn btn-primary">
      {{ __('Sign Up') }}
      </button>

      </form>
      
      
      

    </div>
  </section><!-- End Hero -->

  <!-- Vendor JS Files -->
  <script src="{{ asset('user/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('user/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('user/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('user/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('user/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('user/assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('user/assets/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('user/assets/js/main.js') }}"></script>

</body>

</html>