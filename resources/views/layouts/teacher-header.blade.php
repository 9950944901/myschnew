
@include('layouts.header-css')

@php
use App\Models\AddStaff;
$user = auth()->user();
$data = AddStaff::where('email',$user->email)->get()->first();
@endphp

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    {{-- <div class="d-flex align-items-center justify-content-between"> --}}
    <div class="d-flex align-items-center justify-content-between">
      {{-- <a href="{{ route('SCHOOL.Home') }}" class="logo d-flex align-items-center"> --}}
      <a href="{{url()->current()}}" class="logo d-flex align-items-center">
        <img src="{{ url('public/logobt.png') }}" style="max-height: 50px;width: 100%;" alt="">
        {{-- <span class="d-none d-lg-block">NiceAdmin</span> --}}
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
    <div class="search-bar">
      <form class="search-form d-flex align-items-center" action="#">
        @csrf
        <input type="text" name="search" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div>
    <!-- End Search Bar -->
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li>
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            @if($user->image)
            <img src="{{ url('public/uploads/school/'.$user->image) }}" alt="NO IMAGE" class="rounded-circle">
            @elseif($data->staff_image)
            <img src="{{ url('public/uploads/staff/'.$data->staff_image) }}"  class="rounded-circle">
            @else
            <img src="{{ url('public/no_image.png') }}" alt="NO IMAGE" class="rounded-circle">
            @endif

            <span class="d-none d-md-block dropdown-toggle ps-2">{{ $user->name }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{ $user->name }}</h6>
              <span>{{ $user->job }}</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('Teacher.users-profile') }}">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            {{-- <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('Teacher.users-profile') }}">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li> --}}
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center signout-confirm" href="{{route('SignOut.Teacher')}}">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->
      </ul>
    </nav><!-- End Icons Navigation -->
  </header><!-- End Header -->




