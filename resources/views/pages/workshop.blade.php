@extends('layouts.guest')


@section('styles')
  <style> 
    /* Custom CSS for Page Here */
  :root{
       --successcolor: #da6d73;
  --primarycolor: #43a4db;
  --warningcolor: #ddb688;
  --infocolor: #9139b4;
  --dangercolor: #ff3f6e;
  --darkbgcolor: #181C28;
  --backgroundcolor :#121420;
    }
    .section-title{
      text-align: center;
      color: #ccc;
    }
    
/* about section */
#about h3 {
    margin-top: 0px;
}

#about .about-thumb {
  padding-top: 10px;
}


/* feature section */
#feature {
  background:;
}

#feature .icon {
  color: #ffffff;
  font-size: 42px;
  padding-right: 14px;
}

#feature p {
  color: #333;
}

#feature .btn {
    background: transparent;
    border: 3px solid #ffffff;
    border-radius: 0px;
    color: #ffffff;
    font-size: 18px;
    font-weight: 700;
    letter-spacing: 1px;
    padding: 14px 36px;
    margin-top: 62px;
    margin-right: 16px;
    -webkit-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
}

#feature .btn:hover {
  background: #ffffff;
  color: #333;
  border-color: transparent;
}

#about
 {
  padding-top: 100px;
  padding-bottom: 100px;
}
#feature{
  padding-bottom: 100px;
}
* svg */
.svgcolor-light {
  /*position: absolute;
  top: 0;
  left: 0; */
  position: relative;
  bottom: 104px;
}
.svgcolor-light > path {
  fill: var(--backgroundcolor);
  stroke:var(--backgroundcolor);
  stroke-width: 0;
}
.laptop{
  height: 90%;
  width: 90%;
}

  </style>
@endsection


@section('scripts')
  <script> 
    // Custom JS for Page Here 
  </script>
@endsection

@section('content')

{{-- 
<!-- Isko Jaha kahi bhi use karna hai, comment hatana and use kar lena -->


@forelse ($workshops as workshop)
<!-- Use $workshop->name as a workshop name  and same for all others and 
  isme sirf ek card rakhna specific jo har workshop ke liye lagega-->


@empty
<!-- If no workshops are present then show this -->

@endforelse
     --}}
     <section id="about">
  <div class="container">
    <div class="row">

      <div class="col-md-6 col-sm-12">
        <img src="public/assets/images\laptop.png" class="img-responsive wow fadeInUp laptop" alt="About">
      </div>

      <div class="col-md-6 col-sm-12">
        <div class="about-thumb">
          <div class="section-title">
            <h1 class="wow fadeIn" data-wow-delay="0.2s">Workshops</h1>
            <h3 class="wow fadeInUp" data-wow-delay="0.4s">come and grab your opportunity</h3>
          </div>
          <div class="wow fadeInUp" data-wow-delay="0.6s">
            <p>Vivamus elit risus, porttitor id placerat ut, aliquet non quam. Pellentesque nulla metus, ornare et porttitor vel, consectetur vitae erat. Vestibulum tristique semper tellus vitae condimentum. Duis sed eros eget diam dictum posuere.</p>
            <p>Aliquam vel gravida ligula. Phasellus ut purus ac libero ultrices commodo commodo at quam. In vestibulum purus sit amet tempus euismod. Donec sed congue nisl.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<section id="feature">
  <div class="container">
    <div class="row">
      
      <svg preserveAspectRatio="none" viewBox="0 0 100 102" height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="svgcolor-light">
        <path d="M0 0 L50 100 L100 0 Z"></path>
      </svg>
       <h1 class="text-center mt-5">Our Workshops</h1>
      <div class="col-md-4 col-sm-6">
        <div class="media wow fadeInUp" data-wow-delay="0.4s">
          <div class="media-object media-left">
            <i class="icon icon-laptop"></i>
          </div>
          <div class="media-body">
            
          </div>
        </div>
      </div>

     


    </div>
  </div>
</section>
@endsection