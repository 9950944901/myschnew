@extends('layouts.student')
@section('content')
@php
  $user = auth()->user();
@endphp
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

      <div class="row">
        <div class="col-md-12 ">
          <div class="card">
            <div class="card-body">
              <h5>Notice Board</h5>
              <hr>

              <div class="row">
                <div class="col-md-12">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
             
                        <tr class="" style="font-size: 13px; color: #012970; ">
                          <th>S No.</th>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Notice Date</th>
                          <th>Publish ON</th>
                          <th>For</th>
                          </tr>
                    </thead>
    
                    <tbody>
                      @foreach ($show as $item)
                      <tr class="" style="font-size: 13px; color: #012970; ">

                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->title}}</td>
                        <td>{!!$item->desc!!}</td>
                        <td>{{  date('d-M-Y', strtotime($item->notice_date)) }}</td>
                        <td>{{  date('d-M-Y', strtotime($item->publish_on)) }}</td>
                        <td>
                          @foreach (json_decode($item->send_to) as $item2)
                              {{$item2}}
                          @endforeach
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
    
              </div>
    

            </div>
          </div>

        </div>

      </div>

    </div>
    <!-- content-wrapper ends -->




@endsection
