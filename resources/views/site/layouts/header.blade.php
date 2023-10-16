
<!DOCTYPE html>
<html lang="en">
@php
  use App\Models\FrontCms_Setting;

  $data = FrontCms_Setting::get()->first();


@endphp
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <!-- Google fonts -->
  <link rel="icon" type="image/x-icon" href="{{ url('/') }}/public/site/assets/images/fav.jpg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap -->
  <link href="{{ url('/') }}/public/site/assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font-awesome -->
  <link href="{{ url('/') }}/public/site/assets/css/font-awesome.min.css" rel="stylesheet">
  <!-- Flaticon -->
  <link href="{{ url('/') }}/public/site/assets/flaticon/flaticon.css" rel="stylesheet">
  <!-- lightcase -->
  <link href="{{ url('/') }}/public/site/assets/css/lightcase.css" rel="stylesheet">
  <!-- Swiper -->
  <link href="{{ url('/') }}/public/site/assets/css/swiper.min.css" rel="stylesheet">
  <!-- quick-view -->
  <link href="{{ url('/') }}/public/site/assets/css/quick-view.css" rel="stylesheet">
  <!-- nstSlider -->
  <link href="{{ url('/') }}/public/site/assets/css/jquery.nstSlider.css" rel="stylesheet">
  <!-- flexslider -->
  <link href="{{ url('/') }}/public/site/assets/css/flexslider.css" rel="stylesheet">
  <!-- Style -->
  <link href="{{ url('/') }}/public/site/assets/css/rtl.css" rel="stylesheet">
  <!-- Style -->
  <link href="{{ url('/') }}/public/site/assets/css/style.css" rel="stylesheet">
  <!-- Responsive -->
  <link href="{{ url('/') }}/public/site/assets/css/responsive.css" rel="stylesheet">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body id="scroll-top" class="home-3">
  <!-- Preloader start here -->
  <!-- <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div> -->
  <!-- Preloader end here -->


  <!-- mobile menu start here -->
  <div class="mobile-menu-area">
    <div class="logo-area">
      <a class="logo" href="{{ route('Site.Home') }}">
        @if ($data->web_logo ?? '')
        <img src="{{ url('public/uploads/site-logo/'.$data->web_logo) }}" alt="logo" class="img-responsive">
        @else
            
        @endif
      </a>
      <button type="button" class="navbar-toggle collapsed d-md-none" data-toggle="collapse"
        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="mobile-menu">
      <ul class="m-menu">
        <li class="dropdown-submenu">
          <a href="{{ route('Site.Home') }}">Home</a>
        </li>
        <li class="dropdown-submenu">
          <a href="{{ route('Site.About') }}">About</a>
        </li>
        {{-- <li class="dropdown-submenu">
          <a href="{{ route('Site.classes') }}">Classes</a>
          <ul class="mobile-submenu">
            <li><a href="classes.html">Classes</a></li>
            <li><a href="class-single.html">Class Single</a></li>
          </ul>
        </li> --}}

        <li class="dropdown-submenu">
          <a href="{{ route('Site.teacher') }}">Teachers</a>
          {{-- <ul class="mobile-submenu">
            <li><a href="teachers.html">Teacher</a></li>
            <li><a href="teacher-detail.html">Teacher Details</a></li>
          </ul> --}}
        </li>

        <li class="dropdown-submenu">
          <a href="{{ route('Site.gallery') }}">Gallery</a>
          {{-- <ul class="mobile-submenu">
            <li><a href="{{ route('Site.gallery') }}">Gallery</a></li>
            <li><a href="{{ route('Site.event') }}">Event</a></li>
          </ul> --}}
        </li>

        <li class="dropdown-submenu">
          <a href="{{ route('Site.Blog') }}">Career</a>
          {{-- <ul class="mobile-submenu">
            <li><a href="blog.html">Blog Page</a></li>
            <li><a href="single.html">Blog Single</a></li>
          </ul> --}}
        </li>

        <li><a href="{{ route('Site.Contact') }}">Contact Us</a></li>
        <li><a href="{{ route('Site.Login') }}"><i class="fa fa-arrow-circle-o-right"></i> Login</a></li>
      </ul>
    </div>
  </div>
  <!-- mobile menu ending here -->


  <header class="header-three">
    <div class="header-top">
      <div class="container">
        <div class="ht-area">
          <ul class="left">
            <li><span><i class="fa fa-phone" aria-hidden="true"></i></span> Phone : {{ $data->school_phone ?? ''}}</li>
            <li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> Opening Time : {{ date('h:i a', strtotime($data->open_start_time ?? '')) }}-{{ date('h:i a', strtotime($data->open_end_time ?? '')) }}</li>
            <!-- <li><span><i class="fa fa-home" aria-hidden="true"></i></span> Address : Labartisan 1205 Newyork</li> -->
          </ul>
          <ul class="right">
            <li><a href="{{ $data->facebook ?? ''}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="{{ $data->instagram ?? ''}}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="{{ $data->google ?? ''}}"><i class="fa fa-google" aria-hidden="true"></i></a></li>
            <li><a href="{{ $data->skype ?? ''}}"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="main-menu">
      <div class="container">
        <div class="row no-gutters">
          <nav class="main-menu-area w-100">
            <div class="logo-area">
              <a class="" href="{{ route('Site.Home') }}">
                @if ($data->web_logo ?? '')
                    
                <img src="{{ url('public/uploads/site-logo/'.$data->web_logo) }}" alt="logo" class="img-responsive">
                @else
                    
                @endif
              </a>
              <button type="button" class="navbar-toggle collapsed d-md-none" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <div class="menu-area">
              {{-- <ul class="menu-search-cart">
                <li><span class="menu-search"><i class="fa fa-search" aria-hidden="true"></i></span></li>
              </ul> --}}

              <ul class="menu">
                <li class="dropdown">
                  <a href="{{ route('Site.Home') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Home</a>
                 
                </li>
                <li class="dropdown">
                  <a href="{{ route('Site.About') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">About</a>
             
                </li>
                {{-- <li class="dropdown">
                  <a href="{{ route('Site.classes') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Classes </a>
                  <ul class="dropdown-menu">
                    <li><a href="classes.html">Classes</a></li>
                    <li><a href="class-single.html">Classes Details</a></li>
                  </ul>
                </li> --}}
                <li class="dropdown">
                  <a href="{{ route('Site.teacher') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Teachers </a>
                  {{-- <ul class="dropdown-menu">
                    <li><a href="teachers.html">Teachers</a></li>
                    <li><a href="teacher-details.html">Teacher Details</a></li>
                  </ul> --}}
                </li>
                <li class="dropdown">
                  <a href="{{ route('Site.gallery') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Gallery </a>
                  {{-- <ul class="dropdown-menu">
                    <li><a href="{{ route('Site.gallery') }}">Gallery</a></li>
                    <li><a href="{{ route('Site.event') }}">Event</a></li>
                  </ul> --}}
                </li>
                <li class="dropdown">
                  <a href="{{ route('Site.Blog') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Career </a>
                  {{-- <ul class="dropdown-menu">
                    <li><a href="blog.html">Blog Page</a></li>
                    <li><a href="single.html">Blog Single</a></li>
                  </ul> --}}
                </li>
                <li><a href="{{ route('Site.Contact') }}">Contact</a></li>
                <li><a href="{{ route('Site.Login') }}"><i class="fa fa-arrow-circle-o-right"></i> Login</a></li>
              </ul>
              {{-- <form class="menu-search-form">
                <input type="text" name="search" placeholder="Search here...">
                <span class="menu-search-close"><i class="fa fa-times" aria-hidden="true"></i></span>
              </form> --}}
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- header End here -->