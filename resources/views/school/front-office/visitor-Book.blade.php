@extends('layouts.app')
@section('content')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Visitor Book</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard">
      <section class="section dashboard">
        <div class="row">

          <!-- left side columns -->
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title" style="padding: 15px 0 0px 0; float: inherit;">Add Visitor </h5>
                <hr>
                <div class="activity">
                  <form action="{{ route('Visitor.DAta') }}" method="post" enctype="multipart/form-data">
                    @csrf
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group1 mb-2">
                        <label for="Address">Purpose</label>
                        <input type="text" name="purpose" class="form-control neha-text" required>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control neha-text" name="name" required>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Name">Phone</label>
                        <input type="text" required class="form-control neha-text" name="phone" maxlength="10" minlength="10" pattern="['0-9']*">
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Name">ID Card</label>
                        <input type="text" class="form-control neha-text" name="id_number">
                      </div>
                    </div>

                    {{-- <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Name">Number of Person</label>
                        <input type="text" class="form-control neha-text" name="number_person">
                      </div>
                    </div> --}}

                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">Date</label>
                        <input type="date" class="form-control neha-text" name="date">
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">In Time</label>
                        <input type="time" class="form-control neha-text" name="intime">
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">Out Time</label>
                        <input type="time" class="form-control neha-text" name="outtime">
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">Note</label>
                        <textarea name="desc" class="form-control neha-text" rows="2"
                          placeholder="Enter here..."></textarea>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-4">
                        <label for="Profile Image1">Attach Document</label>
                        <input type="file" name="document" class="form-control-file" accept="application/pdf,application/vnd.ms-excel">
                      </div>
                    </div>
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
                <h5 class="mt-3" style="font-size: 17px;">Visitor List</h5>
                <hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>purpose</th>
                      <th>Name</th>
                      <th>ID</th>
                      <th>Mobile No.</th>
                      <th>Date</th>
                      <th>In Time</th>
                      <th>Out Time</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>

                    @foreach ($show as $value)                     
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $value->purpose }}</td>
                      <td>{{ $value->name }}</td>
                      <td>{{ $value->id_number }} </td>
                      <td>{{ $value->phone }}</td>
                      <td>{{ $value->date }}</td>
                      <td>{{ $value->intime }}</td>
                      <td>{{ $value->outtime }}</td>
                      <td>
                        <div class="d-flex">
                          <a data-bs-toggle="modal" data-bs-target="#editvisit{{ $value->id }}" class="btn btn-light ml-1"><i class="fa fa-eye"></i></a>
                          <a href="{{ route('Visitor.Delete',['id'=>$value->id]) }}" class="btn btn-light ml-1 delete-confirm"><i class="fa fa-times"></i></a>
                        </div>
                      </td>
                    </tr>
                    <div class="modal fade" id="editvisit{{ $value->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">View Visitor</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="{{ route('Update.Subject',['id'=>$value->id]) }}">
                              @csrf
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group1 text-left mb-2">
                                    <label for="Phone">Document</label>
                                    @if($value->document)
                                    <iframe src="{{ url('public/uploads/document/'.$value->document) }}" style="width:100%;height:200px;" frameborder="0"></iframe>
                                    @else
                                    NO DOCUMENT
                                    @endif
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group1 text-left mb-2">
                                    <label for="Phone">Desc..</label>
                                   <textarea class="form-control" rows="3" disabled>{{ $value->desc }}</textarea>
                                  </div>
                                </div>
                              </div>
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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