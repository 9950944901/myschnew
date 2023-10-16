
@extends('site.layouts.app')
@section('title','')
@section('content')

  <!-- Page Header Start here -->
  <section class="page-header section-notch">
    <div class="overlay">
      <div class="container mt-5 pt-5">
        <h3 class="mt-5">Our Popular Classes</h3>
        <ul>
          <li><a href="{{ route('Site.Home') }}">Home</a></li>
          <li>-</li>
          <li>Classes</li>
        </ul>
      </div><!-- container -->
    </div><!-- overlay -->
  </section><!-- page header -->
  <!-- Page Header End here -->


  <!-- Classes Start here -->
  <section class="classes padding-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-6 col-xs-12">
          <div class="class-item">
            <div class="image">
              <img src="{{ url('/') }}/public/site/assets/images/classes/class_01.jpg" alt="class image" class="img-responsive">
            </div>
            {{-- <ul class="schedule">
              <li>
                <span>Class Size</span>
                <span>30 - 40</span>
              </li>
              <li>
                <span>Years Old</span>
                <span>5 - 6</span>
              </li>
              <li>
                <span>Tution Fee</span>
                <span>$1500</span>
              </li>
            </ul> --}}
            <div class="content">
              <h4><a href="{{ route('Site.class-single') }}">Imagination Classes</a></h4>
              <p><span>Class Time</span> : 08:00 am - 10:00 am</p>
              <p>Draticaly novate fuly rarched an plications awesome theme education</p>
            </div>
            <div class="address">
              <p><span><i class="fa fa-home" aria-hidden="true"></i></span> 218 New Newyork Road, USA- 1205</p>
            </div>
          </div><!-- class item -->
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
          <div class="class-item">
            <div class="image">
              <img src="{{ url('/') }}/public/site/assets/images/classes/class_02.jpg" alt="class image" class="img-responsive">
            </div>
            {{-- <ul class="schedule">
              <li>
                <span>Class Size</span>
                <span>30 - 40</span>
              </li>
              <li>
                <span>Years Old</span>
                <span>5 - 6</span>
              </li>
              <li>
                <span>Tution Fee</span>
                <span>$1500</span>
              </li>
            </ul> --}}
            <div class="content">
              <h4><a href="{{ route('Site.class-single') }}">Drawing Classes</a></h4>
              <p><span>Class Time</span> : 08:00 am - 10:00 am</p>
              <p>Draticaly novate fuly rarched an plications awesome theme education</p>
            </div>
            <div class="address">
              <p><span><i class="fa fa-home" aria-hidden="true"></i></span> 218 New Newyork Road, USA- 1205</p>
            </div>
          </div><!-- class item -->
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
          <div class="class-item">
            <div class="image">
              <img src="{{ url('/') }}/public/site/assets/images/classes/class_03.jpg" alt="class image" class="img-responsive">
            </div>
            {{-- <ul class="schedule">
              <li>
                <span>Class Size</span>
                <span>30 - 40</span>
              </li>
              <li>
                <span>Years Old</span>
                <span>5 - 6</span>
              </li>
              <li>
                <span>Tution Fee</span>
                <span>$1500</span>
              </li>
            </ul> --}}
            <div class="content">
              <h4><a href="{{ route('Site.class-single') }}">Learning Classes</a></h4>
              <p><span>Class Time</span> : 08:00 am - 10:00 am</p>
              <p>Draticaly novate fuly rarched an plications awesome theme education</p>
            </div>
            <div class="address">
              <p><span><i class="fa fa-home" aria-hidden="true"></i></span> 218 New Newyork Road, USA- 1205</p>
            </div>
          </div><!-- class item -->
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
          <div class="class-item">
            <div class="image">
              <img src="{{ url('/') }}/public/site/assets/images/classes/class_04.jpg" alt="class image" class="img-responsive">
            </div>
            {{-- <ul class="schedule">
              <li>
                <span>Class Size</span>
                <span>30 - 40</span>
              </li>
              <li>
                <span>Years Old</span>
                <span>5 - 6</span>
              </li>
              <li>
                <span>Tution Fee</span>
                <span>$1500</span>
              </li>
            </ul> --}}
            <div class="content">
              <h4><a href="{{ route('Site.class-single') }}">Imagination Classes</a></h4>
              <p><span>Class Time</span> : 08:00 am - 10:00 am</p>
              <p>Draticaly novate fuly rarched an plications awesome theme education</p>
            </div>
            <div class="address">
              <p><span><i class="fa fa-home" aria-hidden="true"></i></span> 218 New Newyork Road, USA- 1205</p>
            </div>
          </div><!-- class item -->
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
          <div class="class-item">
            <div class="image">
              <img src="{{ url('/') }}/public/site/assets/images/classes/class_05.jpg" alt="class image" class="img-responsive">
            </div>
            {{-- <ul class="schedule">
              <li>
                <span>Class Size</span>
                <span>30 - 40</span>
              </li>
              <li>
                <span>Years Old</span>
                <span>5 - 6</span>
              </li>
              <li>
                <span>Tution Fee</span>
                <span>$1500</span>
              </li>
            </ul> --}}
            <div class="content">
              <h4><a href="{{ route('Site.class-single') }}">Drawing Classes</a></h4>
              <p><span>Class Time</span> : 08:00 am - 10:00 am</p>
              <p>Draticaly novate fuly rarched an plications awesome theme education</p>
            </div>
            <div class="address">
              <p><span><i class="fa fa-home" aria-hidden="true"></i></span> 218 New Newyork Road, USA- 1205</p>
            </div>
          </div><!-- class item -->
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
          <div class="class-item">
            <div class="image">
              <img src="{{ url('/') }}/public/site/assets/images/classes/class_06.jpg" alt="class image" class="img-responsive">
            </div>
            {{-- <ul class="schedule">
              <li>
                <span>Class Size</span>
                <span>30 - 40</span>
              </li>
              <li>
                <span>Years Old</span>
                <span>5 - 6</span>
              </li>
              <li>
                <span>Tution Fee</span>
                <span>$1500</span>
              </li>
            </ul> --}}
            <div class="content">
              <h4><a href="{{ route('Site.class-single') }}">Learning Classes</a></h4>
              <p><span>Class Time</span> : 08:00 am - 10:00 am</p>
              <p>Draticaly novate fuly rarched an plications awesome theme education</p>
            </div>
            <div class="address">
              <p><span><i class="fa fa-home" aria-hidden="true"></i></span> 218 New Newyork Road, USA- 1205</p>
            </div>
          </div><!-- class item -->
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
          <div class="class-item">
            <div class="image">
              <img src="{{ url('/') }}/public/site/assets/images/classes/class_07.jpg" alt="class image" class="img-responsive">
            </div>
            {{-- <ul class="schedule">
              <li>
                <span>Class Size</span>
                <span>30 - 40</span>
              </li>
              <li>
                <span>Years Old</span>
                <span>5 - 6</span>
              </li>
              <li>
                <span>Tution Fee</span>
                <span>$1500</span>
              </li>
            </ul> --}}
            <div class="content">
              <h4><a href="{{ route('Site.class-single') }}">Imagination Classes</a></h4>
              <p><span>Class Time</span> : 08:00 am - 10:00 am</p>
              <p>Draticaly novate fuly rarched an plications awesome theme education</p>
            </div>
            <div class="address">
              <p><span><i class="fa fa-home" aria-hidden="true"></i></span> 218 New Newyork Road, USA- 1205</p>
            </div>
          </div><!-- class item -->
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
          <div class="class-item">
            <div class="image">
              <img src="{{ url('/') }}/public/site/assets/images/classes/class_08.jpg" alt="class image" class="img-responsive">
            </div>
            {{-- <ul class="schedule">
              <li>
                <span>Class Size</span>
                <span>30 - 40</span>
              </li>
              <li>
                <span>Years Old</span>
                <span>5 - 6</span>
              </li>
              <li>
                <span>Tution Fee</span>
                <span>$1500</span>
              </li>
            </ul> --}}
            <div class="content">
              <h4><a href="{{ route('Site.class-single') }}">Drawing Classes</a></h4>
              <p><span>Class Time</span> : 08:00 am - 10:00 am</p>
              <p>Draticaly novate fuly rarched an plications awesome theme education</p>
            </div>
            <div class="address">
              <p><span><i class="fa fa-home" aria-hidden="true"></i></span> 218 New Newyork Road, USA- 1205</p>
            </div>
          </div><!-- class item -->
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
          <div class="class-item">
            <div class="image">
              <img src="{{ url('/') }}/public/site/assets/images/classes/class_09.jpg" alt="class image" class="img-responsive">
            </div>
            {{-- <ul class="schedule">
              <li>
                <span>Class Size</span>
                <span>30 - 40</span>
              </li>
              <li>
                <span>Years Old</span>
                <span>5 - 6</span>
              </li>
              <li>
                <span>Tution Fee</span>
                <span>$1500</span>
              </li>
            </ul> --}}
            <div class="content">
              <h4><a href="{{ route('Site.class-single') }}">Learning Classes</a></h4>
              <p><span>Class Time</span> : 08:00 am - 10:00 am</p>
              <p>Draticaly novate fuly rarched an plications awesome theme education</p>
            </div>
            <div class="address">
              <p><span><i class="fa fa-home" aria-hidden="true"></i></span> 218 New Newyork Road, USA- 1205</p>
            </div>
          </div><!-- class item -->
        </div>
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- classes -->
  <!-- Classes End here -->

@endsection