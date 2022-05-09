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
    var link = $(this).data('link')
    var teacher = $(this).data('teacher')
    var date = $(this).data('date')
    var time = $(this).data('time')

    $('#editModal input[name=id]').val(id)
    $('#editModal .name').html(name)
    $('#editModal .description').html(description)
    $('#editModal .link').html(link)
    $('#editModal .teacher').html(teacher)
    $('#editModal .date').html(date)
    $('#editModal .time').html(time)

      $('#editModal .hreflink').attr('href',link)

    
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
          <h5 class="modal-title" id="exampleModalLabel"> Lecture Details</h5>
          <button type="button" style="background: transparent; color: #fff; border: none;" data-bs-dismiss="modal" aria-label="Close">&times;</button>
        </div>
        <div class="modal-body">


              
          <div class="p-1 px-4 text-muted">

            <p>Name : <span class="text-light name"></span></p>
            <p>Teacher : <span class="text-light teacher"></span></p>
            <p>Description : <span class="text-light description"></span></p>
            <p>Link : <span class="text-light link"></span></p>
            <p>Date : <span class="text-light date"></span></p>
            <p>Time : <span class="text-light time"></span></p>

            

          </div>




        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a  class="btn btn-primary hreflink">Go to Lecture</a>
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
                      <th> Lecture</th>
                      <th> Host</th>
                      <td>Link</td>
                      <th> Date</th>
                      <th> Time</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
    
    
                    @forelse($lectures as $lecture)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td class="text-light font-weight-medium">
                        {{$lecture->name}}
                      </td>
                      <td>{{$lecture->teachername}}</td>
                      <td> <a href="{{$lecture->lecture_link}}">{{$lecture->lecture_link}}</a> </td>
                      <td> {{date("d M Y", strtotime($lecture->date))}} </td>
                      <td> {{date("H:i", strtotime($lecture->starttime))}} - {{date("H:i", strtotime($lecture->endtime))}} </td>
                     
                      <td>
                          <button class="btn btn-default edit"
                          data-id="{{$lecture->host_id}}"
                          data-name="{{$lecture->name}}"
                          data-description="{{$lecture->description}}"
                          data-link="{{$lecture->lecture_link}}"
                          data-teacher="{{$lecture->teachername}}"
                          data-date="{{date("D M Y", strtotime($lecture->date))}}"
                          data-time="{{date("H:i", strtotime($lecture->starttime))}} - {{date("H:i", strtotime($lecture->enddtime))}}"
                       
                          data-enrolled="{{$lecture->hasEnrolled}}"
                          >View</button>
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