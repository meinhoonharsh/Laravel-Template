@extends('layouts.app')


@section('styles')
  <style> 
    /* Custom CSS for Page Here */
    
  </style>
@endsection


@section('scripts')
<script>
  var editModal = new bootstrap.Modal(document.getElementById('editModal'))
  $('.edit').click(function(){
    var id = $(this).data('id');
    var name = $(this).data('name')
    // var description = $(this).data('description')
    // var link = $(this).data('link')
    var teacher = $(this).data('teacher')
    // var date = $(this).data('date')
    // var time = $(this).data('time')

    $('#editModal input[name=id]').val(id)
    $('#editModal .name').html(name)
    // $('#editModal .description').html(description)
    // $('#editModal .link').html(link)
    $('#editModal .teacher').html(teacher)
    // $('#editModal .date').html(date)
    // $('#editModal .time').html(time)

      // $('#editModal .hreflink').attr('href',link)

    
    editModal.show()
  })

  
  

  
</script>
@endsection

@section('content')

{{-- <!-- Button trigger modal -->
<button type="button" class="btn btn-primary font-weight-bold mb-4 text-dark" data-bs-toggle="modal" data-bs-target="#addModal">
    Add Lecture
  </button> --}}
  

  <?php $ways = [
    "add","edit"
  ]; ?>
  @forelse ($ways as $way)
  <!-- Modal -->
  <div class="modal fade" id="{{$way}}Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form method="post" action="/submittask" enctype="multipart/form-data">
        @csrf 
        <input type="hidden" name="id">
        <input type="hidden" name="host_id" >
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Lecture Details</h5>
          <button type="button" style="background: transparent; color: #fff; border: none;" data-bs-dismiss="modal" aria-label="Close">&times;</button>
        </div>
        <div class="modal-body">


              
          <div class="p-1 px-4 text-muted">

            <h3>Submit Task for <span class="text-light name"></span>
              &nbsp;Given By <span class="text-light teacher"></span></h3>


              <div class="form-group">
                {{-- <label for="exampleTextarea1">Message</label> --}}
                <textarea class="form-control" name="message" placeholder="Your Message here" id="exampleTextarea1" rows="4" spellcheck="false" ></textarea>
              </div>
              
            
          <div class="mt-2">
            {{-- <label for="formFileLg" class="form-label">Large file input example</label> --}}
            <input class="form-control form-control-lg" id="formFileLg" name="submissionfile" type="file">
          </div>

          </div>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button  class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
    </div>
  </div>
  @empty @endforelse


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
                    <th>Description</th>
                    <th> Submission Date</th>
                    <th> Images</th>
                    <th> Actions</th>
                  </tr>
                </thead>
                <tbody>
  
  
                  <?php 
                    $completedworkshops = [1,1,1,1,1,1]
                    ?>
                  @forelse($tasks as $task)
                  <tr>
                    <td>
                      {{$loop->iteration}}
                    </td>
                    <td class="text-light font-weight-medium">
                      {{$task->name}}
                    | By {{$task->teachername}}
                    </td>
                    <td>{{$task->description}}</td>
                    <td> {{date("d M Y", strtotime($task->submissiondate))}} </td>
                    <?php $images= explode('------', $task->images); ?>
                    <td style="max-width:200px;display:flex;flex-wrap:wrap " > 
                      @foreach ($images as $image)
                      <img src="{{url('/')}}/public/uploads/tasks/{{$image}}" class="" style="width:50%;border-radius:0;height:100%">
                      {{-- {{$image}} --}}
                          
                      @endforeach  
                    </td> 
                    <td>
                      @if(!$task->submitted)
                        <span class="edit badge badge-outline-primary"
                        data-id="{{$task->id}}" 
                        data-name="{{$task->name}}"
                        data-description="{{$task->description}}"
                        data-teacher="{{$task->teachername}}"
                        > Submit
                      </span>
                      @else
                        <span class="badge badge-outline-dark text-muted">
                          Submitted
                        </span>
                      @endif                     
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