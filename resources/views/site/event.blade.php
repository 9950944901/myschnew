@extends('site.layouts.app')
@section('title','')
@section('content')

 <!-- Page Header Start here -->
 <section class="page-header section-notch">
    <div class="overlay">
      <div class="container mt-5 pt-5">
        <h3 class="mt-5">Don’t Miss Our Events</h3>
        <ul>
          <li><a href="{{ route('Site.Home') }}">Home</a></li>
          <li>-</li>
          <li>Events</li>
        </ul>
      </div><!-- container -->
    </div><!-- overlay -->
  </section><!-- page header -->


  <section class="event event-two padding-120">
    <div class="container">
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
                <a href="{{ route('Site.event-details') }}" class="button-default">Join Now</a>
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
                <a href="{{ route('Site.event-details') }}" class="button-default">Join Now</a>
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
                <a href="{{ route('Site.event-details') }}" class="button-default">Join Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="event-item">
              <div class="event-image">
                <img src="{{ url('/') }}/public/site/assets/images/event/event_04.jpg" alt="event image" class="img-responsive">
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
                <a href="{{ route('Site.event-details') }}" class="button-default">Join Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="event-item">
              <div class="event-image">
                <img src="{{ url('/') }}/public/site/assets/images/event/event_05.jpg" alt="event image" class="img-responsive">
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
                <a href="{{ route('Site.event-details') }}" class="button-default">Join Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="event-item">
              <div class="event-image">
                <img src="{{ url('/') }}/public/site/assets/images/event/event_06.jpg" alt="event image" class="img-responsive">
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
                <a href="{{ route('Site.event-details') }}" class="button-default">Join Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="event-item">
              <div class="event-image">
                <img src="{{ url('/') }}/public/site/assets/images/event/event_07.jpg" alt="event image" class="img-responsive">
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
                <a href="{{ route('Site.event-details') }}" class="button-default">Join Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="event-item">
              <div class="event-image">
                <img src="{{ url('/') }}/public/site/assets/images/event/event_08.jpg" alt="event image" class="img-responsive">
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
                <a href="{{ route('Site.event-details') }}" class="button-default">Join Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="event-item">
              <div class="event-image">
                <img src="{{ url('/') }}/public/site/assets/images/event/event_09.jpg" alt="event image" class="img-responsive">
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
                <a href="{{ route('Site.event-details') }}" class="button-default">Join Now</a>
              </div>
            </div>
          </div>
        </div><!-- row -->
      </div><!-- event items -->
    </div><!-- container -->
  </section><!-- event blog -->
  <!-- event End here -->

@endsection