@extends('site.layouts.app')
@section('title','')
@section('content')

  <!-- Page Header Start here -->
  <section class="page-header section-notch">
    <div class="overlay">
      <div class="container mt-5 pt-5">
        <h3 class="mt-5">Careers</h3>
        <ul>
          <li><a href="{{ route('Site.Home') }}">Home</a></li>
          <li>-</li>
          <li>Career</li>
        </ul>
      </div><!-- container -->
    </div><!-- overlay -->
  </section><!-- page header -->
  <!-- Page Header End here -->


  <!-- Blog Post Start here -->
  <section class="blog-post padding-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 post-item-pagination">
          <h4 class="animate-charcter">Current Openings</h4>
          <div class="post-items">
            @foreach ($career as $item)
            <div class="post-item" style="border: 1px solid ;">
              <div class="post-content">
                <h4>{{ $item->post }}</h4>
                <div class="row">
                  <div class="col-6">
                    <div>Vacancies:- {{ $item->vacancies }}</div>
                  </div>
                  <div class="col-6">
                    <div>Work Status:- {{ $item->work_status }}</div>
                  </div>
                  <div class="col-6">
                    <div>Experience:- {{ $item->experience }}</div>
                  </div>
                  <div class="col-6">
                    <div>Qualification:- {{ $item->qualification }}</div>
                  </div>
                  <div class="col-6">
                    <div>Location:- {{ $item->location }}</div>
                  </div>
                </div>
                <a href="{{ route('Career.apply',['id'=>$item->id]) }}" class="button-default post-button">Apply Now</a>
              </div>
            </div>
            @endforeach

            
          </div>
        </div>
        <div class="col-lg-4">
          <div class="sidebar0" style="padding: 30px;box-shadow: 1px 2px 20px 6px #f5cff4;border-radius: 12px;">
            <div class="text-center"><h4>Career</h4></div>
              <form class="contact-form" method="post" action="{{ route('Site.Career.Request') }}" enctype="multipart/form-data">
                <input type="text" name="name" placeholder="Your Name" class="contact-input w-100" style="border: 1px solid;" required>
                <input type="text" pattern="['0-9']*" minlength="10" maxlength="10" name="number" placeholder="Your Mobile No." class="contact-input w-100" style="border: 1px solid;" required>
                
                <input type="email" name="email" placeholder="Your Email" class="contact-input" style="border: 1px solid;"required>
                <input type="text" name="qualification" placeholder="Your Qualification" class="contact-input" style="border: 1px solid;"required>
                <input type="text" name="experience" placeholder="Your Experience" class="contact-input" style="border: 1px solid;"required>
                <input type="text" name="apply_for" placeholder="Apply For" class="contact-input" style="border: 1px solid;"required>
                <label for="">Resume</label>
                <input type="file" name="resume" class="contact-input" style="border: 1px solid;"required accept="application/pdf,application/vnd.ms-excel">
                @csrf
                <input type="submit" name="submit" value="Submit" class="contact-button">
              </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Blog Post End here -->

  @if($message = session('success'))
<script>
  swal({
  title: "You have applied Successfully",
  text: "Thank You",
  icon: "success",
  button: "Ok",
});
</script>
@endif



<style>
  .animate-charcter
{
 text-transform: uppercase;
background-image: linear-gradient(
  -225deg,
  #231557 0%,
  #44107a 29%,
  #ff1361 67%,
  #fff800 100%
);
background-size: auto auto;
background-clip: border-box;
background-size: 200% auto;
color: #fff;
background-clip: text;
text-fill-color: transparent;
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
animation: textclip 5s linear infinite;
}

@keyframes textclip {
to {
  background-position: 200% center;
}
}
</style>

@endsection