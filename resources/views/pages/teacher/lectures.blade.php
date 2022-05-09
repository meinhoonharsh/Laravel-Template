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
    var lecture_link = $(this).data('lecture_link')
    var date = $(this).data('date').substring(0,10)
    var starttime = $(this).data('starttime').substring(0,10)
    var endtime = $(this).data('endtime').substring(0,10)
    $('#editModal input[name="name"]').val(name)
    $('#editModal textarea[name="description"]').val(description)
    $('#editModal input[name="lecture_link"]').val(lecture_link)
    $('#editModal input[name="date"]').val(date)
    $('#editModal input[name="starttime"]').val(starttime)
    $('#editModal input[name="endtime"]').val(endtime)
    
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
    Add Lecture
  </button>
  

  <?php $ways = [
    "add","edit"
  ]; ?>
  @forelse ($ways as $way)
  <!-- Modal -->
  <div class="modal fade" id="{{$way}}Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form method="post" action="/teacher/{{$way}}lecture">
        @csrf 
        <input type="hidden" name="id">
        <input type="hidden" name="host_id" >
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> {{ucwords($way)}} Lecture</h5>
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
            <input type="text" name="name" class="form-control" id="exampleInputUsername1" placeholder="Lecture Name"required>
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Description</label>
            <textarea class="form-control" name="description" placeholder="Lecture Description here" id="exampleTextarea1" rows="4" spellcheck="false" ></textarea>
          </div>
          
          <div class="form-group">
            <label for="exampleInputUserna">Lecture Link</label>
            <input type="text" name="lecture_link" class="form-control" id="" placeholder=""required>
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1">Date</label>
            <input type="date" name="date" class="form-control" id="" placeholder=""required>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-5 col-form-label">Start Time</label>
                <div class="col-sm-7">
                  <input type="time" name="starttime" class="form-control" required>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-5 col-form-label">End Time</label>
                <div class="col-sm-7">
                  <input type="time" name="endtime" class="form-control" required>
                </div>
              </div>
            </div>
          </div>
          
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
      <form method="post" action="/teacher/deletelecture">
        @csrf 
        <input type="hidden" name="id">
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Are you sure you want to delete this Lecture?</h5>
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
          <h4 class="card-title">Lectures</h4>
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
                  <th> Actions</th>
                </tr>
              </thead>
              <tbody>


                <?php 
                  $completedworkshops = [1,1,1,1,1,1]
                  ?>
                @forelse($lectures as $lecture)
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
                  <td>
                      <span class="edit"
                      data-id="{{$lecture->id}}" 
                      data-name="{{$lecture->name}}"
                      data-description="{{$lecture->description}}"
                      data-date="{{$lecture->date}}"
                      data-link="{{$lecture->lecture_link}}"
                      data-starttime="{{$lecture->starttime}}"
                      data-endtime="{{$lecture->endtime}}"
                      ><i class="text-success h6 mdi mdi-lead-pencil"></i></span>&nbsp;
                      <span class="delete"
                      data-id="{{$lecture->id}}" 
                      data-name="{{$lecture->name}}"
                      ><i class="text-warning  h6 mdi mdi-delete"></i></span>
                  </td>
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