<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Taviraj:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <!-- <link rel="stylesheet" href="{{ asset('user/hotel/css/bootstrap.min.css') }}" type="text/css"> -->
    <link rel="stylesheet" href="{{ asset('user/hotel/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/hotel/css/flaticon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/hotel/css/linearicons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/hotel/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/hotel/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/hotel/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/hotel/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/hotel/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/hotel/css/style.css') }}" type="text/css">

  
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->

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
    <!-- Hotels Section Begin -->
    <section class="room-section spad">
               
      
        <div class="container">
        @foreach ($hotels as $row)
           
            <div class="rooms-page-item">
                <div class="row">
                   
                   
                    <div class="col-lg-6">
                        <div class="room-pic-slider owl-carousel">
                            
                            <div class="single-room-pic">
                                <img src="{{ asset('user/hotel/img/room/rooms-1.jpg') }}">
                            </div>
                            
                            <div class="single-room-pic">
                                <img src="{{ asset('user/hotel/img/room/rooms-2.jpg') }}">
                            </div>
                            
                        </div>
                    </div>
                  
                  
                  
                    <div class="col-lg-6">
                        <div class="room-text">
                           
                            <div class="room-title">
                                
                                <h2>{{ $row->name }}</h2>
                              
                                <div class="room-price"> 
                                <p><a href="{{ url('hotel-map') }}">view details</a></p>
                                </div>

                            </div>

                            <div class="room-desc">
                                <p>{{ $row->address }}</p>
                            </div>
                            
                          </br>
                             
                          </div>
                          
                          </br>

                          <h3><a href="{{ url('rooms', ['id' => $row->id]) }}">Rooms</a></h3>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
       
    </section>

    <!-- Hotels Section End -->
  </main><!-- End #main -->

  @extends('layouts.footer')

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <script src="{{ asset('user/hotel/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('user/hotel/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('user/hotel/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('user/hotel/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('user/hotel/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('user/hotel/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('user/hotel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user/hotel/js/main.js') }}"></script>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>