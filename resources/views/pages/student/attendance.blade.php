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
     
      @foreach($availableattendance as $lecture)
      <div class="col-sm-4 grid-margin">
        <div class="card">
          <div class="card-body">
            <form action="/markattendance" method="POST">
              <input type="hidden" name="lecture_id" value="{{$lecture->id}}">
              @csrf
              
            <h5>{{$lecture->name}}</h5>
            <div class="form-group">
                {{-- <label for="exampleInputUsername1">Name</label> --}}
                <input type="text" name="password" value="" class="form-control" id="exampleInputUsername1" placeholder="Password"required>
            </div>

               <button type="submit" class="btn btn-primary">Mark Attendance</button>
            </form>


          
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="row ">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Attended Lectures</h4>
            <div class="table-responsive">
                <table class="table ">
                  <thead>
                    <tr>
                      <th>
                        #
                      </th>
                      <th> Lecture</th>
                      <th> Link</th>
                      <th> Date</th>
                      <th> Time</th>
                      <th>Marked at</th>
                    </tr>
                  </thead>
                  <tbody>
    
    
                    <?php 
                      $completedworkshops = [1,1,1,1,1,1]
                      ?>
                    @forelse($attendancerecords as $lecture)
                    <tr>
                      <td>
                        {{$loop->iteration}}
                      </td>
                      <td class="text-light font-weight-medium">
                        {{$lecture->name}}
                      </td>
                      <td> {{$lecture->lecture_link ?? 'No Link Added'}} </td> 
                      <td> {{date("d M Y", strtotime($lecture->date))}} </td>
                      <td> {{date("H:i", strtotime($lecture->starttime))}} - {{date("H:i", strtotime($lecture->endtime))}} </td>
                      <td>{{$lecture->created_at}}</td>
                    </tr>
                    @empty
                      <td></td>
                      <td>No Lecture Found</td>
                    @endforelse
    
    
    
                  </tbody>
                </table>
              </div>
          </div>
        </div>
      </div>
    </div>





@endsection