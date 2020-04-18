<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Taviraj:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('user/hotel/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/hotel/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/hotel/css/flaticon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/hotel/css/linearicons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/hotel/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/hotel/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/hotel/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/hotel/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/hotel/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/hotel/css/style.css') }}" type="text/css">
   
    <style>
  

  

  

  input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    opacity: 0.7;
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
    </div>
  </header><!-- End Header -->


 <!-- address modal -->


 <div class="modal fade" id="addressModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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

      <h2>Address</h2>
      <form method="POST" action="{{ route('user-contact', Auth::user()->id) }}">
            <label>Street Address</lable>
            </br>
            <input type="text" class="form-control" name="address">
            </br>
            <label>City</lable>
            </br>
            <input type="text" class="form-control" name="city">
            </br>
            <label>State/Province/Region</lable>
            </br>
            <input type="text" class="form-control" name="state">
            </br>
            <label>Zip code/Postal code</lable>
            </br>
            <input type="text" class="form-control" name="postalcode">
            </br>
            <label>Country</lable>
            </br>
            <input type="text" class="form-control" name="country">
            </br>
            <label>Phone number</lable>
            </br>
            <input type="text" class="form-control" name="phone">
            </br>
            <button type="submit" class="btn btn-primary">Save</button>
            </form>
    
</div>

      </div>
   
    </div>
  </div>
</div>




  <main id="main">
    <!-- Hotels Section Begin -->
    <section class="booking-section">
        <div class="container">
       
           
            
             </br>
             <h2>Account Info</h2> 
             <hr>
             <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addressModal" style="float:right;">Address</button> -->

            <form>

            <label><b>First Name</b> : {{ Auth::user()->fname }}</lable>
            </br>
            </br>

            <label><b>Last Name</b> : {{ Auth::user()->lname }}</lable>
            </br>
            </br>
        
            <label><b>Email</b> : {{ Auth::user()->email }}</lable>
            </br>
      
            </form>
            
        
         

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
</body>

</html>