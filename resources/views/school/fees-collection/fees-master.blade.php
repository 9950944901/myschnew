@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Fees  Master</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard" >
      <section class="section dashboard">
        <div class="row">

          <!-- left side columns -->
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body" style="padding: 0 20px 0px 20px;">
                <h5 class="card-title" style="padding: 15px 0 0px 0; float: inherit;">Add Fees Master </h5>
                <hr>
                <div class="activity">
                  <form action="{{ route('Fees.master.Data') }}" method="post">
                    @csrf
                  <div class="row">
                   
                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Name">Fees Group</label>
                         <select name="group" class="form-control neha-text" required>
                        <option value="">Select</option>
                        @foreach ($show as $value)                         
                        <option>{{ $value->name }}</option>
                        @endforeach
                      </select>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Name">Fees Type</label>
                        <select name="type" class="form-control neha-text"  required>
                          <option value="">Select</option>
                          @foreach ($data as $value)                         
                        <option>{{ $value->name }}</option>
                        @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">Due Date</label>
                        <input type="date" class="form-control neha-text" name="due_date" id="date1" required>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">Amount</label>
                        <input type="text" class="form-control neha-text" id="date1" name="amount" required>
                      </div>
                    </div>

                    {{-- <div class="col-md-12">
                      <div class="form-group1 text-left mb-4">
                        <label for="Profile Image1">Fine Type</label>
                        <div class="row">
                          <div class="col-md-4">                          
                              <div class="checkbox">
                                <input type="radio" name="fine_type" checked>
                               <label for="op1">None</label>
                              </div>
                             </div>
                          
                          <div class="col-md-4">
                            <div class="checkbox">
                              <input type="radio" name="fine_type">
                              <label for="op2">Percentage</label>
                             </div>
                          </div>
                          <div class="col-md-4">
                            <div class="checkbox">
                              <input type="radio" name="fine_type" >
                              <label for="op2">Fix Amount</label>
                             </div>
                          </div>
                        </div>
                      </div>
                    </div> --}}

                    <div class="col-md-12">
                      <label for="Profile Image1">Fine Type</label>
                    </div>
                    <div class="col-md-12">
                      <input class="rb-email" value="None" name="fine_type" id="rb-email" type="radio" checked="checked" />
                      <label class="label" for="rb-email">None</label>
                      <br>
                      
                      <input class="rb-phone" value="Fix Amount" name="fine_type" id="rb-phone" type="radio" />
                      <label class="label" for="rb-phone">Fix Amount</label>
                      <br>
                      <br>
                      
                      <label class="label phone" for="phone">Fine Amount:</label>
                      <input class="form-control phone" id="phone" type="text" name="fine_amount" />
                    </div>

                          <style>
                            .email,
                          .phone {
                            display:none;
                          }

                          .rb-email:checked ~ .email {
                            display:inline;
                          }

                          .rb-phone:checked ~ .phone {
                            display:inline;
                          }
                          </style>
                    {{-- <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">Percentage</label>
                        <input type="text" class="form-control neha-text" id="date1" name="percentage">
                      </div>
                    </div> --}}
{{-- 
                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone" >Fine Amount</label>
                        <input type="text"  class="form-control neha-text" id="date1" name="fine_amount">
                      </div>
                    </div> --}}

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
                <h5 class="mt-3" style="font-size: 17px;">Fees Master List</h5>
                <hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Fees Group</th>
                      <th>Fees Type</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach ($add as $value)                     
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $value->group }}</td>
                      <td>{{ $value->type }}</td>
                      <td>
                        <div class="d-flex">
                          <a data-bs-toggle="modal" data-bs-target="#editmaster{{ $value->id }}" data-bs-whatever="@mdo" class="btn btn-light ml-1"><i class="fa fa-pencil"></i></a>
                          <a href="{{ route('Fees.Master.Delete',['id'=>$value->id]) }}" class="btn btn-light ml-1 delete-confirm"><i class="fa fa-times"></i></a>
                        </div>
                      </td>
                    </tr>
                    <div class="modal fade" id="editmaster{{ $value->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Fees Master</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="{{ route('Fees.Update.Master',['id'=>$value->id]) }}">
                              @csrf
                              <div class="row">
                   
                                <div class="col-md-12">
                                  <div class="form-group1 text-left mb-2">
                                    <label for="Name">Fees Group</label>
                                     <select name="group" class="form-control neha-text" required>
                                    <option>{{ $value->group }}</option>
                                    @foreach ($show as $value1)                         
                                    <option>{{ $value1->name }}</option>
                                    @endforeach
                                  </select>
                                  </div>
                                </div>
            
                                <div class="col-md-12">
                                  <div class="form-group1 text-left mb-2">
                                    <label for="Name">Fees Type</label>
                                    <select name="type" class="form-control neha-text"  required>
                                      <option>{{ $value->type }}</option>
                                      @foreach ($data as $value2)                         
                                    <option>{{ $value2->name }}</option>
                                    @endforeach
                                    </select>
                                  </div>
                                </div>
            
                                <div class="col-md-12">
                                  <div class="form-group1 text-left mb-2">
                                    <label for="Phone">Due Date</label>
                                    <input type="date" class="form-control neha-text" name="due_date" id="date1" value="{{ $value->due_date }}" required>
                                  </div>
                                </div>
            
                                <div class="col-md-12">
                                  <div class="form-group1 text-left mb-2">
                                    <label for="Phone">Amount</label>
                                    <input type="text" class="form-control neha-text" id="date1" value="{{ $value->amount }}" name="amount" required>
                                  </div>
                                </div>
            
                                <div class="col-md-12">
                                  <label for="Profile Image1">Fine Type</label>
                                </div>
                                <div class="col-md-12">
                                  <input class="rb-email" name="fine_type" id="rb-email" type="radio" {{ ($value->fine_type=="None")? "checked" : "" }}  value="None"/>
                                  <label class="label" for="rb-email">None</label>
                                  <br>
                                  
                                  <input class="rb-phone" name="fine_type" id="rb-phone" type="radio" {{ ($value->fine_type=="Fix Amount")? "checked" : "" }} value="Fix Amount" />
                                  <label class="label" for="rb-phone">Fix Amount</label>
                                  <br>
                                  <br>
                                  
                                  <label class="label phone" for="phone">Fine Amount:</label>
                                  <input class="form-control phone" id="phone" type="text" name="fine_amount" />
                                </div>
            
                                      <style>
                                        .email,
                                      .phone {
                                        display:none;
                                      }
            
                                      .rb-email:checked ~ .email {
                                        display:inline;
                                      }
            
                                      .rb-phone:checked ~ .phone {
                                        display:inline;
                                      }
                                      </style>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-info">Save</button>
                                </div>
                              </div>
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