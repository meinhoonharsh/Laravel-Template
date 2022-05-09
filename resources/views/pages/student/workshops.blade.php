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
    var description = $(this).data('description')
    var category = $(this).data('category')
    var teacher = $(this).data('teacher')
    var date = $(this).data('date')
    var lectures = $(this).data('lectures')
    var tasks = $(this).data('tasks')
    var enrolled = $(this).data('enrolled')

    $('#editModal input[name=id]').val(id)
    $('#editModal .name').html(name)
    $('#editModal .description').html(description)
    $('#editModal .category').html(category)
    $('#editModal .teacher').html(teacher)
    $('#editModal .date').html(date)
    $('#editModal .lectures').html(lectures)
    $('#editModal .tasks').html(tasks)
    if(enrolled){
      $('#editModal button[type=submit]').html('Enrolled').attr('disabled', 'disabled')
    }else
    {
      $('#editModal button[type=submit]').html('Enroll').removeAttr('disabled')
    }
    
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
      <form method="post" action="/enrollstudent">
        @csrf 
        <input type="hidden" name="id">
        <input type="hidden" name="host_id" >
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Workshop Details</h5>
          <button type="button" style="background: transparent; color: #fff; border: none;" data-bs-dismiss="modal" aria-label="Close">&times;</button>
        </div>
        <div class="modal-body">


              
          <div class="p-1 px-4 text-muted">

            <p>Name : <span class="text-light name"></span></p>
            <p>Teacher : <span class="text-light teacher"></span></p>
            <p>Category : <span class="text-light category"></span></p>
            <p>Description : <span class="text-light description"></span></p>
            <p>Date : <span class="text-light date"></span></p>
            <p>Lectures : <span class="text-light lectures"></span></p>
            <p>Tasks : <span class="text-light tasks"></span></p>

            

          </div>




        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Enroll</button>
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
            <h4 class="card-title">Workshops</h4>
            <div class="table-responsive">
                <table class="table ">
                  <thead>
                    <tr>
                      <th>
                        #
                      </th>
                      <th> Workshop</th>
                      <th> Host</th>
                      <th> Category</th>
                      <th>Enrolled</th>
                      <th> Date</th>
                      {{-- <th> Status</th> --}}
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
    
    
                    @forelse($workshops as $workshop)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td class="text-light font-weight-medium">
                        {{$workshop->name}}
                      </td>
                      <td>{{$workshop->teachername}}</td>
                      <td>{{$workshop->category}}</td>
                      <td>{{$workshop->enrolledStudents}} Students</td>
                      <td> {{date("d M Y", strtotime($workshop->startdate))}} - {{date("d M Y", strtotime($workshop->enddate))}} </td>
                      {{-- <td>
                        @if($workshop->hasEnrolled)
                        <div class="badge badge-outline-success">Enrolled</div>
                        @else
                        <div class="badge badge-outline-warning">Pending</div>
                        @endif
                      </td> --}}
                      <td>
                          <span class="badge badge-outline-success  edit"
                          data-id="{{$workshop->host_id}}"
                          data-name="{{$workshop->name}}"
                          data-description="{{$workshop->description}}"
                          data-teacher="{{$workshop->teachername}}"
                          data-category="{{$workshop->category}}"
                          data-date="{{date("d M Y", strtotime($workshop->startdate))}} - {{date("d M Y", strtotime($workshop->enddate))}}"
                          data-lectures="{{count($workshop->lectures)}}"
                          data-tasks="{{count($workshop->tasks)}}"
                          data-enrolled="{{$workshop->hasEnrolled}}"
                          >
                          @if($workshop->hasEnrolled)
                          Enrolled
                        @else
                        View
                        @endif
                        </span>
                      </td>
                    </tr>
                    @empty
                      <td></td>
                      <td>No Workshop Found</td>
                    @endforelse
    
    
    
                  </tbody>
                </table>
              </div>
          </div>
        </div>
      </div>
    </div>





@endsection