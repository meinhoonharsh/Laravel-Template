@extends('layouts.app')


@section('styles')
  <style> 
    /* Custom CSS for Page Here */

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

  </style>
}
}
@endsection


@section('scripts')
  <script> 
    // Custom JS for Page Here 
    document.querySelector(".enroll").addEventListener('click',function(){
      alert("you have enrolled")
    });
  </script>
@endsection

@section('content')
<div class="container">
                <div class="card">
                    <div class="row">
                        <div class="col-md-5 text-center align-self-center"> <img class="img-fluid" 
                          src="https://richestsoft.com/blog/wp-content/uploads/2019/04/web-development-banner.jpg"> </div>
                        <div class="col-md-4 info">
                            <div class="row title">
                                <div class="col heading">
                                    <h2>Web Development</h2>
                                </div>
                            
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star-half-full"></span> <span id="reviews">1590 Reviews</span>
                            <div class="accordion arrows">
    <header class="box">
      <label for="acc-close" class="box-title">What You will Learn  </label>
    </header>
    <input type="radio" name="accordion" id="cb1" />
    <section class="box">
      <label class="box-title" for="cb1">Html</label>
      <label class="box-close" for="acc-close"></label>
      <div class="box-content">Click on an item to open. Click on its header or the list header to close.</div>
    </section>
    <input type="radio" name="accordion" id="cb2" />
    <section class="box">
      <label class="box-title" for="cb2">Css</label>
      <label class="box-close" for="acc-close"></label>
      <div class="box-content">Add the class 'arrows' to nav.accordion to add dropdown arrows.</div>
    </section>
    <input type="radio" name="accordion" id="cb3" />
    <section class="box">
      <label class="box-title" for="cb3">JavaScript</label>
      <label class="box-close" for="acc-close"></label>
      <div class="box-content">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque finibus tristique nisi, maximus ullamcorper ante finibus eget.</div>
    </section>

    <input type="radio" name="accordion" id="acc-close" />
  </div>
                            
                        </div>
                    </div>
                    <div class="row lower">
                        <div class="col text-right align-self-center enroll"> <button class="btn"><a href="">Enroll</a></button> </div>
                    </div>
                    <div class="row lower">
                        <div class="col text-center "> <button class="btn"><a href="">Back</a></button> </div>
                    </div>
                </div>
         
</div>


@endsection