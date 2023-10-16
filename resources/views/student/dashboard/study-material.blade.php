@extends('layouts.student')
@section('content')

<div class="main-panel">
    <div class="content-wrapper m-0">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-12 col-xl-8 mb-4">
                <h3 class="font-weight-bold">Welcome {{ $data->first_name }} {{ $data->last_name }}</h3>
              {{-- <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span
                  class="text-primary">3 unread alerts!</span></h6> --}}
            </div>
            <div class="col-12 col-xl-4 mb-4">
              <div class="justify-content-end d-flex">
                <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white"  id="dropdownMenuDate2"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="border: 1px solid #4B49AC">
                    <i class="mdi mdi-calendar"></i> Today ({{ date('d-M-Y') }})
                  </button>
                  {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                    <a class="dropdown-item" href="#">January - March</a>
                    <a class="dropdown-item" href="#">March - June</a>
                    <a class="dropdown-item" href="#">June - August</a>
                    <a class="dropdown-item" href="#">August - November</a>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="">
        <h5>Study Material List</h5>           
      </div>
      <hr>
      <div class="row">
        <div class="col-md-12">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr class="" style="font-size: 13px; color: #012970; ">
                <th>S No.</th>
                <th>Class</th>
                    <th>Content Title</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Available For</th>
                    <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($content as $value)      
                <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                 <td>{{ $loop->iteration }}</td>
                 <td>{{ $value->class }}</td>
                  <td>{{ $value->name }}</td>
                  <td>{{ $value->content_type }}</td>
                  <td>{{ date('d-M-Y', strtotime($value->date)) }}</td>
                  <td>
                    @foreach(json_decode($value->availabe_for) as $item)
                      {{ $item }},
                    @endforeach
                  </td>
                  <td>
                    @if($value->document)
                    <a href="{{ url('public/uploads/content/'.$value->document) }}" class="btn btn-light ml-1" download><i class="fa fa-download"></i></a>
                    @else
                    <a class="btn btn-light ml-1" onclick="toastr.error('No File !. ','Error',{displayDuration: 500, pos: 'top'})"><i class="fa fa-download"></i></a>
                    @endif
                  </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
















@endsection
