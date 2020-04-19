<!DOCTYPE html>
<html lang="en">
<head>
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

  
  <link href="{{ asset('user/assets/css/style.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  
  
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


  

  

      #map {
        height: 75%;
        width: 100%;

        
      }
    
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
</head>

<body>
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

  <!-- ======= Testimonials Section ======= -->




  <div class="modal fade" id="moreInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
      <div class="modal-body">
     <h2>Ameneties</h2>
      </br>
<ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Ameneties</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Room Features</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Room Types</a>
    </li>
  </ul>


  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <h3>Ameneties</h3>
      
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Room Features</h3>
      
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Room Types</h3>
      
    </div>
  </div>
</div>

      </div>
   
    </div>
  </div>
</div>
      

     

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
      <div class="container">

  
</br>


<div>
          <h2>Hotel Name</h2>
          <p>reviews</p>

          <p data-toggle="dropdown" style="position:absolute; right:80px; top:182px;"><i class="fa fa-share"></i> share</p>
          <ul class="dropdown-menu">
      <li class="text-center"><i class="fa fa-link"></i> Copy link</li>
      
    </ul>

          <hr>
          <p><i class="fa fa-map-marker"></i> location | <i class="fa fa-phone"></i> +92 000 000 0000 | <i class="fa fa-globe"></i> website</p>
        </div>

      

          <!-- <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
           
         
          </div> -->

        <div>
          <div>
            <div class="info">
            
<h2>About</h2>
<hr>
<p>The Industrial chic Downtown Grand Las Vegas is a unique authentic urban hospitality experience; located at Downtown3rd in the heart of downtown Las Vegas. Downtown Grand’s two guest towers (the 18-story Casino Tower and the 26-story Grand Tower) encompass 629 guest rooms and suites ranging in size from 375-1100 square feet. Downtown Grand rooms are designed to set a new standard for downtown Las Vegas, featuring Serta Presidential pillow-top mattresses, HD flat-screen televisions, Wi-Fi, and modern amenities in a refreshingly retro setting.</p>
<hr>
<p><b>Property Amenities</b></p>
</br>
<ul>
<li>Parking</li>
<li>Pool</li>
<li>Fitness Center</li>
<li>Wifi</li>
</ul>
</br>
<p><b><a class="btn-get-started scrollto" data-toggle="modal" data-target="#moreInfoModal">More info</a></b></p>

        
            </div>
          </div>
        </div>

      

      </div>
    </section><!-- End Contact Section -->

@foreach($hotel as $row)



<h2>&nbspLocation</h2>
<div id="map"></div>


        
        

<script>

     

      var marker;

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: {lat: {{ $row->let }}, lng: {{ $row->long }}}
        });

        marker = new google.maps.Marker({
          map: map,
          draggable: true,
          animation: google.maps.Animation.DROP,
          position: {lat: {{ $row->let }}, lng: {{ $row->long }}}
        });
        marker.addListener('click', toggleBounce);
      }

      function toggleBounce() {
        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYLOCsnMuwFYBidIZ9GYGGm8jMAcIL7SM&callback=initMap"
    async defer></script>
    @endforeach

  @extends('layouts.footer')

</body>
</html>