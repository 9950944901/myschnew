@extends('layouts.app')
@section('content')
<style>
    .switch {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
    }

    /* Hide default HTML checkbox */
    .switch input {
      opacity: 0;
      width: 0;
      height: 0;
    }

    /* The slider */
    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }

    .slider:before {
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }

    input:checked+.slider {
      background-color: #2196F3;
    }

    input:focus+.slider {
      box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
      -webkit-transform: translateX(26px);
      -ms-transform: translateX(26px);
      transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
      border-radius: 34px;
    }

    .slider.round:before {
      border-radius: 50%;
    }
  </style>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Student Profile Update</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard ">
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              <div class="card info-card sales-card">
                <div class="row">
                  <h5 class="mt-3" style="font-size: 17px;">Student Profile Update</h5>
                  <hr>
                  <div class="col-lg-12 col-md-12 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Allow Editable Form Fields</h6>
                    <div class="">
                      <input type="radio" value="radio" name="same"> <label>Disabled</label> &nbsp;
                      <input type="radio" value="radio" name="same"> <label>Enabled</label>
                    </div>
                  </div>

                  <div class="col-lg-12 col-md-12 sol-sm-12">
                    <div class="mb-3">
                      <button type="button" class="btn btn-info"> Save</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="mb-3">
              <h5 class="mt-3" style="font-size: 17px;">Allowed Edit Form Fields on Student Profile</h5>
            </div>

            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr class="" style="font-size: 13px; color: #012970; ">
                  <th>S No.</th>
                  <th>Name</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                  <td>1</td>
                  <td>First Name</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-2" class="task-list-row test-font" data-task-id="2" data-user="Silver">
                  <td>2</td>
                  <td>Middle Name</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-3" class="task-list-row test-font" data-task-id="2" data-user="Diamond">
                  <td>3</td>
                  <td>Last Name</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-4" class="task-list-row test-font" data-task-id="2" data-user="Silver">
                  <td>4</td>
                  <td>Admission Date</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-5" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>5</td>
                  <td>RTE</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-6" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>6</td>
                  <td>Student Photo</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-7" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>7</td>
                  <td>Mobile Number</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-8" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>8</td>
                  <td>Email</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-9" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>9</td>
                  <td>Religion</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-10" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>10</td>
                  <td>Caste</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-11" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>11</td>
                  <td>Date of Birth</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-12" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>12</td>
                  <td>Blood Group</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-13" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>13</td>
                  <td>Gender</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-14" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>14</td>
                  <td>Current Address</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-15" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>15</td>
                  <td>Permanent Address</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-16" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>16</td>
                  <td>Category</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-17" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>17</td>
                  <td>Bank Account Number</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-18" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>18</td>
                  <td>Bank Number</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-19" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>19</td>
                  <td>IFSC Code</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-20" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>20</td>
                  <td>Father Name</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-21" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>21</td>
                  <td>Father Phone</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-22" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>22</td>
                  <td>Father Occupation</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-23" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>23</td>
                  <td>Mother Name</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-24" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>24</td>
                  <td>Mother Phone</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-25" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>25</td>
                  <td>Mother Occupation</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-26" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>26</td>
                  <td>Guardian Name</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-27" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>27</td>
                  <td>Guardian Relation</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-28" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>28</td>
                  <td>Guardian Phone</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-29" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>29</td>
                  <td>Guardian Occupation</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-30" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>30</td>
                  <td>Guardian Email</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-31" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>31</td>
                  <td>Guardian Address</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-32" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>32</td>
                  <td>National Identification Number</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-33" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>33</td>
                  <td>Local Identification Number</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-34" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>34</td>
                  <td>Father Photo</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-35" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>35</td>
                  <td>Mother Photo</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-36" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>36</td>
                  <td>Guardian Photo</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-37" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>37</td>
                  <td>Height</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-38" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>38</td>
                  <td>Weight</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

                <tr id="task-39" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>39</td>
                  <td>Previous School Details	</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>

              </tbody>
            </table>

          </div>
      </section>
    </div>

  </main><!-- End #main -->
@endsection