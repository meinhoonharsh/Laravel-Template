@extends('layouts.app')


@section('styles')
  <style> 
    /* Custom CSS for Page Here */
  </style>
@endsection


@section('scripts')
  <script> 
    // Custom JS for Page Here 
  </script>
@endsection

@section('content')

    
    <div class="row">


        <?php
          $analytics = [
          ["Enrolled","success"],
          ["Upcoming","primary"],
          ["Attended","danger"],
          ["Attended","info"]
        ];
          ?>
@foreach($analytics as $analytic)
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0">12</h3>
                  <p class="text-{{$analytic[1]}} ml-2 mb-0 font-weight-medium">+3.5%</p>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-{{$analytic[1]}} ">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">{{$analytic[0]}} growth</h6>
          </div>
        </div>
      </div>
@endforeach



    </div>
    <div class="row">
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Attendance Record</h4>
            <canvas id="transaction-history" class="transaction-chart"></canvas>
            <br>
            <h5 class="card-title">Recently Attended</h5>

            <?php
              $attendancerecords = [1,1];
            ?>
            @foreach($attendancerecords as $attendance)
            <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-1">
              <div class="text-md-center text-xl-left">
                <h6 class="mb-1">Introduction to JS</h6>
                <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
              </div>
              <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                <h6 class="font-weight-bold mb-0">$236</h6>
              </div>
            </div>
            @endforeach


          </div>
        </div>
      </div>
      <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-row justify-content-between">
              <h4 class="card-title mb-1">Ongoing Workshops</h4>
              {{-- <p class="text-muted mb-1">Your data status</p> --}}
            </div>
            <div class="row">
              <div class="col-12">
                <div class="preview-list">

                  <?php
                  $ongoingworkshops = ["primary", "info", "success", "danger", "warning"];
                  ?>
                  @foreach($ongoingworkshops as $workshop)
                  <div class="preview-item border-bottom">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-{{$workshop}}">
                        <i class="mdi mdi-file-document"></i>
                      </div>
                    </div>
                    <div class="preview-item-content d-sm-flex flex-grow">
                      <div class="flex-grow">
                        <h6 class="preview-subject">CRUD Operations in PHP with MySQL</h6>
                        <p class="text-muted mb-0">By Jyoti Mathur</p>
                      </div>
                      <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                        <p class="text-muted">15 minutes ago</p>
                        <p class="text-muted mb-0">30 tasks, 5 issues </p>
                      </div>
                    </div>
                  </div>
                  @endforeach




                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <?php 
        $workshops = [
          ["Enrolled","success"],
          ["Upcoming","primary"],
          ["Attended","danger"]
        ]
        ?>
      @foreach($workshops as $workshop)
      <div class="col-sm-4 grid-margin">
        <div class="card">
          <div class="card-body">
            <h5>{{$workshop[0]}}</h5>
            <div class="row">
              <div class="col-8 col-sm-12 col-xl-8 my-auto">
                <div class="d-flex d-sm-block d-md-flex align-items-center">
                  <h2 class=" h1 mb-0">12</h2>
                  {{-- <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p> --}}
                </div>
                <h6 class="text-muted h3 font-weight-normal">Workshops</h6>
              </div>
              <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                <i class="icon-lg mdi mdi-codepen text-{{$workshop[1]}} ml-auto"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="row ">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Order Status</h4>
            <div class="table-responsive">
              <table class="table ">
                <thead>
                  <tr>
                    <th>
                      #
                    </th>
                    <th> Workshop</th>
                    <th> Host by</th>
                    <th> On Date</th>
                    <th> Started at</th>
                    <th> Ended at</th>
                  </tr>
                </thead>
                <tbody>


                  <?php 
                    $completedworkshops = [1,1,1,1,1,1]
                    ?>
                  @foreach($completedworkshops as $workshop)
                  <tr>
                    <td>
                      {{$loop->iteration}}
                    </td>
                    <td class="text-light font-weight-medium">
                      Introduction to Designing
                    </td>
                    <td> Jyoti Mathur </td>
                    <td> 28 July 2021 </td>
                    <td> 18:00 </td>
                    <td> 19:00 </td>
                  </tr>

                  @endforeach



                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>


    {{-- <div class="row">
      <div class="col-md-6 col-xl-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-row justify-content-between">
              <h4 class="card-title">Messages</h4>
              <p class="text-muted mb-1 small">View all</p>
            </div>
            <div class="preview-list">
              <div class="preview-item border-bottom">
                <div class="preview-thumbnail">
                  <img src="assets/images/faces/face6.jpg" alt="image" class="rounded-circle" />
                </div>
                <div class="preview-item-content d-flex flex-grow">
                  <div class="flex-grow">
                    <div class="d-flex d-md-block d-xl-flex justify-content-between">
                      <h6 class="preview-subject">Leonard</h6>
                      <p class="text-muted text-small">5 minutes ago</p>
                    </div>
                    <p class="text-muted">Well, it seems to be working now.</p>
                  </div>
                </div>
              </div>
              <div class="preview-item border-bottom">
                <div class="preview-thumbnail">
                  <img src="assets/images/faces/face8.jpg" alt="image" class="rounded-circle" />
                </div>
                <div class="preview-item-content d-flex flex-grow">
                  <div class="flex-grow">
                    <div class="d-flex d-md-block d-xl-flex justify-content-between">
                      <h6 class="preview-subject">Luella Mills</h6>
                      <p class="text-muted text-small">10 Minutes Ago</p>
                    </div>
                    <p class="text-muted">Well, it seems to be working now.</p>
                  </div>
                </div>
              </div>
              <div class="preview-item border-bottom">
                <div class="preview-thumbnail">
                  <img src="assets/images/faces/face9.jpg" alt="image" class="rounded-circle" />
                </div>
                <div class="preview-item-content d-flex flex-grow">
                  <div class="flex-grow">
                    <div class="d-flex d-md-block d-xl-flex justify-content-between">
                      <h6 class="preview-subject">Ethel Kelly</h6>
                      <p class="text-muted text-small">2 Hours Ago</p>
                    </div>
                    <p class="text-muted">Please review the tickets</p>
                  </div>
                </div>
              </div>
              <div class="preview-item border-bottom">
                <div class="preview-thumbnail">
                  <img src="assets/images/faces/face11.jpg" alt="image" class="rounded-circle" />
                </div>
                <div class="preview-item-content d-flex flex-grow">
                  <div class="flex-grow">
                    <div class="d-flex d-md-block d-xl-flex justify-content-between">
                      <h6 class="preview-subject">Herman May</h6>
                      <p class="text-muted text-small">4 Hours Ago</p>
                    </div>
                    <p class="text-muted">Thanks a lot. It was easy to fix it .</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Portfolio Slide</h4>
            <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
              <div class="item">
                <img src="assets/images/dashboard/Rectangle.jpg" alt="">
              </div>
              <div class="item">
                <img src="assets/images/dashboard/Img_5.jpg" alt="">
              </div>
              <div class="item">
                <img src="assets/images/dashboard/img_6.jpg" alt="">
              </div>
            </div>
            <div class="d-flex py-4">
              <div class="preview-list w-100">
                <div class="preview-item p-0">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face12.jpg" class="rounded-circle" alt="">
                  </div>
                  <div class="preview-item-content d-flex flex-grow">
                    <div class="flex-grow">
                      <div class="d-flex d-md-block d-xl-flex justify-content-between">
                        <h6 class="preview-subject">CeeCee Bass</h6>
                        <p class="text-muted text-small">4 Hours Ago</p>
                      </div>
                      <p class="text-muted">Well, it seems to be working now.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <p class="text-muted">Well, it seems to be working now. </p>
            <div class="progress progress-md portfolio-progress">
              <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-xl-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">To do list</h4>
            <div class="add-items d-flex">
              <input type="text" class="form-control todo-list-input" placeholder="enter task..">
              <button class="add btn btn-primary todo-list-add-btn">Add</button>
            </div>
            <div class="list-wrapper">
              <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
                <li>
                  <div class="form-check form-check-primary">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox"> Create invoice </label>
                  </div>
                  <i class="remove mdi mdi-close-box"></i>
                </li>
                <li>
                  <div class="form-check form-check-primary">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox"> Meeting with Alita </label>
                  </div>
                  <i class="remove mdi mdi-close-box"></i>
                </li>
                <li class="completed">
                  <div class="form-check form-check-primary">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked> Prepare for presentation </label>
                  </div>
                  <i class="remove mdi mdi-close-box"></i>
                </li>
                <li>
                  <div class="form-check form-check-primary">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox"> Plan weekend outing </label>
                  </div>
                  <i class="remove mdi mdi-close-box"></i>
                </li>
                <li>
                  <div class="form-check form-check-primary">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox"> Pick up kids from school </label>
                  </div>
                  <i class="remove mdi mdi-close-box"></i>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Visitors by Countries</h4>
            <div class="row">
              <div class="col-md-5">
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          <i class="flag-icon flag-icon-us"></i>
                        </td>
                        <td>USA</td>
                        <td class="text-right"> 1500 </td>
                        <td class="text-right font-weight-medium"> 56.35% </td>
                      </tr>
                      <tr>
                        <td>
                          <i class="flag-icon flag-icon-de"></i>
                        </td>
                        <td>Germany</td>
                        <td class="text-right"> 800 </td>
                        <td class="text-right font-weight-medium"> 33.25% </td>
                      </tr>
                      <tr>
                        <td>
                          <i class="flag-icon flag-icon-au"></i>
                        </td>
                        <td>Australia</td>
                        <td class="text-right"> 760 </td>
                        <td class="text-right font-weight-medium"> 15.45% </td>
                      </tr>
                      <tr>
                        <td>
                          <i class="flag-icon flag-icon-gb"></i>
                        </td>
                        <td>United Kingdom</td>
                        <td class="text-right"> 450 </td>
                        <td class="text-right font-weight-medium"> 25.00% </td>
                      </tr>
                      <tr>
                        <td>
                          <i class="flag-icon flag-icon-ro"></i>
                        </td>
                        <td>Romania</td>
                        <td class="text-right"> 620 </td>
                        <td class="text-right font-weight-medium"> 10.25% </td>
                      </tr>
                      <tr>
                        <td>
                          <i class="flag-icon flag-icon-br"></i>
                        </td>
                        <td>Brasil</td>
                        <td class="text-right"> 230 </td>
                        <td class="text-right font-weight-medium"> 75.00% </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="col-md-7">
                <div id="audience-map" class="vector-map"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}


@endsection