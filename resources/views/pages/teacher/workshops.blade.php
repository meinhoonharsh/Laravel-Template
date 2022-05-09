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
    var category_id = $(this).data('category_id')
    var startdate = $(this).data('startdate').substring(0,10)
    var enddate = $(this).data('enddate').substring(0,10)
    $('#editModal select').val(category_id)
    $('#editModal input[name="name"]').val(name)
    $('#editModal textarea[name="description"]').val(description)
    $('#editModal input[name="startdate"]').val(startdate)
    $('#editModal input[name="enddate"]').val(enddate)
    
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
$('#start').datepicker({
    onSelect: function(dateText, inst){
        $('#end').datepicker('option', 'minDate', new Date(dateText));
    },
});

$('#end').datepicker({
    onSelect: function(dateText, inst){
        $('#start').datepicker('option', 'maxDate', new Date(dateText));
    }
});
  
</script>
@endsection

@section('content')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary font-weight-bold mb-4 text-dark" data-bs-toggle="modal" data-bs-target="#addModal">
    Add Workshop
  </button>
  

  <?php $ways = [
    "add","edit"
  ]; ?>
  @forelse ($ways as $way)
  <!-- Modal -->
  <div class="modal fade" id="{{$way}}Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form method="post" action="/teacher/{{$way}}workshop">
        @csrf 
        <input type="hidden" name="id">
        <input type="hidden" name="host_id" >
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> {{ucwords($way)}} Workshop</h5>
          <button type="button" style="background: transparent; color: #fff; border: none;" data-bs-dismiss="modal" aria-label="Close">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="exampleFormControlSelect2">Category</label>
            <select class="form-control" id="exampleFormControlSelect2" name="category_id">
              <option selected disabled value="">Select Category</option>
              @forelse ($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
              @empty
              <option value="" disabled>No categories found</option>
              @endforelse

            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputUsername1" placeholder="Workshop Name"required>
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Description</label>
            <textarea class="form-control" name="description" placeholder="Workshop Description here" id="exampleTextarea1" rows="4" spellcheck="false" ></textarea>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label" >Start Date</label>
                <div class="col-sm-9">
                  <input type="date" name="startdate" id="start" class="form-control" required>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label" >End Date</label>
                <div class="col-sm-9">
                  <input type="date" name="enddate" id="end" class="form-control" required>
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
      <form method="post" action="/teacher/deleteworkshop">
        @csrf 
        <input type="hidden" name="id">
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Are you sure you want to delete this Workshop?</h5>
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
          <h4 class="card-title">Workshops</h4>
          <div class="table-responsive">
            <table class="table ">
              <thead>
                <tr>
                  <th>
                    #
                  </th>
                  <th> Workshop</th>
                  <th> Category</th>
                  <th> Start Date</th>
                  <th> End Date</th>
                  <th> Actions</th>
                </tr>
              </thead>
              <tbody>


                <?php 
                  $completedworkshops = [1,1,1,1,1,1]
                  ?>
                @forelse($workshops as $workshop)
                <tr>
                  <td>
                    {{$loop->iteration}}
                  </td>
                  <td class="text-light font-weight-medium">
                    {{$workshop->name}}
                  </td>
                  <td> {{$workshop->categoryname}} </td>
                  <td> {{date("d M Y", strtotime($workshop->startdate))}} </td>
                  <td> {{date("d M Y", strtotime($workshop->enddate))}} </td>
                  <td>
                      <span class="edit"
                      data-id="{{$workshop->id}}" 
                      data-name="{{$workshop->name}}"
                      data-description="{{$workshop->description}}"
                      data-category_id="{{$workshop->category_id}}"
                      data-startdate="{{$workshop->startdate}}"
                      data-enddate="{{$workshop->enddate}}"
                      ><i class="text-success h6 mdi mdi-lead-pencil"></i></span>&nbsp;
                      <span class="delete"
                      data-id="{{$workshop->id}}" 
                      data-name="{{$workshop->name}}"
                      ><i class="text-warning  h6 mdi mdi-delete"></i></span>
                  </td>
                </tr>
                @empty
                  <td></td>
                  <td>No Wokshop Found</td>
                @endforelse



              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection