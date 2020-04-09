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
        <h1 class="text-light"><a href="index.html">book now</a></h1>
        
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        <li><a href="{{ url('hotel') }}">Hotels</a></li>
        <li><a href="{{ url('hotel') }}">Rooms</a></li>

          
          @if (Route::has('login'))
          @auth
          
          <li><a href="{{ url('home') }}">Home</a></li>
          <li> <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </li>
          @else

          <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
          
          @if (Route::has('register'))
          
          <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
          
          @endif
          @endauth
          @endif

        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->


 


  <main id="main">
    <!-- Rooms Section Begin -->
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
                                    
                                    
                                @php
                            $x = $row->rating
                            @endphp
                           
                            @for ($i=1; $i<=$x; $i++)
                            <img src="{{ asset('user/hotel/star.png') }}" height="3%" width="3%">
                           @endfor
                                </div>
                            </div>
                            <div class="room-desc">
                                <p>{{ $row->address }}</p>
                            </div>
                            
                           
                           

                            
                            
                           
                            <div class="room-features">
                                
                                <div class="room-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <span>Wi-fii</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <span>AC</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-036-parking"></i>
                                    <span>Parking</span>
                                </div>
                                <div class="room-info last">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <span>Pool</span>
                                </div>
                            </div>
                            <a href="#" class="primary-btn">Book A Room<i class="lnr lnr-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </section>

    <!-- Rooms Section End -->
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