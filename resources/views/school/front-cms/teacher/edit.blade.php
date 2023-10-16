@extends('layouts.app')
@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
        <li class="breadcrumb-item active">front-cms / Teacher</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div class="dashboard ">
    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="row">
            <div class="card info-card sales-card">
              <form action="{{ route('Front.Web.teacher.update',['id'=>$show->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="row mb-2">
                <h5 class="mt-3" style="font-size: 17px;">WebSite / Teacher</h5>
                <div class="col-lg-4 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Teacher Image</h6>
                  <div class="">
                    <input type="file" class="form-control" name="image" >
                    <img src="{{ url('public/uploads/front/teacher/'.$show->image) }}" height="50" width="50" alt="">
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Name</h6>
                  <div class="">
                    <input type="text" class="form-control" name="name" required value="{{ $show->name }}">
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Job</h6>
                  <div class="">
                    <input type="text" class="form-control" name="job" required value="{{ $show->job }}">
                  </div>
                </div>
                {{-- <div class="col-lg-4 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Location</h6>
                  <div class="">
                    <input type="text" class="form-control" name="location" required value="{{ $show->location }}">
                  </div>
                </div> --}}
                <div class="col-lg-4 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Contact Us</h6>
                  <div class="">
                    <input type="text" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" minlength="10" maxlength="10" name="contact" required value="{{ $show->contact }}">
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">E-mail</h6>
                  <div class="">
                    <input type="email" class="form-control" name="email" required value="{{ $show->email }}">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Qualification</h6>
                  <div class="">
                    <input type="text" class="form-control" name="about" value="{{ $show->about}}" required>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Experience</h6>
                  <div class="">
                    <input type="text" class="form-control" name="personal_statement" value="{{ $show->personal_statement }}" required>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 sol-sm-12">
                  <div class="mt-4 pt-2">
                    <button type="submit" class="btn btn-info">Update</button>
                  </div>
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

</main><!-- End #main -->
@endsection