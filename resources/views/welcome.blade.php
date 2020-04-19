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
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

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

  <!-- =======================================================
  * Template Name: Maxim - v2.1.0
  * Template URL: https://bootstrapmade.com/maxim-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
  input[type=number], select {
    width: 60%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    opacity: 0.7;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=date], select {
    width: 60%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    opacity: 0.7;
    border-radius: 4px;
    box-sizing: border-box;
  }

  

  input[type=text], select {
    width: 60%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    opacity: 0.7;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=email], select {
    width: 60%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=password], select {
    width: 60%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  
  input[type=submit] {
    width: 40%;
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
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <a href="{{ url('/') }}"><img src="{{ asset('user/assets/img/logoMain.png') }}"></a> 
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        
        
        <li><a href="{{ url('hotels') }}">
        <i class="fa fa-edit fa-lg"></i>
        </a></li>
        
        <li><a href="{{ url('hotels') }}">Hotels</a></li>
        
        

        
                        @guest
                            <li class="nav-item">
                                <a class="btn-get-started scrollto" data-toggle="modal" data-target="#loginModal">Login</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                <a class="btn-get-started scrollto" data-toggle="modal" data-target="#registerModal">Register</a>
                                    
                                </li>
                            @endif
                        @else
                            <li class="drop-down">
                                <a href="#">
                                    {{ Auth::user()->fname }}
                                </a>
                                <ul>
                                
                                @if(Auth::user()->user_type == 0)
                              
                                  <li>
                             <a href="{{ url('welcome-admin') }}">Admin Panel</a>
                                </li>
                                @elseif(Auth::user()->user_type == 1)
                                
                                <li>
                             <a href="{{ route('profile') }}">View profile</a>
                                </li><li>
                             <a href="{{ route('bookings') }}">Bookings</a>
                                </li>
                                  <li>
                             <a href="{{ route('account-info') }}">Account info</a>
                                </li>
                                

                            @endif

                            
                           


                    <li> <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </li>
                  </ul>
                             </li>
                           
                        @endguest
                    </ul>
      </nav>
      <!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1 align="center">Let's start</h1>
     
      <div class="text-center">
     
      
      <a href="#" class="btn-get-started scrollto" data-toggle="modal" data-target="#bookNowModal">BOOK NOW</a>

</div>
     
      

    </div>
  </section><!-- End Hero -->

  <!-- register modal -->
  <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <a href="{{ url('/') }}"><img src="{{ asset('user/assets/img/logofullblack.png') }}" height="40px"></a>


        
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
    <div class="container text-center text-md-center">

    <h2>Create your account</h2>

<form method="POST" action="{{ route('register') }}">
@csrf
  <input type="text" placeholder="First Name" required name="fname">
</br>
<input type="text" placeholder="Last Name"  name="lname">
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

      </div>
   
    </div>
  </div>
</div>

<!-- login modal -->


  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <a href="{{ url('/') }}"><img src="{{ asset('user/assets/img/logofullblack.png') }}" height="40px"></a>


        
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
    <div class="container text-center text-md-center">

      <h2>Sign in</h2>

      <form method="POST" action="{{ route('login') }}">
      @csrf

        <input type="email" placeholder="Email" required name="email">
      </br>
        <input type="password" placeholder="Password" required name="password">
      </br>
      <button type="submit" class="btn btn-primary">
                                    Sign In
                                </button>
      </form>
</div>

      </div>
   
    </div>
  </div>
</div>
  
<!-- Book now modal -->
        <div class="modal fade" id="bookNowModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <a href="{{ url('/') }}"><img src="{{ asset('user/assets/img/logofullblack.png') }}" height="40px"></a>


        
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <div class="container text-center text-md-center">

      <form> 
    
      <input type="text" name="location" required placeholder="Location">
      </br>
      
      <input type="date" name="from" required>
      </br>

      <input type="date" name="to" required>
      </br>
        

      <input type="number"  name="capacity" required placeholder="Capacity">
      </br>

      <input type="number" name="rooms" required placeholder="Rooms">
      </br>

      <button type="submit" class="btn btn-primary">Find Hotels</button>
      </form>

      </div>

      </div>
   
      </div>

  </div>

</div>

  <main id="main">

    

    

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-right">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                  <h4>Rooms</h4>
                  <p>Quis excepturi porro totam sint earum quo nulla perspiciatis eius.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-2">
                  <h4>Restaurants</h4>
                  <p>Voluptas vel esse repudiandae quo excepturi.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-3">
                  <h4>Meetings</h4>
                  <p>Velit veniam ipsa sit nihil blanditiis mollitia natus.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-4">
                  <h4>Events & Weddings</h4>
                  <p>Ratione hic sapiente nostrum doloremque illum nulla praesentium id</p>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-7 ml-auto" data-aos="fade-left">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <figure>
                  <img src="{{ asset('user/hotel/img/room.jpg') }}" alt="" class="img-fluid">
                  
                </figure>
              </div>
              <div class="tab-pane" id="tab-2">
                <figure>
                <img src="{{ asset('user/hotel/img/restaurant.jpg') }}" alt="" class="img-fluid">

                </figure>
              </div>
              <div class="tab-pane" id="tab-3">
                <figure>
                <img src="{{ asset('user/hotel/img/meeting.jpg') }}" alt="" class="img-fluid">

                </figure>
              </div>
              <div class="tab-pane" id="tab-4">
                <figure>
                <img src="{{ asset('user/hotel/img/event.jpg') }}" alt="" class="img-fluid">

                </figure>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    

    

    

    

    

    
  </main><!-- End #main -->

  @extends('layouts.footer')
  