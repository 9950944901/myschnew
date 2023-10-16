@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Staff Directory Edit</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard ">
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <form action="{{ route('Update.Staff',['id'=>$add->id]) }}" method="post" enctype="multipart/form-data">
              @csrf
            <div class="row">
              <div class="card info-card sales-card">
                <div class="row">
                  <h5 class="mt-3" style="font-size: 17px;">Edit Staff Information</h5>
                  {{-- <div class="col-lg-3 col-md-3 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Staff ID</h6>
                    <div class="">
                      <input type="text" class="form-control neha-text" id="date1" value="{{ $add->staff_id }}" name="staff_id" required>
                    </div>
                  </div> --}}

                  <div class="col-lg-3 col-md-3 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">First Name</h6>
                    <div class="">
                      <input type="text" class="form-control neha-text" value="{{ $add->firstname }}" name="firstname">
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Last Name</h6>
                    <div class="">
                      <input type="text" class="form-control neha-text" value="{{ $add->lastname }}" name="lastname">
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Father's Name</h6>
                    <div class="">
                      <input type="text" class="form-control neha-text" value="{{ $add->father_name }}" name="father_name">
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Mother's Name</h6>
                    <div class="">
                      <input type="text" class="form-control neha-text" value="{{ $add->mother_name }}" name="mother_name">
                    </div>
                  </div> 

                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Role</h6>
                    <div class="">
                      <input type="text" name="role" value="{{ $add->role }}" class="form-control neha-text" required>
                    </div>
                  </div>
                  {{-- <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Designation</h6>
                    <div class="">
                     <input type="text" name="designation" value="{{ $add->designation }}" class="form-control neha-text" required>
                 
                    </div>
                  </div> --}}
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Department</h6>
                    <div class="">
                      <select name="department" class="form-control neha-text" required>
                        <option>{{ $add->department }}</option>
                        @foreach ($show as $value)
                        <option>{{ $value->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                
                  <div class="col-lg-3 col-md-3 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Email</h6>
                    <div class="">
                      <input type="email" class="form-control neha-text" value="{{ $add->email }}" name="email">
                      <input type="hidden" class="form-control neha-text" value="{{ $add->email }}" name="oldemail">
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Password</h6>
                    <div class="">
                      <input type="text" minlength="6" maxlength="15" class="form-control neha-text" value="{{ $add->conform_password }}" name="password">
                    </div>
                  </div>
                             
                  <div class="col-lg-4 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Gender</h6>
                    <div class="">
                      <select name="gender" class="form-control neha-text" required>
                        <option>{{ $add->gender }}</option>
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Date of Birth</h6>
                    <div class="">
                      <input type="date" class="form-control neha-text" value="{{ $add->dob }}" name="dob" required>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Date of Joining</h6>
                    <div class="">
                      <input type="date" class="form-control neha-text" value="{{ $add->joining_date }}" name="joining_date" required>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Phone </h6>
                    <div class="">
                      <input type="text" class="form-control neha-text" value="{{ $add->phone }}" name="phone" required>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Emergency Contact Number </h6>
                    <div class="">
                      <input type="text" maxlength="10" minlength="10" pattern="['0-9']*" class="form-control neha-text" value="{{ $add->contact_no }}" name="contact_no">
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Marital Status</h6>
                    <div class="">
                      <select class="form-control" name="marital_status" >
                        <option>{{ $add->marital_status }}</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Widowed">Widowed</option>
                        <option value="Separated">Separated</option>
                        <option value="Not Specified">Not Specified</option>
                    </select>
                    </div>
                  </div>
                    <br>
                  <div class="col-lg-6 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Current Address</h6>
                    <div class="">
                      <textarea class="form-control neha-text" name="cadd">{{ $add->cadd }}</textarea>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Permanent Address</h6>
                    <div class="">
                      <textarea class="form-control neha-text" name="padd">{{ $add->padd }}</textarea>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Qualification</h6>
                    <div class="">
                      <textarea class="form-control neha-text" name="qualification">{{ $add->qualification }}</textarea>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Work Experience</h6>
                    <div class="">
                      <textarea class="form-control neha-text" name="work_exp">{{ $add->work_exp }}</textarea>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Note</h6>
                    <div class="">
                      <textarea class="form-control neha-text" name="note">{{ $add->note }}</textarea>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Status</h6>
                    <div class="">
                      <select name="status" class="form-control">
                        @if($add->status==1)
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                        @else
                        <option value="0">Inactive</option>
                        <option value="1">Active</option>
                        @endif
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Photo</h6>
                    <div class="">
                      <input type="file" name="staff_image" class="form-control-file" accept=".png, .jpg, .jpeg">
                      @if($add->staff_image)
                      <img src="{{ url('public/uploads/staff/'.$add->staff_image) }}" height="80" width="100" alt="">
                      @else
                      NO IMAGE
                      @endif
                    </div>
                  </div>  
                  <hr>
                </div>
              {{-- </div> --}}

              {{-- <div class="card info-card sales-card p-3">
                <div class="row">
                  <div class="col-lg-10 col-md-8 col-sm-12">
                    <h5 class="mt-3" style="font-size: 17px;">Add More Details</h5>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-12">
                    <div class="float-right">
                      <button type="button" class="btn btn-info">
                        <i class="fa fa-plus"></i> 
                      </button>
                    </div>
                  </div>
                </div>
              </div> --}}

              {{-- <div class="card info-card sales-card"> --}}
                
                <div class="row">
                  <div class="text-center p-3">
                    <a href="{{ route('SCHOOL.staff-directory') }}" class="btn btn-danger">Back</a>
                    <button type="Submit" class="btn btn-info">Update</button>
                  </div>
                </div>
              </div>


            </div>
          </form>

      </section>
    </div>

  </main><!-- End #main -->
@endsection