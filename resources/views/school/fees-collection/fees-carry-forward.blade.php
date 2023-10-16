@extends('layouts.app')
@section('content')
<main id="main" class="main">
@php
    use App\Models\FeesDiscount;
    use App\Models\FeesCollect;
@endphp
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Fees Carry Forward</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard" >
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              <div class="card info-card sales-card" style="padding-bottom: 36px;">
                <form action="{{ route('SCHOOL.fees-carry-forward') }}" method="get">
                  @csrf
                <div class="row">
                  <h5 class="mt-3" style="font-size: 17px;">Select Criteria</h5>
                  <div class="col-md-5 sol-sm-12">
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
                  <div class="col-md-5 sol-sm-12">
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
                  <div class="col-md-2 col-sm-12">
                    <div class="mt-4 pt-1">
                      <button type="submit" class="btn btn-info" style="margin-top: 5px"><i class="fa fa-search"></i> Search</button>
                    </div>
                  </div>

                </div>
              </form>
              </div>

              <div class="p-3">
                <h5>Previous Session Balance Fees</h5>
               </div>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Admission No.</th>
                    <th>Roll No.</th>
                    <th>Class</th>
                    <th>Section</th>
                    <th class="w-10">Student</th>
                    <th class="w-10">Mobile</th>
                    <th>Balance</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($show as $value)
                  {{-- {{dd($show);}} --}}
                  <tr id="task-1" class="task-list-row test-font " data-task-id="1" data-user="Platinum">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->admission_no }}</td>
                    <td>{{ $value->roll_no }}</td>
                    <td>{{ $value->class }}</td>
                    <td>{{ $value->section }}</td>
                    <td>
                      <span class="text-bold text-capitalize">Name:</span><span> {{ $value->first_name }} {{ $value->last_name }}</span><br>
                      <span class="text-bold text-capitalize">F.Name:</span><span> {{ $value->father_name }}</span><br>
                      <span class="text-bold">Email:</span><span> {{ $value->email }}</span><br>
                    </td>
                    <td>+91{{ $value->mobile_no }}</td>
               
                    {{-- <td>{{ date('d-M-Y', strtotime($value->admission_date)); }}</td> --}}
                  
                    {{-- <td>
                      <form action="{{ route('Fees.Carry.Data',['id'=>$value->id]) }}" method="post">
                        @csrf
                        <div>
                          ₹ <input type="text" style="outline: none;" name="balance" value="{{ $value->balance }}">
                          <button type="submit" class="btn btn-info" style="padding: 0px 3px;font-size: 13px;margin-top: -5px;">Save</button>
                        </div>
                      </form>
                    </td> --}}

                    @php
                        $fees = FeesCollect::where('stu_id',$value->id)->get();
                        // {{dd($fees);}}
                    @endphp
                    @php
                        $sum = FeesCollect::where('stu_id',$value->id)->sum('total');
                        $amot = 0;
                    @endphp
                    @foreach ($fees->unique('user_id') as $key => $item)
                    @php
                     $total = FeesDiscount::where('discount',$item->fees_group)->where('name',$item->user_id)->first();
                     $amot = $amot + ($total->amount ?? '0');

                    //  {{dd($amount);}}
                     @endphp

                    @endforeach
                 @if ((int)($amot ?? '0') > $sum)
                     <td><span class="text-warning">Pending..</span><span class="text-bold">{{ number_format($sum - ($amot ?? '0'))}}</span></td>
                   @elseif((int)($amot ?? '0') == $sum)
                    <td><span></span><span class="text-success">---</span></td>
                 @else
                 <td class="text-primary">Carry Forward <span>₹{{ $sum - ($amot ?? '0') }}
                </span></td>
                 @endif
                  </tr>
                  @endforeach

                </tbody>
              </table>

            </div>
      </section>
    </div>

  </main><!-- End #main -->
@endsection