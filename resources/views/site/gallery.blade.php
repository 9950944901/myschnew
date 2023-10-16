

@extends('site.layouts.app')
@section('title','')
@section('content')


   <!-- Page Header Start here -->
   <section class="page-header section-notch">
    <div class="overlay">
      <div class="container mt-5 pt-5">
        <h3 class="mt-5">Our School Gallery</h3>
        <ul>
          <li><a href="{{ route('Site.Home') }}">Home</a></li>
          <li>-</li>
          <li>Gallery</li>
        </ul>
      </div><!-- container -->
    </div><!-- overlay -->
  </section><!-- page header -->

  <!-- Gallery Start here -->
  <section class="gallery padding-120">
    <div class="container">

      <div class="gallery-items">
        @foreach ($gallery as $gall)
        <div class="gallery-item">
          <div class="gallery-image">
            <img src="{{url('public/uploads/gallery/'.$gall->gallery)}}" alt="gallery image" class="img-responsive">
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

@endsection