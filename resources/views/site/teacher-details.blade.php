@extends('site.layouts.app')
@section('title','')
@section('content')
  
  <!-- Page Header Start here -->
  <section class="page-header section-notch">
    <div class="overlay">
      <div class="container mt-5 pt-5">
        <h3 class="mt-5">Teachers Portfolio</h3>
        <ul>
          <li><a href="{{ route('Site.Home') }}">Home</a></li>
          <li>-</li>
          <li>Teachers</li>
        </ul>
      </div><!-- container -->
    </div><!-- overlay -->
  </section><!-- page header -->
  <!-- Page Header End here -->


  <!-- teacher-details start here -->
  <section class="teacher-details padding-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-xs-12">
          <div class="teacher-image">
            <img src="{{ url('/') }}/public/site/assets/images/teachers/teacher-details.jpg" alt="teacher image" class="img-responsive">
          </div>
        </div>
        <div class="col-lg-6 col-xs-12">
          <div class="teacher-content">
            <h4>Smith Jhonson</h4>
            <span>Project Manajer</span>
            <p>Enersticaly actualize mission critical opportunities onetoone ecommerce. Holisticly cocate bleeding edge
              PSD coordin content rather than platform eservices. Conveniently utilize diverse leadership skills whereas
              states the awesomthe. Continually coordinate flexble nnovation after webenabled is theme customer
              Synergistically optimize resource maximizing data and if efficient an methods Distinctively one action.
            </p>
            <ul class="social-default">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
            </ul>
            <ul class="teacher-address">
              <li><span><i class="fa fa-home" aria-hidden="true"></i></span>New Chokoya Road, USA.</li>
              <li><span><i class="fa fa-phone" aria-hidden="true"></i></span>+8801 923 970 212</li>
              <li><span><i class="fa fa-envelope-o" aria-hidden="true"></i></span>Contact@LabArtisan.com</li>
              <li><span><i class="fa fa-globe" aria-hidden="true"></i></span>www.LabArtisan.com</li>
            </ul>
          </div>
        </div>
      </div><!-- row -->
      <div class="teacher-statement">
        <h4>Personal Statement</h4>
        <p>Quickly syndicate innovative relationships vis-a-vis synergistic experiences. Energistically re-engineer
          leveraged deliverables rather than arevolutionary scenarios. Energistically reconceptualize andmaterials
          whereas user-centric total linkage. Quickly fashion equity invested bandwidth and client-centere
          Dramatically engage visionary quality vectors through top-line opportunities. Assertively transform
          market-driven convergence visextensible intellectual capital. Intrinsicly drive premier processes and
          transparent metrics. Rapidiously leverage existing scalable ROI vivis cross-platform benefits. Interactively
          plagiarize client-based channels via distinctive leadership skills.</p>
        <p>Distinctively disintermediate proactive applications for go forward imperatives. Holisticly build exceptional
          applications rather than maintain solutions. Phosfluorescently extend cutting-edge architectures before
          magnetic applications. Appropriately enhance installed base e-tailers with cross unit price. Synergistically
          reintermediate tactical technology without distributed information.</p>
      </div>
      <div class="row">
        <div class="col-lg-6 col-xs-12">
          <div class="teacher-skills">
            <h4>Personal Skill</h4>

            <div class="skill-item">
              <div class="first circle">
                <strong></strong>
              </div>
              <p>Bangla</p>
            </div><!-- skill-item -->
            <div class="skill-item">
              <div class="second circle">
                <strong></strong>
              </div>
              <p>Math</p>
            </div><!-- skill-item -->
            <div class="skill-item">
              <div class="third circle">
                <strong></strong>
              </div>
              <p>Sains</p>
            </div><!-- skill-item -->
            <div class="skill-item">
              <div class="fourth circle">
                <strong></strong>
              </div>
              <p>English</p>
            </div><!-- skill-item -->
          </div><!-- teacher-skills -->
        </div>
        <div class="col-lg-6 col-xs-12">
          <div class="teacher-award">
            <!-- teacher-award -->
            <h4>Recognitions Award</h4>
            <ul>
              <li>
                <img src="{{ url('/') }}/public/site/assets/images/teachers/award_01.png" alt="award image" class="img-responsive">
                <span>Aword 2021</span>
              </li>
              <li>
                <img src="{{ url('/') }}/public/site/assets/images/teachers/award_02.png" alt="award image" class="img-responsive">
                <span>Aword 2015</span>
              </li>
              <li>
                <img src="{{ url('/') }}/public/site/assets/images/teachers/award_03.png" alt="award image" class="img-responsive">
                <span>Aword 2014</span>
              </li>
              <li>
                <img src="{{ url('/') }}/public/site/assets/images/teachers/award_04.png" alt="award image" class="img-responsive">
                <span>Aword 2013</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div><!-- container -->
  </section><!-- teacher-details -->
  <!-- teacher-details end here -->

@endsection