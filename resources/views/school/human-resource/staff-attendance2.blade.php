@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Staff Attendance</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard ">
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              <div class="card info-card sales-card pb-5">
                <form action="" method="get">
                  @csrf
                <div class="row">
                  <h5 class="mt-3" style="font-size: 17px;">Select Staff</h5>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Staff</h6>
                    <div class="">
                        <select  class="form-control" name="month" required>
                            <option value="">Select</option>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November </option>
                            <option value="12">December</option>
                          </select>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="p-2 mt-4">
                        <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                      </div>
                  </div>
                </div>
              </form>
              </div>

              <meta name="viewport" content="width=device-width, initial-scale=1">
              <div class="d-flex justify-content-between">
                <h5 class="p-2">Staff Attendance</h5>
                <a href="{{route('SCHOOL.staff-attendance2_list')}}" class="btn btn-info mb-3"><i class="fa fa-plus"></i>Attendance</a>
              </div>
           
              <div style="overflow-x:auto;">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th class="text-ljj w-100" style="width: 200px;">Staff Id <br>
                      Name</th>
                   
                      @foreach ($dates as $item)
                    <th>
                      {{ date('d/m',strtotime($item)) }}
                    </th>
                    @endforeach
                  </tr>
                 @foreach ($staf->unique('staff_id') as $value)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td class="text-cus"><p class="" style="width: 150px;">
                      <span>{{$value->staff_id}}</span> <br> <span >{{$value->firstname}} {{$value->lastname}}</span>  
                    </p></td>
                 
                  @foreach ($dates as $item)
                  @php
                  $attend = DB::table('add_attend_staff')->where('staff_id',$value->id)->where('date',$item)->first()
                  @endphp
                  <td>
                    {{ $attend->attendance[0] ?? '' }}
                  </td>
                  @endforeach
                  </tr>
                  @endforeach
                </thead>

                <tbody>
                  {{-- <tr>
                    <td>S No.</td>
                    <td>Staff Id</td>
                    <td>Name</td>
                    <td>Role</td>
                    <td>Attendance</td>
                    <td>Date</td>
                    <td>Note</td>
                    <td>Action</td>
                  </tr> --}}
                </tbody>
              </table>

            </div>
            </div>
      </section>
    </div>

  </main><!-- End #main -->

@endsection