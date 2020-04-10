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
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
      <h1 class="text-light"><a href="{{ url('/') }}">book now</a></h1>

        
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="{{ url('hotels') }}">Hotels</a></li>
        <li><a href="{{ url('rooms') }}">Rooms</a></li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                            @endif
                        @else
                            <li class="drop-down">
                                <a href="#">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul>
                                
                                @if(Auth::user()->user_type == 0)
                              
                                  <li>
                             <a href="{{ url('welcome-admin') }}">Admin Panel</a>
                                </li>
                                @elseif(Auth::user()->user_type == 1)
                                
                                  <li>
                             <a href="#">My Booking</a>
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


 


  <main id="main">
    <!-- Rooms Section Begin -->
    <section class="room-section spad">
        <div class="container">
        @foreach ($room as $row)
       
           
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
                                <h2>{{ $row->type }}</h2>
                                <div class="room-price">
                                <div class="room-price">
                                    <h2>${{ $row->price }}</h2>
                                    <sub>/night</sub>
                                </div>
                                    
                        
                                </div>
                            </div>

                            <div class="room-desc">
                                <p>Ratings :</p>
                            </div>
                            
                           
                           </br>
                           </br>

                            
                            
                           
                            <div class="room-features">
                                
                                <div class="room-info">
                                    
                                    <span>Size</span>
                                    <p>{{ $row->size }} sq. ft.</p>
                                </div>
                                <div class="room-info">
                                    
                                    <span>Beds</span>
                                    <p>{{ $row->beds }}</p>

                                </div>
                                
                              
                            </div>
                            <button type="button" class="primary-btn" data-toggle="modal" data-target="#exampleModalCenter">Book Now<i class="lnr lnr-arrow-right"></i></button>
                            
                        </div>
                    </div>
                </div>
            </div>
          
            @endforeach

        </div>
    </section>

    <!-- Rooms Section End -->

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
      <form>
            <div class="form-group input-group">
            <select class="form-control">
              <option selected="">Hotel</option>
              <option>Room 1</option>
            </select>
              </div>
              <div class="form-group input-group">
            <select class="form-control">
              <option selected="">Room Type</option>
              <option>Room 1</option>
            </select>
              </div>

              
              <div class="form-group input-group">
                <input name="Customer-Name" class="form-control" placeholder="Customer Name" type="text">
                </div> 

                <div class="form-group input-group">
                <input name="From" class="form-control" placeholder="From" type="date">
                </div>
                
                <div class="form-group input-group">
                <input name="To" class="form-control" placeholder="To" type="date">
                </div> 
                <div class="form-group input-group">
                <input name="capacity" class="form-control" placeholder="Adults" type="text">
                </div> 
                
                <div class="form-group input-group">
                <input name="Rooms" class="form-control" placeholder="Rooms" type="text">
                </div> 
                <div class="form-group">
                  <button type="submit" class="primary-btn btn-block">Check Availability<i class="lnr lnr-arrow-right"></i></button>
                  </div> 
                
            
             
        </form>
      </div>
  
    </div>
  </div>
</div>
      </div>

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