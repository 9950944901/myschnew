@extends('layouts.app')
@section('content')
<main id="main" class="main">

  @php
  use App\Models\GeneralSetting;
  $info = GeneralSetting::first();
  @endphp

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Fees Discount</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard">
      <section class="section dashboard">
        <div class="row">

          <!-- left side columns -->
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body" style="padding: 0 20px 0px 20px;">
                <h5 class="card-title" style="padding: 15px 0 0px 0; float: inherit;">Add Fees Discount </h5>
                <hr>
                <div class="activity">
                  <form method="post" action="{{ route('Fees.Discount.Add') }}">
                    @csrf
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">Session</label>
                        <input type="text" class="form-control neha-text"  name="name" value="{{ $info->session }}" required readonly>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">Class @error('discount')
                          <span class="text-danger"><b>({{ $message }})</b></span>
                        @enderror</label>
                        <select name="discount" class="form-control neha-text" required>
                          <option value="">Select</option>
                          @foreach($class as $clz)
                            <option>{{ $clz->class }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label>Amount (₹)</label>
                        <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\.*)\./g, '$1');" minlength="3" maxlength="10" required class="form-control neha-text" name="amount">
                      </div>
                    </div>

                    @if(!$fees->isEmpty())
                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label>Fees Type</label>
                        @foreach($fees as $key => $fee)
                        <div><input type="checkbox" name="fees_type[]" checked value="{{ $fee->name }}"><label class="ml-2">{{ $fee->name }}</label></div>
                        @endforeach
                      </div>
                    </div>
                    @else
                    @endif


                    <hr>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-info">Save</button>
                    </div>

                  </div>
                </form>
                </div>
              </div>
            </div>

          </div><!-- End left side columns -->

          <!-- Right side columns -->
          <div class="col-lg-8">
            <div class="row">
              <div class="card">
                <h5 class="mt-3" style="font-size: 17px;">Fees Discount List</h5>
                <hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Session</th>
                      <th>Class</th>
                      <th>Amount</th>
                      <th>Fees Type</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach ($data as $value)                      
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $value->name }}</td>
                      <td>{{ $value->discount }}</td>
                      <td>₹{{ number_format($value->amount) }}</td>
                      <td>
                        @if($value->desc=="null")
                        @else
                        @foreach(json_decode($value->desc) as $type)
                        {{ $type }}<br>
                        @endforeach
                        @endif
                    </td>
                    <td>

                        <div class="d-flex">
                          {{-- <a href="button" class="btn btn-light ml-1"><i class="fa fa-tag"></i></a> --}}
                          <a data-bs-toggle="modal" data-bs-target="#editdis{{ $value->id }}" data-bs-whatever="@mdo" class="btn btn-light ml-1"><i class="fa fa-pencil"></i></a>
                          <a href="{{ route('Fees.Discount.Delete',['id'=>$value->id]) }}" class="btn btn-light ml-1 delete-confirm"><i class="fa fa-times"></i></a>
                        </div>
                      </td>
                    </tr>
                    <div class="modal fade" id="editdis{{ $value->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Fees Discount</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="{{ route('Fees.edit.discount',['id'=>$value->id]) }}">
                              @csrf
                              {{-- <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Name:</label>
                                <input type="text" class="form-control" name="name" value="{{ $value->name }}" id="recipient-name" required>
                              </div>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Discount Code:</label>
                                <input type="text" class="form-control" name="discount" value="{{ $value->discount }}" id="recipient-name" required>
                              </div> --}}

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Amount:</label>
                                <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\.*)\./g, '$1');" minlength="3" maxlength="10"  value="{{ $value->amount }}" required class="form-control neha-text" name="amount">
                              </div>

                              {{-- <div class="mb-3">
                                <label for="message-text" class="col-form-label">Description:</label>
                                <textarea class="form-control" id="message-text" name="desc">{{ $value->desc }}</textarea>
                              </div>
                               --}}
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div><!-- End Right side columns -->

        </div>
      </section>
    </div>

  </main><!-- End #main -->
@endsection