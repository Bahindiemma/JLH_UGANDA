<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Justice Livelihoods Health</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/fav.png') }}" type="image/x-icon">
   <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/images/fav.jpg') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/slider/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/slider/css/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />

    <style>
        .event-box img,.gallery_product img{
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
        .single-blog figure img{
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
        .box{
            width: 100%;
            height:100%;
            display: flex;
            justify-content: space-between;
            align-items: start;
            flex-direction: column;
        }
    </style>

</head>

<body>

<header class="continer-fluid ">
    <div  class="header-top">
        {{-- @foreach ($settings as $index => $val) --}}
        <div class="container">
            <div class="row col-det">
                <div class="col-lg-6 d-none d-lg-block">
                    <ul class="ulleft">
                        <li>
                            <i class="far fa-envelope"></i>
                            {{-- {{ $val->email }} --}}
                            <span>|</span></li>
                        <li>
                            <i class="fas fa-phone-volume"></i>
                            {{-- +{{ $val->mobile }} --}}
                            </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 folouws">
                  
                    <ul class="ulright">
                       <li> <small>Folow Us </small>:</li>
                        <li>
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter-square"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 d-none d-md-block col-md-6 btn-bhed">
                    <button class="btn btn-sm btn-success">Join Us</button>
                    <button class="btn btn-sm btn-default">Donate</button>
                </div>
            </div>
        </div>
        {{-- @endforeach --}}
    </div>
    <div id="menu-jk" class="header-bottom">
        <div class="container">
            <div class="row nav-row">
                <div class="col-lg-3 col-md-12 logo">
                    <a href="{{ url('/') }}">
                        <img style="height: 50px;" src="{{ asset('assets/images/logo.png') }}" alt="">
                        <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-lg-none  small-menu fa-bars"></i></a>
                    </a>

                </div>
                <div id="menu" class="col-lg-9 col-md-12 d-none d-lg-block nav-col">

                            <ul class="navbad">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ url('/') }}">Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('about') }}">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('services') }}">Services</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('gallery') }}">Gallery</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('blog') }}">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact.index') }}">Contact Us</a>
                                </li>




                            </ul>


                </div>
            </div>
        </div>
    </div> 
</header>

@yield('content')

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3 class="display-6" style="color: #1e3a8a;">JLH</h3>
            <p>
                P O Box 35742<br>
                KAMPALA CITY <br>
                14B SERUMAGGA ROAD<br>
                KALONDA ZONE, BUKOTO<br><br>
              <strong>Phone:</strong>+256 751412540<br>
              <strong>Email:</strong>operaations.jlh@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Child protection training and advocacy</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Provision of affordable, quality water sources</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Provision of communication therapy services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Support to Baptist associations and churches in growing their capacity
                and enhancing their impact</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Subscribe to our news letter to get constant updates</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

  </footer><!-- End Footer -->
          
    
</body>

<script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js') }}"></script>
<script src="{{ asset('assets/plugins/slider/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>

</html>