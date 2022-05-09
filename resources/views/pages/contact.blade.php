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
#contact {
  padding: 100px 0;
  overflow: hidden;
}

.section-bg {
  background: var(--backgroundcolor);
}

.section-title {
  text-align: center;
  padding-bottom: 30px;
}

.section-title h2 {
  font-size: 32px;
  font-weight: bold;
  text-transform: uppercase;
  margin-bottom: 20px;
  padding-bottom: 20px;
  position: relative;
}

.section-title h2::after {
  content: '';
  position: absolute;
  display: block;
  width: 50px;
  height: 3px;
  background: var(--successcolor);
  bottom: 0;
  left: calc(50% - 25px);
}

.section-title p {
  margin-bottom: 0;
}

    .contact .info-box {
  color: #444444;
  text-align: center;
  box-shadow: 0 0 30px var(--backgroundcolor);
  padding: 20px 0 30px 0;
  background: var(--darkbgcolor);
}

.contact .info-box i {
  font-size: 32px;
  color: #5846f9;
  border-radius: 50%;
  padding: 8px;
}

.contact .info-box h3 {
  font-size: 20px;
  color: var(--successcolor);
  font-weight: 700;
  margin: 10px 0;
}

.contact .info-box p {
  padding: 0;
  line-height: 24px;
  font-size: 14px;
  color: #ccc;
  margin-bottom: 0;
}

.contact .php-email-form {
  box-shadow: 0 0 30px var(--bgcolor);
  padding: 30px;
  background: var(--darkbgcolor);
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .error-message br + br {
  margin-top: 25px;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input, .contact .php-email-form textarea {
  border-radius: 5px;
  box-shadow: none;
  background: var(--darkbgcolor);
  font-size: 14px;
}

.contact .php-email-form input:focus, .contact .php-email-form textarea:focus {
  border-color: var(--successcolor);

}

.contact .php-email-form input {
  padding: 10px 15px;
  background: var(--darkbgcolor);
}

.contact .php-email-form textarea {
  padding: 12px 15px;
  background: var(--darkbgcolor);
}

.contact .php-email-form button[type="submit"] {
  background: var( --successcolor);
  border: 0;
  padding: 10px 24px;
  color: #fff;
  transition: 0.4s;
  border-radius: 5px;
}

.contact .php-email-form button[type="submit"]:hover {
  background: var( --successcolor);
}

@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
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
     <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Get in touch with us!</h2>
        </div>

        <div class="row cards">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <lord-icon
    src="https://cdn.lordicon.com/zzcjjxew.json"
    trigger="loop"
    colors="primary:#da6d73,secondary:#ddb688"
    style="width:120px;height:120px">
</lord-icon>
              <h3>Our Address</h3>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 cards">
            <div class="info-box  mb-4">
              <lord-icon
    src="https://cdn.lordicon.com/tkgyrmwc.json"
    trigger="loop"
    colors="primary:#da6d73,secondary:#ddb688"
    style="width:120px;height:120px">
</lord-icon>
              <h3>Email Us</h3>
              <p>contact@example.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 cards">
            <div class="info-box  mb-4">
              <lord-icon
    src="https://cdn.lordicon.com/zpxybbhl.json"
    trigger="loop"
    colors="primary:#da6d73,secondary:#ddb688"
    style="width:120px;height:120px">
</lord-icon>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55</p>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
@endsection