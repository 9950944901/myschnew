@extends('layouts.teacher')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('Teacher.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Manage Syllabus Status</li>
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
                <form action="{{ route('Teacher.manage-syllabus-status') }}" method="get">
                  @csrf
                <div class="row mb-3">
                  <h5 class="mt-3" style="font-size: 17px;">Select Criteria</h5>
                  <div class="col-lg-2 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Class</h6>
                    <div class="">
                      <select name="class" class="form-control neha-text" required>
                        <option value="">Select</option>
                        @foreach ($class as $cls)
                        <option>{{ $cls->class }}</option>
                        @endforeach

                      </select>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Section</h6>
                    <div class="">
                      <select name="section" class="form-control neha-text" required>
                        <option value="">Select</option>
                        @foreach ($sec as $se)
                        <option>{{ $se->section }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Subject Group</h6>
                    <div class="">
                      <select name="subject_group" class="form-control neha-text" required>
                        <option value="">Select</option>
                        @foreach ($group as $gr)
                        <option>{{ $gr->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Subject</h6>
                    <div class="">
                      <select name="subject" class="form-control neha-text" required>
                        <option value="">Select</option>
                        @foreach ($subj as $sub)
                        <option>{{ $sub->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 sol-sm-12">
                    <div class="">
                      <div class="p-2 mt-4">
                        <button type="subject" class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                      </div>
                    </div>
                  </div>

                </div>
              </form>
              </div>

              <div class="p-3">
                <h5>Syllabus Status</h5>
              </div>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Id</th>
                    <th>Lesson-Topic</th>
                    <th>Topic Completion Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($view as $value)                   
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td>{{ $loop->iteration }}</td>
                    <td>STP0{{ $value->id }}</td>
                    <td>{{ $value->lesson }}</td>
                    <td>{{ date('d-M-Y', strtotime($value->created_at )) }}</td>
                    <td>
                      @if($value->status ==1)
                      <button type="button" class="btn btn-danger">Incomplete</button>
                      @else
                      <button type="button" class="btn btn-success">Complete</button>
                      @endif
                    </td>
                    <td>
                     <label class="switch">
                      <input type="checkbox" class="js-switch"  data-id="{{ $value->id }}" name="status" {{ $value->status == 0 ? 'checked' : '1' }}>
                      <span class="slider round"></span>
                    </label>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>

            </div>
      </section>
    </div>

  </main><!-- End #main -->
  <style>
    .switch {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
    }

    /* Hide default HTML checkbox */
    .switch input {
      opacity: 0;
      width: 0;
      height: 0;
    }

    /* The slider */
    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }

    .slider:before {
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }

    input:checked+.slider {
      background-color: #2196F3;
    }

    input:focus+.slider {
      box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
      -webkit-transform: translateX(26px);
      -ms-transform: translateX(26px);
      transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
      border-radius: 34px;
    }

    .slider.round:before {
      border-radius: 50%;
    }
  </style>

<script>let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

  elems.forEach(function(html) {
  let switchery = new Switchery(html,  { size: 'small' });
  });</script>
  
  
  <script>
  
  
  $(document).ready(function(){
  $('.js-switch').change(function () {
  let status = $(this).prop('checked') === true ? 0 : 1;
  let userId = $(this).data('id');
  $.ajax({
  type: "GET",
  dataType: "json",
  url: '{{ route('Tmanage.Status') }}',
  data: {'status': status, 'id': userId},
  success: function (data) {
  alert(data.message);
  }
  });
  });
  });
  
  </script>
  
  <script>
  
  success: function (data) {
  toastr.options.closeButton = true;
  toastr.options.closeMethod = 'fadeOut';
  toastr.options.closeDuration = 100;
  toastr.success(data.message);
  }
  </script>


@endsection