
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Student Admission Import</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard">
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              <div class="card info-card sales-card mt-3">
                <div class="row">
                    <div class="col-lg-6 col-md-6 sol-sm-12">
                    <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-4 mt-5">
                            <div class="custom-file text-left">
                                <input type="file" name="filecsv" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                <span class="text-danger">@error('filecsv') {{$message}}
                                    
                                @enderror</span>
                            </div>
                        </div>
                        <button class="btn btn-primary">Import Users</button>
                        <a class="btn btn-success" href="{{ route('export-users') }}">Export Users</a>
                    </form>

            
            
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>
      </section>
    </div>

  </main><!-- End #main -->
@endsection