@extends('layouts.app')


@section('styles')
  <style> 
    /* Custom CSS for Page Here */

  </style>
@endsection


@section('scripts')
<script>
  var editModal = new bootstrap.Modal(document.getElementById('editModal'))
  var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'))

  $('.edit').click(function(){
    // alert('ddedeww')
    var id = $(this).data('id')
    var name = $(this).data('name')
    var description = $(this).data('description')
    var date = $(this).data('date').substring(0,10)
    $('#editModal input[name="name"]').val(name)
    $('#editModal textarea[name="description"]').val(description)
    $('#editModal input[name="submissiondate"]').val(date)    
    $('#editModal input[name="id"]').val(id)
    editModal.show()
  })

  $('.delete').click(function(){
    // alert('ddedeww')
    var id = $(this).data('id')
    var name = $(this).data('name')   
    $('#deleteModal input[name="id"]').val(id)
    $('#deleteModal strong').html(`${name}`)
    deleteModal.show()
  })

  
</script>
@endsection

@section('content')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary font-weight-bold mb-4 text-dark" data-bs-toggle="modal" data-bs-target="#addModal">
    Add Task
  </button>
  

  <?php $ways = [
    "add","edit"
  ]; ?>
  @forelse ($ways as $way)
  <!-- Modal -->
  <div class="modal fade" id="{{$way}}Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form method="post" action="/teacher/{{$way}}task" enctype="multipart/form-data">
        @csrf 
        <input type="hidden" name="id">
        <input type="hidden" name="host_id" >
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> {{ucwords($way)}} Task</h5>
          <button type="button" style="background: transparent; color: #fff; border: none;" data-bs-dismiss="modal" aria-label="Close">&times;</button>
        </div>
        <div class="modal-body">
          {{-- <div class="form-group">
            <label for="exampleFormControlSelect2">Category</label>
            <select class="form-control" id="exampleFormControlSelect2" name="category_id">
              <option selected disabled value="">Select Category</option>
              @forelse ($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
              @empty
              <option value="" disabled>No categories found</option>
              @endforelse

            </select>
          </div> --}}
          <div class="form-group">
            <label for="exampleInputUsername1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputUsername1" placeholder="Task Name"required>
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Description</label>
            <textarea class="form-control" name="description" placeholder="Task Description here" id="exampleTextarea1" rows="4" spellcheck="false" ></textarea>
          </div>
          
    
          <div class="form-group">
            <label for="exampleInputUsername1">Submission Date</label>
            <input type="date" name="submissiondate" class="form-control" id="" placeholder=""required>
          </div>
        
          @foreach ([1,1,1] as $i)
          {{-- <input type="file" name="filedata[]"> --}}
          <div class="mt-2">
            {{-- <label for="formFileLg" class="form-label">Large file input example</label> --}}
            <input class="form-control form-control-lg" id="formFileLg"  accept="image/*" name="filedata[]" type="file">
          </div>
          @endforeach
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </div>
    </form>
    </div>
  </div>
  @empty @endforelse



  
  {{-- Delete Model --}}
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form method="post" action="/teacher/deletetask">
        @csrf 
        <input type="hidden" name="id">
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Are you sure you want to delete this Task?</h5>
          <button type="button" style="    background: transparent;
          color: #fff;
          border: none;" data-bs-dismiss="modal" aria-label="Close">&times;</button>
        </div>
        <div class="modal-body">
          <strong></strong>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </form>
    </div>
  </div>




<div class="row ">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Tasks</h4>
          <div class="table-responsive">
            <table class="table ">
              <thead>
                <tr>
                  <th>
                    #
                  </th>
                  <th> Task</th>
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
                  </td>
                  <td> {{date("d M Y", strtotime($task->submissiondate))}} </td>
                  <?php $images= explode('------', $task->images); ?>
                  <td style="max-width:200px;display:flex;flex-wrap:wrap "> 
                    @foreach ($images as $image)
                    <img src="{{url('/')}}/public/uploads/tasks/{{$image}}" class="" style="width:50%;border-radius:0;height:100%">
                    {{-- {{$image}} --}}
                        
                    @endforeach  
                  </td> 
                  <td>
                      <span class="edit"
                      data-id="{{$task->id}}" 
                      data-name="{{$task->name}}"
                      data-description="{{$task->description}}"
                      data-date="{{$task->submissiondate}}"
                      ><i class="text-success h6 mdi mdi-lead-pencil"></i></span>&nbsp;
                      <span class="delete"
                      data-id="{{$task->id}}" 
                      data-name="{{$task->name}}"
                      ><i class="text-warning  h6 mdi mdi-delete"></i></span>
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