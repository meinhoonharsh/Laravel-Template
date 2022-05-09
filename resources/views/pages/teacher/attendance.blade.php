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
  var passModal = new bootstrap.Modal(document.getElementById('passModal'))

  $('.edit').click(function(){
    var name = $(this).data('name')
    var email = $(this).data('email')
    var contact = $(this).data('contact')
    var college = $(this).data('college')
    var branch = $(this).data('branch')
    var year = $(this).data('year')

    $('#editModal .name').html(name)
    $('#editModal .email').html(email)
    $('#editModal .contact').html(contact)
    $('#editModal .college').html(college)
    $('#editModal .branch').html(branch)
    $('#editModal .year').html(year)
    
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
  
  
  $('.pass').click(function(){
    // alert('ddedeww')
    var pass = $(this).data('pass')   
    $('#passModal strong').html(`${pass}`)
    passModal.show()
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


              
          <div class="p-1 px-4 text-muted">

            <p>Name : <span class="text-light name"></span></p>
            <p>Email : <span class="text-light email"></span></p>
            <p>Contact : <span class="text-light contact"></span></p>
            <p>College : <span class="text-light college"></span></p>
            <p>Branch : <span class="text-light branch"></span></p>
            <p>Year : <span class="text-light year"></span></p>
            

          </div>




        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          {{-- <button type="submit" class="btn btn-primary">Add</button> --}}
        </div>
      </div>
    </form>
    </div>
  </div>
  @empty @endforelse



  
  {{-- Delete Model --}}
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form method="post" action="/teacher/deletelecure">
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








  
  {{-- Delete Model --}}
  <div class="modal fade" id="passModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form method="post" action="/teacher/deletelecure">
        @csrf 
        <input type="hidden" name="id">
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Attendance Password</h5>
          <button type="button" style="    background: transparent;
          color: #fff;
          border: none;" data-bs-dismiss="modal" aria-label="Close">&times;</button>
        </div>
        <div class="modal-body">
          <strong></strong>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
        </div>
      </div>
    </form>
    </div>
  </div>










<div class="row ">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Attendance Records</h4>
        
          


<div>



  <div class="accordion" id="accordionExample">

  @forelse($lectures as $lecture)
    <div class="accordion-item bg-transparent">
      <h2 class="accordion-header " id="headingTwo">
        <span class="accordion-button py-4 collapsed" style="background:#ffffff09;color:#fffa" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$loop->iteration}}" aria-expanded="false" aria-controls="collapse{{$loop->iteration}}">
          {{date("d M Y", strtotime($lecture->date))}} -  {{$lecture->name}} &nbsp; &nbsp;
          <span class="pass"
          data-pass="{{$lecture->password}}"
          ><i class="text-success h6 mdi mdi-lock"></i> </span>
        </span>
      </h2>
      <div id="collapse{{$loop->iteration}}" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
         


          <div class="table-responsive">
            <table class="table ">
              <thead>
                <tr>
                  <th>
                    #
                  </th>
                  <th> Student</th>
                  <th> Email</th>
                  <th> Contact</th>
                  <th> Attendance Time</th>
                  <th> Actions</th>
                </tr>
              </thead>
              <tbody>


                <?php 
                  $completedworkshops = [1,1,1,1,1,1]
                  ?>
                @forelse($lecture->attendance as $student)
                <tr>
                  <td>
                    {{$loop->iteration}}
                  </td>
                  <td class="text-light font-weight-medium">
                    {{$student->name}}
                  </td>
                  <td> {{$student->email}} </td> 
                  <td> {{$student->contact ?? 'Not Added Yet'}} </td>
                  <td> {{date("d M Y", strtotime($student->created_at))}} </td>
                     <td>
                      <span class="edit"
                      data-id="{{$student->id}}" 
                      data-name="{{$student->name}}"
                      data-email="{{$student->email}}"
                      data-contact="{{$student->contact ?? 'Not Added'}}"
                      data-college="{{$student->college ?? 'Not Added'}}"
                      data-year="{{$student->year ?? 'Not Added'}}"
                      data-branch="{{$student->branch ?? 'Not Added'}}"
                      ><i class="text-success h6 mdi mdi-eye"></i></span>&nbsp;
                     
                  </td>
                </tr>
                @empty
                  <td></td>
                  <td>No Student Enrolled Yet</td>
                @endforelse



              </tbody>
            </table>
          </div>



        
        </div>
      </div>
    </div>
    @empty
    @endforelse
   
  </div>
  
</div>







        </div>
      </div>
    </div>
  </div>


@endsection




















