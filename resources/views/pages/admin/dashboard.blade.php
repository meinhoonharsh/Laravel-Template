@extends('layouts.admin')


@section('styles')
  <style> 
    /* Custom CSS for Page Here */
  </style>
@endsection


@section('scripts')
  <script> 
    // Custom JS for Page Here 

.card {
    max-width: 1000px;
    width: 100%;
    padding: 4rem;
    background-color: #181c28;
    color: #ccc;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}

@media(max-width:768px) {
    .card {
        width: 100%;
        padding: 1.5rem
    }
}

.row {
    margin: 0
}

.path {
    color: grey;
    margin-bottom: 1rem
}

.path a {
    color: #ffffff
}

.info {
    padding: 6vh 0vh
}

@media(max-width:768px) {
    .info {
        padding: 0
    }
}

.checked {
    color: rgb(255, 217, 0);
    margin-right: 1vh
}

.fa-star-half-full {
    color: rgb(255, 217, 0)
}

img {
    height: 200px !important;
    width:100%;
    padding: 1rem
}

@media(max-width:768px) {
    img {
        padding: 2.5rem 0
    }
}
.heading{
   font-size: 4em ;
}
.title .col {
    padding: 0;
}

.fa-heart-o {
    font-size: 2rem;
    color: #ffffffaf;
    font-weight: lighter
}

#reviews {
    margin-left: 3vh;
    color: grey
}

.price {
    margin-top: 2rem
}

label.radio span {
    padding: 1vh 4vh;
    background-color: rgb(54, 54, 54);
    color: grey;
    display: inline-block;
    margin-right: 2vh
}

label.radio input:checked+span {
    border: 1px solid white;
    padding: 1vh 4vh;
    background-color: rgb(54, 54, 54);
    margin-right: 2vh;
    color: #ffffff;
    display: inline-block
}



.lower {
    margin-top: 3rem
}

.lower i {
    padding: 2.5vh;
    margin-right: 1vh;
    color: grey;
    border: 1px solid rgb(85, 85, 85)
}

.lower .col {
    padding: 0
}

@media(max-width:768px) {
    .lower i {
        padding: 2vh;
        margin-right: 1vh;
        color: grey;
        border: 1px solid rgb(85, 85, 85)
    }
}

.btn {
    background-color: transparent;
    border-color: rgba(186, 216, 125, 0.863);
    color: rgba(186, 216, 125, 0.863);
    padding: 1.8vh 4.5vh;
    height: fit-content;
    border-radius: 3px
}

.btn:focus {
    box-shadow: none;
    outline: none;
    box-shadow: none;
    color: white;
    -webkit-box-shadow: none;
    -webkit-user-select: none;
    transition: none
}

.btn:hover {
    color: white
}

@media(max-width:768px) {
    .btn {
        background-color: transparent;
        border-color: rgba(186, 216, 125, 0.863);
        color: rgba(186, 216, 125, 0.863);
        padding: 1vh;
        font-size: 0.9rem;
        height: fit-content;
        border-radius: 3px
    }
}

a {
    color: unset
}

a:hover {
    color: unset;
    text-decoration: none
}

label.radio input {
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
    pointer-events: none
}

label.radio {
    cursor: pointer
}
.modules{
  color: #ccc !important;
}
.modules li{
  background: #181c28 !important;
}
.accordion {
  margin-top:40px;

  width: 400px;
}
.accordion input {
  display: none;
}
.box {
  position: relative;
  background: #181c28;
    height: 64px;
    transition: all .15s ease-in-out;
}
.box::before {
    content: '';
    position: absolute;
    display: block;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    pointer-events: none;
}
header.box {
  background:#181c28;
  z-index: 100;
  cursor: initial;
  
}
header .box-title {
  margin: 0;
  font-weight: normal;
  font-size: 16pt;
  color: white;
  cursor: initial;
}
.box-title {
  width: calc(100% - 40px);
  height: 64px;
  line-height: 64px;
  padding: 0 20px;
  display: inline-block;
  cursor: pointer;
  -webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;
}
.box-content {
  width: calc(100% - 40px);
  padding: 30px 20px;
  font-size: 11pt;
  color: #ccc;
  display: none;
}
.box-close {
  position: absolute;
  height: 64px;
  width: 100%;
  top: 0;
  left: 0;
  cursor: pointer;
  display: none;
}
input:checked + .box {
  height: auto;
  margin: 16px 0;
    box-shadow: 0 0 6px rgba(0,0,0,.16),0 6px 12px rgba(0,0,0,.32);
}
input:checked + .box .box-title {
  border-bottom: 1px solid rgba(0,0,0,.18);
}
input:checked + .box .box-content,
input:checked + .box .box-close {
  display: inline-block;
}
.arrows section .box-title {
  padding-left: 44px;
  width: calc(100% - 64px);
}
.arrows section .box-title:before {
  position: absolute;
  display: block;
  content: '\203a';
  font-size: 18pt;
  left: 20px;
  top: -2px;
  transition: transform .15s ease-in-out;
  color:#ccc;
}
input:checked + section.box .box-title:before {
  transform: rotate(90deg);
}

  </script>
@endsection

@section('content')

    
    <div class="row">
      <div class="col-md-6 row">
        

        <?php
          $analytics = [
          ["Total Lectures","success",12],
          ["Total Tasks","primary",23],
          ["Attenance Marked","info",34],
          ["Tasks Submitted","warning",23]
          // ["Attended","danger"],
          // ["Attended","info"]
        ];
          ?>
@foreach($analytics as $analytic)
      <div class="col-xl-6 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0">{{ $analytic[2]}}</h3>
                  {{-- <p class="text-{{$analytic[1]}} ml-2 mb-0 font-weight-medium">+3.5%</p> --}}
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-{{$analytic[1]}} ">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h4 class="text-muted font-weight-normal">{{$analytic[0]}}</h4>
          </div>
        </div>
      </div>
@endforeach


      </div>
      <div class="col-md-6 card mb-4 p-3">

        <h1><span class="text-muted"></span>dfgdgdg</h1>
        <h4><span class="text-muted"></span> Soem Random Description</h4>
        <h4><span class="text-muted">StartDate: </span> sfsfsfsw</h4>
        <h4><span class="text-muted">EndDate: </span>xfvsfsf</h4>
        
        <button type="button" class="btn btn-primary font-weight-bold mb-4 text-dark" data-bs-toggle="modal" data-bs-target="#addModal" style="width:95%;margin-left:2.5%;position:absolute;bottom:0;left:0">
          Edit
         </button>
       </div>

    </div>


   <div class="row">
     
      <div class=" px-2">
        <div class="card p-3">
          <h3>Task submissions of Latest Task</h3>

          


          
           
            <div class="table-responsive">
              <table class="table ">
                <thead>
                  <tr>
                    <th>
                      #
                    </th>
                    <th> Student</th>
                    <th>Message</th>
                    <th> Email</th>
                    <th> Contact</th>
                    <th> Submitted At</th>
                    <th> Submission</th>
                  </tr>
                </thead>
                <tbody>
  
  
                  <?php 
                    $completedworkshops = [1,1,1,1,1,1]
                    ?>
                  @forelse($completedworkshops as $student)
                  <tr>
                    <td>
                      {{$loop->iteration}}
                    </td>
                    <td class="text-light font-weight-medium">
                      Harsh
                    </td>
                    <td>fdfgds</td>
                    <td> sdfsfs </td> 
                    <td> Not Added Yet </td>
                    <td> 22 May 2022</td>
                    <td> sfdsdf </td>
                  </tr>
                  @empty
                    <td></td>
                    <td>No Student Submitted Yet</td>
                  @endforelse
  
  
  
                </tbody>
              </table>
            </div>
  
  
  
          










        </div>
      </div>
</div>

  
  <!-- Modal -->
  <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form method="post" action="/teacher/editworkshop">
        @csrf 
        <input type="hidden" name="id" value="43">
        <input type="hidden" name="host_id" >
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Edit Workshop</h5>
          <button type="button" style="background: transparent; color: #fff; border: none;" data-bs-dismiss="modal" aria-label="Close">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="exampleFormControlSelect2">Category</label>
            <select class="form-control" id="exampleFormControlSelect2" name="category_id">
              <option selected disabled value="">Select Category</option>
            
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1">Name</label>
            <input type="text" name="name" value="" class="form-control" id="exampleInputUsername1" placeholder="Workshop Name"required>
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Description</label>
            <textarea class="form-control" name="description"  placeholder="Workshop Description here" id="exampleTextarea1" rows="4" spellcheck="false" >

            </textarea>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Start Date</label>
                <div class="col-sm-9">
                  <input type="date" name="startdate" value="" class="form-control" required>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">End Date</label>
                <div class="col-sm-9">
                  <input type="date" name="enddate" value="ed" class="form-control" required>
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



    


@endsection