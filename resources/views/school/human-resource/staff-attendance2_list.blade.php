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
              <table  class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Staff Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Mobile</th>
                    <th>Attendance</th>
                  </tr>
                </thead>

                <tbody>
                    @foreach ($show as $value)
                    <tr style="font-size: 15px; color: #012970; ">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $value->staff_id }}</td>
                        <td class=" text-capitalize">{{ $value->firstname }} {{ $value->lastname }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->role }}</td>
                        <td>+91{{ $value->phone }}</td>
                                <td>
                                    <form action="{{ route('SCHOOL.teache.Attendance.Sent') }}" method="post">
                                        @csrf
                                    <input type="hidden" name="staff_id[]" value="{{ $value->id }}">
                      
                                    <input type="hidden" name="teachename[]" value="{{ $value->firstname }} {{ $value->lastname }}">
                                    <div class="" style="width: 300px;">
                                      <input type="radio" name="attendance[{{$value->id}}]" required value="Present" > <label>Present</label> &nbsp;
                                <input type="radio" name="attendance[{{$value->id}}]" required value="Late" > <label>Late</label> &nbsp;
                                <input type="radio" name="attendance[{{$value->id}}]" required value="Absent" > <label>Absent</label> &nbsp;
                                <input type="radio" name="attendance[{{$value->id}}]" required value="Half Day" > <label>Half Day</label> &nbsp;
                              </div>
                            </td>
                       </tr>
                @endforeach
                    <div class="text-right mb-2">
                        <input type="date" name="date" value="{{ date('Y-m-d') }}">
                         <button type="submit" class="btn btn-sm btn-info">Save</button>
                    </div>
                    </form>
                </tbody>
              </table>

            </div>
      </section>
    </div>

  </main><!-- End #main -->

@endsection