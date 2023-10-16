@extends('site.layouts.app')
@section('title','')
@section('content')


<!-- Error Page Start here -->
<section class="error-page padding-120 mt-5 pt-5">
  <div class="container mt-5 pt-5">
    <div class="error-content mt-4">
      <h2>404</h2>
      <h3><span>Oops,</span> This Page Not Be Found!</h3>
      <p>We are really sorry but the page you requested is missing :</p>
      <a href="{{ route('Site.Home') }}" class="button-default">Go Back Home</a>
    </div><!-- error content -->
  </div><!-- container -->
</section>
<!-- Error Page End here -->
@endsection