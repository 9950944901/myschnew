@extends('site.layouts.app')
@section('title','')
@section('content')
  <!-- Banner Start here -->
  <section class="banner banner-three">
    <div class="banner-slider swiper-container">
      <div class="swiper-wrapper">
        <div class="banner-item slide-one swiper-slide">
          <div class="banner-overlay"></div>
          <div class="container">
            <div class="row">
              <div class="offset-lg-5 col-lg-6 col-xs-12">
                <div class="banner-content">
                  <h3>Welcome to KidsAcademy</h3>
                  <h2>Best For Education</h2>
                  <p>Monotonely principle centered architecture through and standards magnetic metrics whereas cross
                    functional products.</p>
                  {{-- <ul>
                    <li><a href="#" class="button-default">Read More</a></li>
                    <li><a href="#" class="button-default">Buy Now</a></li>
                  </ul> --}}
                </div><!-- banner-content -->
              </div>
            </div>
          </div><!-- container -->
        </div><!-- slide item -->
        <div class="banner-item slide-two swiper-slide">
          <div class="banner-overlay"></div>
          <div class="container">
            <div class="row">
              <div class="offset-lg-5 col-lg-6 col-xs-12">
                <div class="banner-content">
                  <h3>Welcome to KidsAcademy</h3>
                  <h2>Best For Education</h2>
                  <p>Monotonely principle centered architecture through and standards magnetic metrics whereas cross
                    functional products.</p>
                  {{-- <ul>
                    <li><a href="#" class="button-default">Read More</a></li>
                    <li><a href="#" class="button-default">Buy Now</a></li>
                  </ul> --}}
                </div><!-- banner-content -->
              </div>
            </div>
          </div><!-- container -->
        </div><!-- slide item -->
        <div class="banner-item slide-three swiper-slide">
          <div class="banner-overlay"></div>
          <div class="container">
            <div class="row">
              <div class="offset-lg-5 col-lg-6 col-xs-12">
                <div class="banner-content">
                  <h3>Welcome to KidsAcademy</h3>
                  <h2>Best For Education</h2>
                  <p>Monotonely principle centered architecture through and standards magnetic metrics whereas cross
                    functional products.</p>
                  {{-- <ul>
                    <li><a href="#" class="button-default">Read More</a></li>
                    <li><a href="#" class="button-default">Buy Now</a></li>
                  </ul> --}}
                </div><!-- banner-content -->
              </div>
            </div>
          </div><!-- container -->
        </div><!-- slide item -->

      </div><!-- swiper-wrapper -->
      <div class="swiper-pagination"></div>
    </div><!-- swiper-container -->
  </section><!-- banner -->
  <!-- Banner End here -->


  <!-- About Start here -->
  <section class="about about-two padding-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="about-image">
            <img src="{{ url('/') }}/public/site/assets/images/about/about-2.png" alt="about image" class="img-responsive">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-content">
            <h3>About Our KidsAcademy</h3>
            <p>Enthusiasticay diseminate competitive oportunitie through transparent an actions Compelngly seize viral
              schemas through intermandated creative is adiea sources. Enthusiasticay plagiarize clientcentered
              relationship for the covalent experiences. Distinctively architect 24/365 service for wireless is
              ebusiness ahosfluorescently Efficiently comunicate coperative methods of empowerment awesome athrough
              Monotonectaly myocardinate cross and functional niche markets and an functional.</p>
            <ul>
              <li><a href="{{ route('Site.About') }}" class="button-default">Read More</a></li>
              {{-- <li><a href="#" class="button-default">Buy Now</a></li> --}}
            </ul>
          </div><!-- about content -->
        </div>
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- about -->
  <!-- About End here -->


  <!-- facility Start here -->
  <section class="facility facility-three padding-120">
    <div class="container">
      <div class="section-header">
        <h3>Our School Fecilities</h3>
        <p>Rapidiously expedite granular imperatives before economically sound web services. Credibly actualize pandemic
          strategic themeplatform.</p>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="facility-item">
            <span class="icon flaticon-symbols"></span>
            <h4>Active Learning</h4>
            <p>Uniquely productivate real time collaboration idea-sharing after awesome quality vectors after</p>
          </div><!-- facility item -->
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="facility-item">
            <span class="icon flaticon-avatar"></span>
            <h4>Expert Teachers</h4>
            <p>Uniquely productivate real time collaboration idea-sharing after awesome quality vectors after</p>
          </div><!-- facility item -->
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="facility-item">
            <span class="icon flaticon-world"></span>
            <h4>Strategi Location</h4>
            <p>Uniquely productivate real time collaboration idea-sharing after awesome quality vectors after</p>
          </div><!-- facility item -->
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="facility-item">
            <span class="icon flaticon-line-chart"></span>
            <h4>Full Day Programs</h4>
            <p>Uniquely productivate real time collaboration idea-sharing after awesome quality vectors after</p>
          </div><!-- facility item -->
        </div>
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- facility -->
  <!-- facility End here -->


 
  {{-- <section class="classes padding-120">
    <div class="container">
      <div class="section-header">
        <h3>Our Popular Classes</h3>
        <p>Rapidiously expedite granular imperatives before economically sound web services. Credibly actualize pandemic
          strategic themeplatform.</p>
      </div>
      <div class="row">
        <div class="col-lg-4 col-sm-6 col-xs-12">
          <div class="class-item">
            <div class="image">
              <img src="{{ url('/') }}/public/site/assets/images/classes/extra1.jpg" alt="class image" class="img-responsive">
            </div>
            <ul class="schedule">
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
            </ul>
            <div class="content">
              <h4><a href="class-single.html">Imagination Classes</a></h4>
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
              <img src="{{ url('/') }}/public/site/assets/images/classes/extra2.jpg" alt="class image" class="img-responsive">
            </div>
            <ul class="schedule">
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
            </ul>
            <div class="content">
              <h4><a href="class-single.html">Drawing Classes</a></h4>
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
              <img src="{{ url('/') }}/public/site/assets/images/classes/extra3.jpg" alt="class image" class="img-responsive">
            </div>
            <ul class="schedule">
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
            </ul>
            <div class="content">
              <h4><a href="class-single.html">Learning Classes</a></h4>
              <p><span>Class Time</span> : 08:00 am - 10:00 am</p>
              <p>Draticaly novate fuly rarched an plications awesome theme education</p>
            </div>
            <div class="address">
              <p><span><i class="fa fa-home" aria-hidden="true"></i></span> 218 New Newyork Road, USA- 1205</p>
            </div>
          </div><!-- class item -->
        </div>
      </div><!-- row -->
      <div class="class-button">
        <a href="classes.html" class="button-default">See More Classes</a>
      </div>
    </div><!-- container -->
  </section> --}}


  <!-- Teachers Start here -->
  <section class="teachers teachers-three padding-120">
    <div class="container">
      <div class="section-header">
        <h3>Meet Our Teachers</h3>
        <p>Rapidiously expedite granular imperatives before economically sound web services. Credibly actualize pandemic
          strategic themeplatform.</p>
      </div>
      <div class="teacher-items">
        <div class="teacher-slider swiper-container">
          <div class="swiper-wrapper">

            @foreach ($teacher as $item)
            <div class="teacher-item swiper-slide">
              <div class="teacher-image">
                <img src="{{ url('public/uploads/front/teacher/'.$item->image) }}" alt="teacher image" class="img-responsive">
              </div>
              <div class="teacher-content">
                <h4><a href="#">{{ $item->name }}</a></h4>
                <span>{{ $item->job }}</span>
              </div>
            </div>
            @endforeach

          </div>
        </div><!-- swiper-container -->
      </div><!-- partner-items -->

    </div><!-- container -->
  </section><!-- teacher -->
  <!-- Teachers End here -->


  <!-- Gallery Start here -->
  <section class="gallery padding-120">
    <div class="container">
      <div class="section-header">
        <h3>Our School Gallery</h3>
        <p>Rapidiously expedite granular imperatives before economically sound web services. Credibly actualize pandemic
          strategic themeplatform.</p>
      </div>
      {{-- <ul class="gallery-menu">
        <li class="active" data-filter="*">Show all</li>
        <li data-filter=".branding">Class</li>
        <li data-filter=".development">Event</li>
        <li data-filter=".packing">Playing</li>
        <li data-filter=".photography">Art</li>
      </ul> --}}

      
      <div class="gallery-items">
        @foreach ($gallery as $gall)
        <div class="gallery-item branding packing">
          <div class="gallery-image">
            <img src="{{url('public/uploads/gallery/'.$gall->gallery)}}" alt="gallery image" style="height: 390px;          " class="img-responsive">
          </div>
        </div>
      @endforeach

     
      
      </div>
      <div class="gallery-button"><a href="{{ route('Site.gallery') }}" class="button-default">View More Gallery</a></div>
    </div>
  </section>

  <section class="testimonial testimonial-three padding-120">
    <div class="container">
      <div class="section-header">
        <h3>What Parents Say</h3>
        <p>Rapidiously expedite granular imperatives before economically sound web services. Credibly actualize pandemic
          strategic themeplatform.</p>
      </div>
      <div class="testimonial-items">
        <div class="testimonial-slider-three swiper-container">
          <div class="swiper-wrapper">

            @foreach ($parents as $info)
            <div class="testimonial-item swiper-slide">
              <div class="testimonial-image">
                <img src="{{ url('public/uploads/parents/'.$info->image) }}" alt="client image" class="img-responsive">
              </div>
              <div class="testimonial-details">
                <h4>{{ $info->name }} </h4>
                <span>{{ $info->job }}</span>
                <i class="icon fa fa-quote-left" aria-hidden="true"></i>
                <p>{{$info->says}}</p>
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- Event Start here -->
  {{-- <section class="event event-two padding-120">
    <div class="container">
      <div class="section-header">
        <h3>Don't Miss Our Event</h3>
        <p>Rapidiously expedite granular imperatives before economically sound web services. Credibly actualize pandemic
          strategic themeplatform.</p>
      </div>
      <div class="event-items">
        <div class="row">
          <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="event-item">
              <div class="event-image">
                <img src="{{ url('/') }}/public/site/assets/images/event/event_01.jpg" alt="event image" class="img-responsive">
                <div class="date">
                  <span>24</span>
                  <p>March</p>
                </div>
              </div>
              <div class="event-content">
                <h4>Imagination Classes</h4>
                <ul>
                  <li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span>08:00 am - 10:00 am</li>
                  <li><span><i class="fa fa-home" aria-hidden="true"></i></span>218 New Newyork Road Newyork</li>
                </ul>
                <p>Dratcaly novate fuly rarched an plication awesome theme education that plication creative theme
                  education.</p>
                <a href="event.html" class="button-default">Join Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="event-item">
              <div class="event-image">
                <img src="{{ url('/') }}/public/site/assets/images/event/event_02.jpg" alt="event image" class="img-responsive">
                <div class="date">
                  <span>24</span>
                  <p>March</p>
                </div>
              </div>
              <div class="event-content">
                <h4>Imagination Classes</h4>
                <ul>
                  <li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span>08:00 am - 10:00 am</li>
                  <li><span><i class="fa fa-home" aria-hidden="true"></i></span>218 New Newyork Road Newyork</li>
                </ul>
                <p>Dratcaly novate fuly rarched an plication awesome theme education that plication creative theme
                  education.</p>
                <a href="event.html" class="button-default">Join Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="event-item">
              <div class="event-image">
                <img src="{{ url('/') }}/public/site/assets/images/event/event_03.jpg" alt="event image" class="img-responsive">
                <div class="date">
                  <span>24</span>
                  <p>March</p>
                </div>
              </div>
              <div class="event-content">
                <h4>Imagination Classes</h4>
                <ul>
                  <li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span>08:00 am - 10:00 am</li>
                  <li><span><i class="fa fa-home" aria-hidden="true"></i></span>218 New Newyork Road Newyork</li>
                </ul>
                <p>Dratcaly novate fuly rarched an plication awesome theme education that plication creative theme
                  education.</p>
                <a href="event.html" class="button-default">Join Now</a>
              </div>
            </div>
          </div>
        </div><!-- row -->
      </div><!-- event items -->
    </div><!-- container -->
  </section> --}}
  <!-- event End here -->


@endsection