

@extends('site.layouts.app')
@section('title','')
@section('content')


  <!-- Page Header Start here -->
  <section class="page-header section-notch">
    <div class="overlay">
      <div class="container mt-5 pt-5">
        <h3 class="mt-5">Class Single Page</h3>
        <ul>
          <li><a href="{{ route('Site.Home') }}">Home</a></li>
          <li>-</li>
          <li>Class Single</li>
        </ul>
      </div><!-- container -->
    </div><!-- overlay -->
  </section><!-- page header -->
  <!-- Page Header End here -->


  <!-- Blog Post Start here -->
  <section class="singel-class padding-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="single-post">
            <div class="post-image">
              <img src="{{ url('/') }}/public/site/assets/images/classes/class-single.jpg" alt="post image" class="img-responsive">
            </div>
            <div class="post-content">
              <h3>Asertivelly recaptiualize best rofesionally</h3>
              <ul class="post-meta">
                <li><span class="icon flaticon-people-1"></span> <a href="#">Robot Smith</a></li>
                <li><span class="icon flaticon-like"></span> <a href="#">128 Likes</a></li>
                <li><span class="icon flaticon-chat"></span> <a href="#">32 Comments</a></li>
              </ul>
              <p>Progressively brand sticky whit without frctionless voritals vsualize coseffective networks is
                viralProgressively redefine efficient platforms cuttingedge business developed andexteinsive aservices
                Collaboratively conceptualize futureproof partnerships through holistic aproiided progreively brand
                sticky ROwithout frictionless vortals. Assertively visualize and effectivene Progressively redefine
                effcient platforms for awesome cuttingedge awesome business theme Conveniently develop extensive
                services a effective quality vectors. Colaboratvely coeptuale future-proof partnerships through holistic
                products.</p>
              <blockquote>Completely actuaze cent centric coloration and idea saharng without and creati installed an
                awesome theme of event aresourcescreatve awesome template and completely template a and awesome event
                template and awesome event template.</blockquote>
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
            </div>
            <div class="content-bottom">
              <ul class="post-tags">
                <li><span class="flaticon-tags-outline"></span> Tags :</li>
                <li><a href="#">Corporate</a> -</li>
                <li><a href="#">KidsAcademy</a> -</li>
                <li><a href="#">Agency</a> -</li>
                <li><a href="#">Business</a></li>
              </ul>
              <ul class="post-share">
                <li><span class="flaticon-share"></span> Share :</li>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
              </ul>
            </div><!-- content-bottom -->
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
              <ul class="class-details">
                <li>
                  <div class="name"><i class="flaticon-pencil"></i>Start Date</div>
                  <div class="info">24 March 2021</div>
                </li>
                <li>
                  <div class="name"><i class="flaticon-student"></i>Years Old</div>
                  <div class="info">6-8 Years</div>
                </li>
                <li>
                  <div class="name"><i class="flaticon-symbols"></i>Class Size</div>
                  <div class="info">20-30 Kids</div>
                </li>
                <li>
                  <div class="name"><i class="flaticon-school-bus"></i>Carry Time</div>
                  <div class="info">5 Hours/6 Days</div>
                </li>
                <li>
                  <div class="name"><i class="flaticon-book"></i>Coures Duration</div>
                  <div class="info">10-12 Month</div>
                </li>
                <li>
                  <div class="name"><i class="flaticon-alarm-clock"></i>Class Time</div>
                  <div class="info">9:30am-5:30pm</div>
                </li>
                <li>
                  <div class="name"><i class="flaticon-like-2"></i>Rating</div>
                  <div class="info rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>
                </li>
                <li>
                  <div class="name"><i class="flaticon-money-bag"></i>Tution Free</div>
                  <div class="info">$ 250.00</div>
                </li>
              </ul>

            </div><!-- sidebar item -->
            <div class="sidebar-item">
              <h3 class="sidebar-title">Popular Coures</h3>

              <ul class="sidebar-posts">
                <li>
                  <div class="image">
                    <a href="{{ route('Site.class-single') }}"><img src="{{ url('/') }}/public/site/assets/images/blog/latest_post_01.jpg" alt="post image"
                        class="img-responsive"></a>
                  </div>
                  <div class="content">
                    <a href="{{ route('Site.class-single') }}">Foulate revlunry and the mihare are a awesome the theme.</a>
                    <span>04 February 2021</span>
                  </div>
                </li>
                <li>
                  <div class="image">
                    <a href="{{ route('Site.class-single') }}"><img src="{{ url('/') }}/public/site/assets/images/blog/latest_post_02.jpg" alt="post image"
                        class="img-responsive"></a>
                  </div>
                  <div class="content">
                    <a href="{{ route('Site.class-single') }}">Foulate revlunry and the mihare are a awesome the theme.</a>
                    <span>04 February 2021</span>
                  </div>
                </li>
                <li>
                  <div class="image">
                    <a href="{{ route('Site.class-single') }}"><img src="{{ url('/') }}/public/site/assets/images/blog/latest_post_03.jpg" alt="post image"
                        class="img-responsive"></a>
                  </div>
                  <div class="content">
                    <a href="{{ route('Site.class-single') }}">Foulate revlunry and the mihare are a awesome the theme.</a>
                    <span>04 February 2021</span>
                  </div>
                </li>
                <li>
                  <div class="image">
                    <a href="{{ route('Site.class-single') }}"><img src="{{ url('/') }}/public/site/assets/images/blog/latest_post_04.jpg" alt="post image"
                        class="img-responsive"></a>
                  </div>
                  <div class="content">
                    <a href="{{ route('Site.class-single') }}">Foulate revlunry and the mihare are a awesome the theme.</a>
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