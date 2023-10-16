@extends('layouts.app')
@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
        <li class="breadcrumb-item active">front-cms / Gallery</li>
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
              <form action="{{ route('Front.Web.Page.Gallery') }}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="row mb-2">
                <h5 class="mt-3" style="font-size: 17px;">WebSite Gallery</h5>
                <div class="col-lg-6 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Add Image</h6>
                  <div class="">
                    <input type="file" class="form-control" name="gallery" required>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 sol-sm-12">
                  <div class="mt-4 pt-2">
                    <button type="submit" class="btn btn-info">Save</button>
                  </div>
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>
        @foreach ($show as $info)
        <div class="col-md-3 mt-3">
            <div><a href="{{ route('Front.Cms.Gallery.Delete',['id'=>$info->id]) }}" class="btn btn-danger delete-confirm" style="position:absolute;border-radius: 50%;right: 9px;"><i class="fa fa-trash"></i></a></div>
            <img src="{{ url('public/uploads/gallery/'.$info->gallery) }}" class="w-100" style="height: 220px" alt="">
        </div>
        @endforeach
        <div class="float-right mt-3">
            {{ $show->links("pagination::bootstrap-5") }}
        </div>
      </div>
    </section>
  </div>

</main><!-- End #main -->
@endsection