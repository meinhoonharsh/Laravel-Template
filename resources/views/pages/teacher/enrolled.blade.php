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

  
</script>


<script>
  function download_csv(csv, filename) {
    var csvFile;
    var downloadLink;

    // CSV FILE
    csvFile = new Blob([csv], {type: "text/csv"});

    // Download link
    downloadLink = document.createElement("a");

    // File name
    downloadLink.download = filename;

    // We have to create a link to the file
    downloadLink.href = window.URL.createObjectURL(csvFile);

    // Make sure that the link is not displayed
    downloadLink.style.display = "none";

    // Add the link to your DOM
    document.body.appendChild(downloadLink);

    // Lanzamos
    downloadLink.click();
}

function export_table_to_csv(html, filename) {
	var csv = [];
	var rows = document.querySelectorAll("table tr");
	
    for (var i = 0; i < rows.length; i++) {
		var row = [], cols = rows[i].querySelectorAll("td, th");
		
        for (var j = 0; j < cols.length; j++) 
            row.push(cols[j].innerText);
        
		csv.push(row.join(","));		
	}

    // Download CSV
    download_csv(csv.join("\n"), filename);
}

document.querySelector(".downloadtable").addEventListener("click", function () {
    var html = document.querySelector(".table").outerHTML;
	export_table_to_csv(html, "table.csv");
});

  </script>

@endsection

@section('content')

<!-- Button trigger modal -->
<button type="button" class="downloadtable btn btn-primary font-weight-bold mb-4 text-dark" >
    Downnload Data
  </button>
  

  <?php $ways = [
    "add","edit"
  ]; ?>
  @forelse ($ways as $way)
  <!-- Modal -->
  <div class="modal fade" id="{{$way}}Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Student Info</h5>
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
    </div>
  </div>
  @empty @endforelse



  
  {{-- Delete Model --}}
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form method="post" action="/teacher/deleteenrolled">
        @csrf 
        <input type="hidden" name="id">
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Are you sure you want to remove this student?</h5>
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
                  <th> Student</th>
                  <th> Email</th>
                  <th> Contact</th>
                  <th> Enrolled at</th>
                  <th> Actions</th>
                </tr>
              </thead>
              <tbody>


                <?php 
                  $completedworkshops = [1,1,1,1,1,1]
                  ?>
                @forelse($enrolled as $student)
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
                      <span class="delete"
                      data-id="{{$student->id}}" 
                      data-name="{{$student->name}}"
                      ><i class="text-warning  h6 mdi mdi-delete"></i></span>
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
  </div>


@endsection