@extends('layouts.master')

@section('head')
@include('layouts.head')
<link href="https://fonts.googleapis.com/css?family=Poppins:900" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
@endsection

@section('content')
<div class="columns-bg">

    <div class="container-right">
      
        <!-- <div class="col-sm-12 offset-sm-0 col-md-8 offset-md-6"> -->
        <div class="tm-section-text-container">
            <i class="tm-text-white">
                <h1 class="text-uppercase tm-text-primary tm-site-name">
                <a href="{{ url('schedule/main') }}" style="color:#bcb4b2; margin-left: 8%;">Scheduler</a>
                </h1>
            </i>
        </div>
        <!-- </div> -->
    </div>
    

    <div class="container-left">
        <!-- <div class="col-md-6"> -->
        <div class="tm-section-text-container">
            <i class="tm-text-white">
                <h1 class="text-uppercase tm-text-primary tm-site-name">
                <a href="{{ url('board/list') }}" style="color:white; margin-left: 29%;">Blog</a>
                
                </h1>
            </i>
        </div>
        <!-- </div> -->
    </div>

</div>



<!-- Contact -->
<!-- <section id="contact" class="tm-section-contact">
        <div class="row tm-contact-section">
          <div class="col-md-6 px-0">
            <div class="tm-bg-white-alpha tm-contact-left">
              <div class="media mb-5">
                <a href="#" class="tm-contact-link">
                  <span class="tm-contact-icon-container">
                    <span class="tm-contact-icon-container-inner">
                      <i class="fas fa-phone tm-contact-icon tm-phone-icon"></i>
                    </span>
                  </span>
                  <span class="media-body"> 010-020-0340 </span>
                </a>
              </div>
              <div class="media mb-5">
                <a href="mailto:" class="tm-contact-link">
                  <span class="tm-contact-icon-container">
                    <span class="tm-contact-icon-container-inner">
                      <i class="fas fa-envelope tm-contact-icon"></i>
                    </span>
                  </span>
                  <span class="media-body"> info@company.com </span>
                </a>
              </div>
              <div class="media">
                <a href="" class="tm-contact-link">
                  <span class="tm-contact-icon-container">
                    <span class="tm-contact-icon-container-inner">
                      <i class="fas fa-map-marker-alt tm-contact-icon"></i>
                    </span>
                  </span>
                  <span class="media-body">
                    6120 Suspendisse ultricies<br />Scelerisque tellus, ID
                    10260<br />Magna aliquet porttitor
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 px-0">
            <div class="tm-contact-form-container">
              <form action="index.html" method="POST" class="tm-contact-form">
                <div class="form-group">
                  <input
                    type="text"
                    id="contact_name"
                    name="contact_name"
                    class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
                    placeholder="Your Name"
                    required
                  />
                </div>
                <div class="form-group">
                  <input
                    type="email"
                    id="contact_email"
                    name="contact_email"
                    class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
                    placeholder="Email"
                    required
                  />
                </div>
                <div class="form-group">
                  <textarea
                    rows="4"
                    id="contact_message"
                    name="contact_message"
                    class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
                    placeholder="Message"
                    required
                  ></textarea>
                </div>
                <div class="text-right">
                  <button type="submit" class="btn tm-btn-submit rounded-0">
                    Send
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section> -->



@endsection
