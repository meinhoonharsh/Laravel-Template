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
    .features{
      padding: 50px;
      background: var(--backgroundcolor);
    }
    .features-wrap {
  margin: 0 auto;
}

.features-image {
  position: relative;
  margin-top: 64px;
  margin-bottom: 112px;
}

.features-illustration {
  position: absolute;
  top: -2%;
  left: 50%;
  -webkit-transform: translateX(-50%);
  transform: translateX(-50%);
  max-width: 136%;
}

.features-box {
  margin: 0 auto;
  box-shadow: 48px 16px 48px rgba(24, 37, 56, 0.12);
  -webkit-transform: perspective(1000px) rotateY(10deg) translateY(2%);
  transform: perspective(1000px) rotateY(10deg) translateY(2%);
}

.features-box img{
  height:400px;
  width: 400px;
}
.lights-off .features-box {
  box-shadow: 48px 16px 48px rgba(0, 0, 0, 0.2);
}

.feature {
  text-align: center;
  margin-bottom: 48px;
}

.feature:last-of-type {
  margin-bottom: 0;
}

.feature-icon {
  display: inline-flex;
  margin-bottom: 16px;
}

.feature-icon img, .feature-icon svg {
  max-width: none;
}

.feature-title {
  position: relative;
  margin-bottom: 26px;
}

.feature-title::after {
  content: '';
  width: 32px;
  height: 2px;
  position: absolute;
  bottom: -14px;
  left: calc(50% - 16px);
  background: #E9EDF3;
}

.lights-off .feature-title::after {
  background: #304057;
}

@media (min-width:641px) {
  .features {
    position: relative;
  }

  .features .section-inner {
    padding-bottom: 100px;
  }

  .features .section-paragraph {
    padding-left: 72px;
    padding-right: 72px;
  }

  .features::before {
    content: '';
    width: 100%;
    height: 300px;
    position: absolute;
    left: 0;
    top: 168px;
    background: linear-gradient(to bottom, rgba(83, 95, 215, 0), rgba(83, 95, 215, 0.04));
  }

  .lights-off .features::before {
    display: none;
  }

  .feature {
    text-align: left;
  }

  .feature-inner {
    display: flex;
  }

  .feature-icon {
    display: block;
    margin-top: 8px;
    margin-right: 32px;
    margin-bottom: 0;
  }

  .feature-title::after {
    left: 0;
  }

}

.is-loaded .header-logo-image {
  -webkit-animation: fadeInLogo 0.35s both cubic-bezier(0.3, 0, 0.2, 1);
  animation: fadeInLogo 0.35s both cubic-bezier(0.3, 0, 0.2, 1);
  will-change: transform;
}

.is-loaded .hero-media-image {
  -webkit-animation: fadeInLeftMedia 1s 0.2s both cubic-bezier(0.3, 0, 0.2, 1);
  animation: fadeInLeftMedia 1s 0.2s both cubic-bezier(0.3, 0, 0.2, 1);
  will-change: transform;
}

.is-loaded .hero-media-illustration-image {
  -webkit-animation: fadeInLeftIllustration 1s 0.2s both cubic-bezier(0.3, 0, 0.2, 1);
  animation: fadeInLeftIllustration 1s 0.2s both cubic-bezier(0.3, 0, 0.2, 1);
  will-change: transform;
}

.is-loaded .features-box {
  -webkit-animation: fadeUpBox 1s 0.2s both cubic-bezier(0.3, 0, 0.2, 1);
  animation: fadeUpBox 1s 0.2s both cubic-bezier(0.3, 0, 0.2, 1);
  will-change: transform;
}

.is-loaded .header-illustration-image {
  -webkit-animation: fadeIn 1s both cubic-bezier(0.3, 0, 0.2, 1);
  animation: fadeIn 1s both cubic-bezier(0.3, 0, 0.2, 1);
  will-change: transform;
}

.is-loaded .features-illustration {
  -webkit-animation: fadeIn 1s 0.2s both cubic-bezier(0.3, 0, 0.2, 1);
  animation: fadeIn 1s 0.2s both cubic-bezier(0.3, 0, 0.2, 1);
  will-change: transform;
}
.about-title{
  color: #fff;
  padding: 30px;
  font-size: 50px;
}

.about-subtitle
{
  color:#5a6980;
}
.dashboard{
  height: 370px;
  width: 600px;
  margin-left:30px;
}
@media (max-width: 770px){
  .dashboard{
    height: 340px;
    width: 500px;
  }
}
@media (max-width: 625px){
  .dashboard{
    height: 270px;
    width: 400px;
  }
}

.benifits {
            width: 100% !important;
            height: 100vh !important;
            margin: 0 !important;
            padding: 0 !important;
            overflow-x: hidden !important;
            background-size: 80% auto;
            background-repeat: no-repeat !important;
            background-position: center;
        }
@media(min-width: 450px) {
            .benifits {
                background-image: url('../../assets/images/benefits-01.png');
            }
        }

@media(max-width: 450px) {
          .benifits {
               background-image: url('../../assets/images/benefits-02.png');

            }
        }


  </style>

@endsection


@section('scripts')
  <script> 
    // Custom JS for Page Here 
  </script>
@endsection

@section('content')
<section class="features section">
  <div class="container">
    <div class="features-inner section-inner has-bottom-divider">
      <div class="features-header text-center">
        <div class="container-sm">
          <h2 class="section-title about-title mt-0">About Us</h2>
          <p class="section-paragraph about-subtitle">Lorem ipsum is common placeholder text used to demonstrate the graphic elements of a document or visual presentation.</p>
          <div class="features-image">
            <img class="features-illustration asset-dark" src="public/assets/images\features-illustration-dark.svg" alt="Feature illustration">
            <img class="features-box dashboard asset-dark"  src="public/assets/images\dash.png" alt="Feature box">
            <img class="features-illustration asset-dark" src="public/assets/images\features-illustration-top-dark.svg" alt="Feature illustration top">
          </div>
        </div>
      </div>
    </div>
  </section>
  <h2 class="section-title about-title text-center">Benifits</h2>
  <div class="benifits">

  </div>
@endsection