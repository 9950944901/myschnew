@extends('layouts.student')
@section('content')


<div class="main-panel">
    <div class="content-wrapper m-0">

      
      <div class="row">
        <div class="col-md-12 ">
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
              <h5>Exam Result</h5>
              <hr>
              <table id="example1" class="table table-bordered table-striped">
                <thead>

                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Admission No.</th>
                    <th>Roll No.</th>
                    <th>Student</th>
                    <th>Class/Section</th>
                    <th>Session</th>
                    <th>Performance</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($exam as $value)
                  @php
                  $half = 0;
                  $half = $half+$value->half_hindi+$value->half_math+$value->half_english+$value->half_science+$value->half_social+$value->half_sanskrit;
    
                  $anul = 0;
                  $anul = $anul+$value->anul_hindi+$value->anul_math+$value->anul_english+$value->anul_science+$value->anul_social+$value->anul_sanskrit;
                //  $strang = 0;
                // $strang = $strang+$value->st_hindi+$value->st_math+$value->st_english+$value->st_science+$value->st_social+$value->st_sanskrit;
              @endphp
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->add_no }}</td>
                    <td>{{ $value->roll_no }}</td>
                    <td>
                      <span><span class="text-bold">Name:</span> {{ $value->first_name }} {{ $value->last_name }}</span><br>
                      <span><span class="text-bold">F.Name:</span> {{ $value->father_name }}</span><br>
                      <span><span class="text-bold">Mobile:</span> +91{{ $value->mobile_no }}</span><br>
                       </td>
                    <td>{{ $value->class }} <br> <span class="w-100 d-block">{{$value->section}}</span></td>
                    <td>{{ $value->session }}</td>
                    <td>
                      
                      <span class="text-bold">Percentage: </span><span> {{ Number_format(($half+$anul)*100/600,2)}}%</span> <br>
                      <span class=" text-bold">Result: </span><span>
                        @php
                        $result = number_format(($half+$anul)*100/600,2);
                    @endphp
                        @if ($result >= 33 && $result <= 44) 
                        3rd division
                        @elseif($result >= 45 && $result <= 59) 
                        2nd division
                        @elseif($result >= 60 && $result <= 74) 
                        1st division
                        @elseif($result >= 75 && $result <= 100) 
                        Distinction                              
                        @else
                        <span class="text-danger">Fail</span>
                        @endif 
                      
                      </span><br>
                    </td>
                  <td>
                    <a href="{{route('student_panel.report_card',['id'=>$value->student_id])}}" class="btn btn-sm btn-light"><i class="fa fa-eye text-info"></i></a>
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
    <!-- content-wrapper ends -->








@endsection
