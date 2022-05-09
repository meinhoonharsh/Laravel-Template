@extends('layouts.app')


@section('styles')
  <style> 
    /* Custom CSS for Page Here */
    .ratings i {
    font-size: 16px;
    color: rgb(255, 217, 0);
}

.strike-text {
    color: red;
    text-decoration: line-through
}

.product-image {
    width: 100%;
    height: 120px;
}

.dot {
    height: 7px;
    width: 7px;
    margin-left: 6px;
    margin-right: 6px;
    margin-top: 3px;
    background-color: blue;
    border-radius: 50%;
    display: inline-block;
}

.spec-1 {
    color: #938787;
    font-size: 15px
}


.para {
    font-size: 16px
}
/*--card--*/
#card{
  color: #fff !important;
  background: #181c28 !important;
}
.button{
  color: #fff;
}
.button:hover{
  color: #fff;
  text-decoration: none;
}
.heading{
  padding-bottom: 50px;
  color: #ccc !important;
}
.heading h1{
    font-size: 3em ;
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
.foldercontainer {
  width: 100px;
  height: 100px;
  padding: 5px;
  text-align: center;
}
.folder_tab, .folder {
  margin: 0 auto;
  background-color: #708090;
}
.folder_tab {
  width: 25px;
  height: 5px;
  margin-right: 50%;
  border-radius: 5px 15px 0 0;
}
.folder {
  width: 50px;
  height: 35px;
  border-radius: 0 5px 5px 5px;
  box-shadow: 1px 1px 0 1px #CCCCCC;
}
  </style>
@endsection


@section('scripts')
  <script> 
    // Custom JS for Page Here 
  </script>
@endsection

@section('content')
<div class="container mt-5 mb-5">
    <div class="heading">
      <h1>UpComing Workshop</h1>
    </div>
    <div class="d-flex justify-content-center row">
        <div class="col-md-10"> 
            <div class="row p-2 bg-white border rounded " id="card">
                <div class="col-md-3 mt-1">
                    <div class="foldercontainer">
                        <div class="folder_tab"></div>
                        <div class="folder"></div>
 
                    </div>
                </div>
                <div class="col-md-6 mt-1">
                    <h2 >Web Development</h2>
                    <div class="d-flex flex-row">
                        <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                        <span>200 Enrolled</span>
                    </div>
                    <div class="mt-1 mb-1 spec-1">
                      <p>Start:21 aug,2021</p>
                    </div>
                    <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                    </div>
                    <h6 class="text-success">Trending</h6>
                    <div class="d-flex flex-column mt-4"><button  class="btn btn-primary btn-sm" type="button"><a class="button" href="{{ route('detailpage') }}">View more</a></button><button class="btn btn-outline-primary btn-sm mt-2" type="button">Enroll now</button></div>
                </div>
            </div>
            <div class="row p-2 bg-white border rounded mt-2" id="card">
               <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="https://richestsoft.com/blog/wp-content/uploads/2019/04/web-development-banner.jpg"></div>
                <div class="col-md-6 mt-1">
                    <h2 >Web Development</h2>
                    <div class="d-flex flex-row">
                        <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                        <span>200 Enrolled</span>
                    </div>
                    <div class="mt-1 mb-1 spec-1">
                      <p>Start:21 aug,2021</p>
                    </div>
                    <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                    </div>
                    <h6 class="text-success">Trending</h6>
                    <div class="d-flex flex-column mt-4"><button  class="btn btn-primary btn-sm" type="button"><a class="button" href="{{ route('detailpage') }}">View more</a></button><button class="btn btn-outline-primary btn-sm mt-2" type="button">Enroll now</button></div>
                </div>
            </div>
            <div class="row p-2 bg-white border rounded mt-2" id="card">
               <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="https://richestsoft.com/blog/wp-content/uploads/2019/04/web-development-banner.jpg"></div>
                <div class="col-md-6 mt-1">
                    <h2 >Web Development</h2>
                    <div class="d-flex flex-row">
                        <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                        <span>200 Enrolled</span>
                    </div>
                    <div class="mt-1 mb-1 spec-1">
                      <p>Start:21 aug,2021</p>
                    </div>
                    <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                    </div>
                    <h6 class="text-success">Trending</h6>
                    <div class="d-flex flex-column mt-4"><button  class="btn btn-primary btn-sm" type="button"><a class="button" href="{{ route('detailpage') }}">View more</a></button><button class="btn btn-outline-primary btn-sm mt-2" type="button">Enroll now</button></div>
                </div>
            </div>
            <div class="row p-2 bg-white border rounded mt-2" id="card">
                <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="https://richestsoft.com/blog/wp-content/uploads/2019/04/web-development-banner.jpg"></div>
                <div class="col-md-6 mt-1">
                    <h2 >Web Development</h2>
                    <div class="d-flex flex-row">
                        <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                        <span>200 Enrolled</span>
                    </div>
                    <div class="mt-1 mb-1 spec-1">
                      <p>Start:21 aug,2021</p>
                    </div>
                    <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                    </div>
                    <h6 class="text-success">Trending</h6>
                    <div class="d-flex flex-column mt-4"><button  class="btn btn-primary btn-sm" type="button"><a class="button" href="{{ route('detailpage') }}">View more</a></button><button class="btn btn-outline-primary btn-sm mt-2" type="button">Enroll now</button></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection