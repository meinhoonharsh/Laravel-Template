








@extends('layouts.app')


@section('styles')
  <style> 
    /* Custom CSS for Page Here */
    
  </style>
@endsection


@section('scripts')
<script>
  
  

  
</script>
@endsection

@section('content')



    <div class="row">
     

    </div>
    <div class="row ">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Lectures</h4>
            <div class="table-responsive">
              <table class="table ">
                <thead>
                  <tr>
                    <th>
                      #
                    </th>
                    <th> Task</th>
                    <th>Your message</th>
                    <th> Submitted on</th>

                    <th> Submission</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($tasks as $task)
                  <tr>
                    <td>
                      {{$loop->iteration}}
                    </td>
                    <td class="text-light font-weight-medium">
                      {{$task->name}}
                    | By {{$task->teachername}}
                    </td>
                    <td>{{$task->message}}</td>
                    <td> {{date("d M Y", strtotime($task->created_at))}} </td>

                    <td>
                     <a href="/public/uploads/tasksubmission/{{$task->submissionfile}}" download="TaskSubmission-for-{{$task->name}}">Download</a>                   
                    </td>
                  </tr>
                  @empty
                    <td></td>
                    <td>No Task Found</td>
                  @endforelse
  
  
  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>





@endsection
