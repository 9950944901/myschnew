
@extends('site.layouts.app')
@section('title','')
@section('content')

  <!-- Page Header Start here -->
  <section class="page-header section-notch">
    <div class="overlay">
      <div class="container mt-5 pt-5">
        <h3 class="mt-5">Event Details Page</h3>
        <ul>
          <li><a href="{{ route('Site.Home') }}">Home</a></li>
          <li>-</li>
          <li>Event Details</li>
        </ul>
      </div><!-- container -->
    </div><!-- overlay -->
  </section><!-- page header -->
  <!-- Page Header End here -->


  <!-- Blog Post Start here -->
  <section class="singel-class event-single padding-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="single-post">
            <div class="post-image">
              <img src="{{ url('/') }}/public/site/assets/images/blog/post_01.jpg" alt="post image" class="img-responsive">
              <div class="event-counter">
                <div class="row">
                  <div class="col-md-6 col-xs-12">
                    <h4>The Event Will Start In</h4>
                  </div>
                  <div class="col-md-6 col-xs-12">
                    <ul id="countdown" class="countdown">
                      <li class="clock-item"><span class="count-number days">00</span>
                        <p class="days_text count-text">Days</p>
                      </li>

                      <li class="clock-item"><span class="count-number hours">00</span>
                        <p class="hours_text count-text">Hours</p>
                      </li>

                      <li class="clock-item"><span class="count-number minutes">00</span>
                        <p class="minutes_text count-text">Min</p>
                      </li>

                      <li class="clock-item"><span class="count-number seconds">00</span>
                        <p class="seconds_text count-text">Sec</p>
                      </li>
                    </ul>
                  </div>
                </div><!-- row -->
              </div>
            </div>
            <div class="post-content">
              <h3>Asertivelly recaptiualize best rofesionally</h3>
              <ul class="post-meta">
                <li><span class="icon flaticon-signs"></span> <a href="#">Location: San Francisco</a></li>
                <li><span class="icon flaticon-alarm-clock"></span> <a href="#">Time: 8.30am to 5.00pm</a></li>
              </ul>
              <p>Progressively brand sticky whit without frctionless voritals vsualize coseffective networks is
                viralProgressively redefine efficient platforms cuttingedge business developed andexteinsive aservices
                Collaboratively conceptualize futureproof partnerships through holistic aproiided progreively brand
                sticky ROwithout frictionless vortals. Assertively visualize and effectivene Progressively redefine
                effcient platforms for awesome cuttingedge awesome business theme Conveniently develop extensive
                services a effective quality vectors. Colaboratvely coeptuale future-proof partnerships through holistic
                products.</p>
              <p>Progressively brand sticky whit without frctionless voritals vsualize coseffective networks is
                viralProgressively redefine efficient platforms cuttingedge business developed andexteinsive aservices
                Collaboratively conceptualize futureproof partnerships through holistic aproiided progreively brand
                sticky ROwithout frictionless vortals. Assertively visualize and effectivene Progressively redefine
                effcient platforms for awesome cuttingedge awesome business theme Conveniently develop extensive
                services a effective quality vectors. Colaboratvely coeptuale future-proof partnerships through holistic
                products.</p>
              <p>Progressively brand sticky whit without frctionless voritals vsualize coseffective networks is
                viralProgressively redefine efficient platforms cuttingedge business developed andexteinsive aservices
                Collaboratively conceptualize futureproof partnerships through holistic aproiided progreively brand
                sticky ROwithout frictionless vortals. Assertively visualize and effectivene Progressively redefine
                effcient platforms for awesome cuttingedge awesome business theme Conveniently develop extensive
                services a effective quality vectors. Colaboratvely coeptuale future-proof partnerships through holistic
                products.</p>
              <h4>Event Organizer</h4>
              <p>Progressively brand sticky whit without frctionless voritals vsualize coseffective networks is
                viralProgressively redefine efficient platforms cuttingedge business developed andexteinsive aservices
                Collaboratively conceptualize futureproof partnerships through holistic aproiided progreively brand
                sticky ROwithout frictionless vortals. Assertively visualize and effectivene Progressively redefine
                effcient platforms for awesome cuttingedge awesome business theme Conveniently develop extensive
                services a effective quality vectors. Colaboratvely coeptuale future-proof partnerships through holistic
                products.</p>
            </div>
            <div class="event-map" id="map-canvas"></div>
          </div><!-- single post -->
        </div>
        <div class="col-lg-4">
          <div class="sidebar">
            <div class="sidebar-item">
              <form>
                <input type="text" name="text" placeholder="Search Your Catagorie...">
                <button><i class="fa fa-search" aria-hidden="true"></i></button>
              </form>
            </div><!-- sidebar item -->
            <div class="sidebar-item">
              <h3 class="sidebar-title">All Categories</h3>

              <ul class="sidebar-categories">
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Brand Creation
                    <span>05</span></a></li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Company Analysis
                    <span>27</span></a></li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Corporate Identity
                    <span>07</span></a></li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Funding <span>09</span></a>
                </li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Medical <span>08</span></a>
                </li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Strategy Planning
                    <span>25</span></a></li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Uncategorized
                    <span>20</span></a></li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Video Production
                    <span>30</span></a></li>
              </ul>
            </div><!-- sidebar item -->
            <div class="sidebar-item">
              <h3 class="sidebar-title">Popular Coures</h3>

              <ul class="sidebar-posts">
                <li>
                  <div class="image">
                    <a href="{{ route('Site.Single') }}"><img src="{{ url('/') }}/public/site/assets/images/blog/latest_post_01.jpg" alt="post image"
                        class="img-responsive"></a>
                  </div>
                  <div class="content">
                    <a href="{{ route('Site.Single') }}">Foulate revlunry and the mihare are a awesome the theme.</a>
                    <span>04 February 2021</span>
                  </div>
                </li>
                <li>
                  <div class="image">
                    <a href="{{ route('Site.Single') }}"><img src="{{ url('/') }}/public/site/assets/images/blog/latest_post_02.jpg" alt="post image"
                        class="img-responsive"></a>
                  </div>
                  <div class="content">
                    <a href="{{ route('Site.Single') }}">Foulate revlunry and the mihare are a awesome the theme.</a>
                    <span>04 February 2021</span>
                  </div>
                </li>
                <li>
                  <div class="image">
                    <a href="{{ route('Site.Single') }}"><img src="{{ url('/') }}/public/site/assets/images/blog/latest_post_03.jpg" alt="post image"
                        class="img-responsive"></a>
                  </div>
                  <div class="content">
                    <a href="{{ route('Site.Single') }}">Foulate revlunry and the mihare are a awesome the theme.</a>
                    <span>04 February 2021</span>
                  </div>
                </li>
                <li>
                  <div class="image">
                    <a href="{{ route('Site.Single') }}"><img src="{{ url('/') }}/public/site/assets/images/blog/latest_post_04.jpg" alt="post image"
                        class="img-responsive"></a>
                  </div>
                  <div class="content">
                    <a href="{{ route('Site.Single') }}">Foulate revlunry and the mihare are a awesome the theme.</a>
                    <span>04 February 2021</span>
                  </div>
                </li>
              </ul><!-- sidebar-posts -->
            </div><!-- sidebar item -->
            <div class="sidebar-item">
              <h3 class="sidebar-title">Photos Gallery</h3>

              <ul class="sidebar-gallery">
                <li><a href="#"><img src="{{ url('/') }}/public/site/assets/images/blog/gallery_01.jpg" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="{{ url('/') }}/public/site/assets/images/blog/gallery_02.jpg" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="{{ url('/') }}/public/site/assets/images/blog/gallery_03.jpg" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="{{ url('/') }}/public/site/assets/images/blog/gallery_04.jpg" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="{{ url('/') }}/public/site/assets/images/blog/gallery_05.jpg" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="{{ url('/') }}/public/site/assets/images/blog/gallery_06.jpg" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="{{ url('/') }}/public/site/assets/images/blog/gallery_07.jpg" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="{{ url('/') }}/public/site/assets/images/blog/gallery_08.jpg" alt="gallery image" class="img-responsive"></a>
                </li>
              </ul><!-- sidebar-gallery -->
            </div><!-- sidebar item -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Blog Post End here -->
@endsection