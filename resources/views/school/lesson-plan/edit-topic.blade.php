@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Topic</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard">
      <section class="section dashboard">
        <div class="row">

          <!-- left side columns -->
          <div class="col-lg-6">
            <form action="{{ route('Update.Topic',['id'=>$view->id]) }}" method="post">
              @csrf
            <div class="card">
              <div class="card-body" style="padding: 0 20px 0px 20px;">
                <h5 class="card-title" style="padding: 15px 0 0px 0; float: inherit;">Edit Topic </h5>
                <hr>
                <div class="activity">
                  <div class="row">

                    <div class="col-lg-12 col-md-6 col-sm-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Name">Class</label>
                        <select name="class" class="form-control neha-text" required>
                          <option>{{ $view->class }}</option>
                          @foreach ($class as $class)
                          <option>{{ $class->class }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    
                    <div class="col-lg-12 col-md-6 col-sm-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Name">Section</label>
                        <select name="section" class="form-control neha-text" required>
                          <option>{{ $view->section }}</option>
                          @foreach ($sec as $sec)
                          <option>{{ $sec->section }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-lg-12 col-md-6 col-sm-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Name">Subject Group</label>
                        <select name="subject_group" class="form-control neha-text" required>
                          <option>{{ $view->subject_group }}</option>
                          @foreach ($group as $group)
                          <option>{{ $group->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-lg-12 col-md-6 col-sm-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Name">Subject</label>
                        <select name="subject" class="form-control neha-text" required>
                          <option>{{ $view->subject }}</option>
                          @foreach ($subj as $subj)
                          <option>{{ $subj->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    <div class="col-lg-12 col-md-6 col-sm-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Name">Lesson</label>
                        <select name="lesson" class="form-control neha-text" required>
                          <option>{{ $view->lesson }}</option>
                          @foreach ($show as $aa)
                          @foreach(json_decode($aa->lesson) as $data)
                          <option>{{ $data }}</option>
                        @endforeach
                        @endforeach
                       
                        </select>
                      </div>
                    </div>
                   
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <label for="Phone">Topic Name</label>
                    </div>

                    <div class="multi-field-wrapper">
                      <div class="multi-fields">
                        @foreach(json_decode($view->topic) as $data)
                        <div class="multi-field d-flex">
                          <input type="text" class="form-control" name="topic[]" value="{{ $data }}" required>
                          <p class="remove-field"><i class="fa fa-remove" style="margin-top: 10px;margin-left: 2px;color:red"></i></p>
                        </div>
                        @endforeach
                      </div>
                    <p class="add-field" style="background: #cfd3d3;display: initial;border-radius: 5px;padding: 3px 7px;"><i class="fa fa-plus"></i> Add</p>
                  </div>

                    <hr>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-info">Update</button>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </form>

          </div><!-- End left side columns -->
          </div>

   

        </div>
      </section>
    </div>

  </main><!-- End #main -->

  <script>
    $('.multi-field-wrapper').each(function() {
    var $wrapper = $('.multi-fields', this);
    $(".add-field", $(this)).click(function(e) {
        $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();
    });
    $('.multi-field .remove-field', $wrapper).click(function() {
        if ($('.multi-field', $wrapper).length > 1)
            $(this).parent('.multi-field').remove();
    });
});
  </script>
@endsection