
@extends('site.layouts.app')
@section('title','')
@section('content')

  
  <!-- Page Header Start here -->
  <section class="page-header section-notch">
    <div class="overlay">
      <div class="container mt-5 pt-5">
        <h3 class="mt-5">Meet Our Teachers</h3>
        <ul>
          <li><a href="{{ route('Site.Home') }}">Home</a></li>
          <li>-</li>
          <li>Teachers</li>
        </ul>
      </div><!-- container -->
    </div><!-- overlay -->
  </section><!-- page header -->
  <!-- Page Header End here -->


  <!-- Teachers Start here -->
  <section class="teachers teachers-page padding-120">
    <div class="container">
      <div class="row">

        @foreach ($teacher as $info)
        <div class="col-lg-6 col-xs-12">
          <div class="teacher-item">
            <div class="teacher-image">
              <img src="{{ url('public/uploads/front/teacher/'.$info->image) }}" alt="teacher image" class="img-responsive">
            </div>
            <div class="teacher-content">
              <h4>{{ $info->name }} <span></span></h4>
              <ul>
                {{ $info->job }}
              </ul>
              <p>Qualification:- {{ $info->about }}</p>
              <p>Experience:- {{ $info->personal_statement }}</p>
              <p>Mail To:- {{ $info->email }}</p>
            </div>
          </div>
        </div>
        @endforeach


      </div>
    </div>
  </section>

 @endsection