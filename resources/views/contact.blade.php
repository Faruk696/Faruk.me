@extends('layout')

@section('content')
<section class="w3l-contact-breadcrum">
  <div class="breadcrum-bg">
    <div class="container py-5">
      <p><a href="index.html">Home</a> &nbsp; / &nbsp; Contact</p>
     </div>
  </div>
</section>
<!-- contact -->
<section class="w3l-contacts-12" id="contact">
    <div class="contact-top pt-5">
        <div class="container py-md-3">
            
            <div class="row cont-main-top">
               <!-- contact form -->
               <div class="contacts12-main col-lg-6 ">
                   
                <form action="/contact" method="POST">
                  @csrf
                    <div class="top-inputs d-grid">
                        <input type="text" placeholder="Enter Your Name" name="Name" id="Name" required >
                    </div>
                    <div class="top-inputs d-grid">
                    <input type="email" name="Email" placeholder="Enter Your Email" id="Sender" required>
                    </div>

                    <div class="top-inputs d-grid">
                    <textarea placeholder="Message" name="Message" id="Message" required></textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-theme2">Submit Now</button>
                    </div>
                    <br>
                    @if(session('message'))
                    <div class="alert alert-primary" role="alert">
                    {{ session('message') }}
                    </div>
                    @endif
                </form>
            </div>
            <!-- //contact form -->
                <!-- contact address -->
                <div class="contact col-lg-6 mt-lg-0 mt-5">
                    <div class="cont-subs">
                        <div class="cont-add">
                            <div class="cont-add-lft">
                                <span class="fa fa-map-marker" aria-hidden="true"></span>
                           </div>
                           <div class="cont-add-rgt">
                            <p class="contact-text-sub">Mohammadpur 1207, Dhaka , Bangladesh</p>
                        </div>
                      
                    </div>
                        <div class="cont-add add-2">
                            <div class="cont-add-lft">
                                <span class="fa fa-envelope" aria-hidden="true"></span>
                           </div> 
                           <div class="cont-add-rgt">
                          <a href="mailto:omorfaruk2010@gmail.com">
                                <p class="contact-text-sub">omorfaruk2010@gmail.com</p>
                            </a>
                        </div>
                       
                    </div>
                        <div class="cont-add">
                            <div class="cont-add-lft">
                                <span class="fa fa-phone" aria-hidden="true"></span>
                           </div>
                            <div class="cont-add-rgt">
                                 <a href="#">
                                    <p class="contact-text-sub">+880-1926-504116</p>
                                 </a>
                            </div>
                        </div>
                        <div class="cont-add add-3">
                            <div class="cont-add-lft">
                                <span class="fa fa-file-pdf-o" aria-hidden="true"></span>
                           </div>
                            <div class="cont-add-rgt">
                                <a href="{{ route('cv.download') }}">
                                    <p class="contact-text-sub">Download Resume</p>
                                </a>
                            </div>
                           
                        </div>

                    </div>
                </div>
                <!-- //contact address -->
                 
            </div>
        </div>
        <!-- map -->
        <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233667.82239289454!2d90.27923794728072!3d23.780887455957277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1599225246821!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <!-- //map -->
    </div>
</section>
<!-- //contact -->
@endsection