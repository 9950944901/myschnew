@extends('site.layouts.app')
@section('title','')
@section('content')

  <!-- Page Header Start here -->
  <section class="page-header section-notch">
    <div class="overlay">
      <div class="container mt-5 pt-5">
        <h3 class="mt-5">{{ $career->post }}</h3>
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
      <div class="row justify-content-center">
        <div class="col-lg-6 post-item-pagination">
          
          <div class="sidebar0" style="padding: 30px;box-shadow: 1px 2px 20px 6px #f5cff4;border-radius: 12px;">
            <div class="text-center"><h4>Apply Now</h4></div>
              <form class="contact-form" method="post" action="{{ route('Site.Openings.Request') }}" enctype="multipart/form-data">
                <input type="text" name="name" placeholder="Your Name" class="contact-input w-100" style="border: 1px solid;" required>
                <input type="number" name="number" placeholder="Your Mobile No." class="contact-input w-100" style="border: 1px solid;" required>
                <input type="email" name="email" placeholder="Your Email" class="contact-input" style="border: 1px solid;"required>
                <input type="hidden" name="job_id" value="{{ $career->id }}">
                <label for="">Resume</label>
                <input type="file" name="resume" class="contact-input" style="border: 1px solid;"required accept="application/pdf,application/vnd.ms-excel">
                @csrf
                <input type="submit" name="submit" value="Apply" class="contact-button">
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
  title: "Request Send Successfully",
  text: "Thank You",
  icon: "success",
  button: "Ok",
});
</script>
@endif


@endsection