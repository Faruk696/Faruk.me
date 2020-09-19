@extends('layout')

@section('content')
<section class="w3l-main-banner" id="home">
  <div class="companies20-content">
    <div class="companies-wrapper">
        <div class="item">
         
            <div class="slider-info banner-view text-center">
              <div class="banner-info container">
                <img src="assets/images/c1.jpg" alt="about image" class="img-fluid">
                <h3 class="banner-text mt-5">Hello, I’m Md. Omor Faruk
                  </h3>
                  <p class="my-4 mb-5">Software Engineer</p><br>
              </div>
            </div>
          
        </div>
    </div>
  </div>
</section>
 <!--  //Main banner section -->
<section class="w3l-about ">
<div class="skills-bars py-5">
 <div class="container py-md-3">
  <div class="heading text-center mx-auto">
    <h3 class="head">Welcome To My Site</h3>
    <p class="my-3 head">This Is my personal protfolio website and this will also work as a professional resume. I love to do programming and learning new technologies.Now-a-days i am working with laravel and lumen.</p>
    </div>

<div class="row mt-5 pt-3">
    <div class="col-lg-4 col-md-4 col-sm-6 skills-bar-grids mb-4 pb-2">
        <h4>Database Design</h4>
        <div class="progress">
        <div class="progress-bar progress-bar-striped bg-color" role="progressbar" style="width: 80% ;height:4px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
      </div>
    </div>
</div>
    <div class="col-lg-4 col-md-4 col-sm-6 skills-bar-grids mb-4 pb-2">
        <h4>Front-End Development</h4>
        <div class="progress">
        <div class="progress-bar progress-bar-striped bg-color" role="progressbar" style="width: 80% ;height:4px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
      </div>
    </div>
</div>
<div class="col-lg-4  col-md-4 col-sm-6 skills-bar-grids mb-4 pb-2">
    <h4>Back-End Development</h4>
    <div class="progress">
    <div class="progress-bar progress-bar-striped bg-color" role="progressbar" style="width: 60% ;height:4px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
  </div>
</div>
</div>


 </div>
 </div>
</div>
 </section>
<section class="w3l-feature-3" id="features">
	<div class="grid top-bottom">
		<div class="container">
			<div class="heading text-center mx-auto">
                <h3 class="head text-white">I'm Available For Hire</h3>
                <p class="my-3 head text-white">Desire to be a part of vibrant and leading organization and create footprints as a Software Developer to assist the organizations in all aspects by utilizing all my skills, knowledge, abilities and experience with a balance of hands-on, management and leadership responsibilities.</p>
              </div>
			<div class="middle-section grid-column text-center mt-5 pt-3">
				<div class="three-grids-columns">
					<span class="fa fa-database"></span>
					<h4>Database Design</h4>
					<p>Completed course on MySQL Database Design by Laracast,learned so many things like INDEXING and complex Relationships. </p>
					
				</div>
				<div class="three-grids-columns">
					<span class="fa fa-tv"></span>
					<h4>Front-End Development</h4>
					<p>Having Strong Knowledge about HTMl5 and CSS3,Working with Vue.Js Is fun for me</p>
					
				</div>
				<div class="three-grids-columns">
					<span class="fa fa-css3"></span>
					<h4>Back-End Development</h4>
					<p>comfortable with coding in Laravel Framework and Lumen for Api development</p>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="products-4" id="portfolio">
    <!-- Products4 block -->
    <div id="products4-block" class="text-center">
        <div class="container">
            <div class="heading text-center mx-auto mb-5">
                <h3 class="head">I Love What I Do</h3>
                <p class="my-3 head">Working on a project always gives me satisfaction .I believe in "Sometimes we could use a little magic, don’t hide the magic within you!"</p>
              </div>
            <input id="tab1" type="radio" name="tabs" checked>
            <label class="tabtle" for="tab1">All Projects</label>

            <input id="tab2" type="radio" name="tabs">
            <label class="tabtle" for="tab2">Personal</label>

            <input id="tab3" type="radio" name="tabs">
            <label class="tabtle" for="tab3">Office</label>

            <input id="tab4" type="radio" name="tabs">
            <label class="tabtle" for="tab4">Illustration</label>

            <section id="content1" class="tab-content text-left">
                <div class="d-grid grid-col-3">
                    <div class="product">
                        <a href="assets/images/g1.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g1.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        
                    </div>
                    <div class="product">
                        <a href="assets/images/g2.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g2.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        
                    </div>
                    <div class="product">
                        <a href="assets/images/g3.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g3.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        
                    </div>
                    <div class="product">
                        <a href="assets/images/g4.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g4.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        
                    </div>
                    <div class="product">
                        <a href="assets/images/g5.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g5.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                       
                    </div>
                    <div class="product">
                        <a href="assets/images/g6.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g6.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        
                    </div>
                    
                    
                </div>
            </section>

            <section id="content2" class="tab-content text-left">
                <div class="d-grid grid-col-3">
                    <div class="product">
                        <a href="assets/images/g7.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g7.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        
                    </div>
                    <div class="product">
                        <a href="assets/images/g8.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g8.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                       
                    </div>
                    <div class="product">
                        <a href="assets/images/g1.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g1.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                       
                    </div>
                    <div class="product">
                        <a href="assets/images/g2.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g2.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                       
                    </div>
                    <div class="product">
                        <a href="assets/images/g3.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g3.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        
                    </div>
                    <div class="product">
                        <a href="assets/images/g4.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g4.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        
                    </div>
                </div>
            </section>

            <section id="content3" class="tab-content text-left">
                <div class="d-grid grid-col-3">
                    <div class="product">
                        <a href="assets/images/g5.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g5.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                      
                    </div>
                    <div class="product">
                        <a href="assets/images/g6.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g6.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                       
                    </div>
                    <div class="product">
                        <a href="assets/images/g7.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g7.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        
                    </div>
                </div>
            </section>

            <section id="content4" class="tab-content text-left">
                <div class="d-grid grid-col-3">
                    <div class="product">
                        <a href="assets/images/g8.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g8.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        
                    </div>
                    <div class="product">
                        <a href="assets/images/g1.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g1.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- Products4 block -->
</div>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/lightbox-plus-jquery.min.js"></script>
<section class="services-12" id="experience">
	<div class="form-12-content">
		<div class="container">
			<div class="grid grid-column-2 ">
				
				<div class="column1">
          <h3 class="mb-5">Experiences</h3>
					<div class="experience-top">
            <h5>August 2019 - now</h5>
						<h4>IT executive at ACME Laboratories Ltd.</h4>
						<p class="my-3 text-white">-Development and maintenance ACME Pharmaceuticals Sales Applications (Oracle)
-Development and maintenance of MIS sales report (PHP).
-Development of Executive Canvas(Laravel).
-Development and maintenance System for International Business Division (IBD).
</p>
            </div>
            <div class="experience-top">
              <h5>November 2018 to July 2019</h5>
              <h4>Jr. IT executive at Premier Cement Mills Ltd.</h4>
              <p class="my-3 text-white">-Development and maintenance Premier Cement Sales Application (Android)
-Development and maintenance of ERP system (Dream Apps ERP).
-	Server Management.
-	Report generating from databases with crystal report and jasper report.
</p>
              </div>
              <div class="experience-top">
                <h5>August 2017 to July 2018</h5>
                <h4>Android application Developer at Rapid PR</h4>
                <p class="my-3 text-white">-Development of Android Application for Bangladesh tourist police.
-Development of Rapid Seba android Application.
-Development of Gari kena becha.
</p>
                </div>
                <div class="experience-top">
                <h5>June 2017 to August 2017</h5>
                <h4>Web application Developer at World Tech Org (intern).</h4>
                <p class="my-3 text-white">-Development of management system for Rahat Anwar Hospital (Barishal)
-Testing developed system.
-Training Hospital management.
</p>
                </div>
					</div>
					<div class="column2">
            <h3 class="mb-5">Education</h3>
            <div class="experience-top">
              <h5>2018</h5>
              <h4>Master of Science (M.sc) in Computer Science </h4>
              <p class="my-3 text-white">-Institution name: Jahangirnagar University 
-Department: Computer Science
-Result: CGPA 3.23 out of 4 Scale 
</p>
              </div>
              <div class="experience-top">
                <h5>2016</h5>
                <h4>Bachelor of Science (B.sc) in Computer Science and Software Engineering</h4>
                <p class="my-3 text-white">-Institution name: American International University
-Bangladesh Department: Computer Science
-Result: CGPA 3.39 out of 4 Scale 
</p>
                </div>
                <div class="experience-top">
                  <h5>2011</h5>
                  <h4>Higher Secondary School Certificate [H.S.C]</h4>
                  <p class="my-3 text-white">-Institution name: Dhaka State College --Board: Dhaka.
-Result: GPA 4.10 out of 5 Scale
</p>
                  </div>
                  <div class="experience-top">
                  <h5>2009</h5>
                  <h4>Secondary School Certificate [S.S.C]</h4>
                  <p class="my-3 text-white">-Institution name: Ramgonj High School -Board: Comilla
 -Result: GPA 4.88 out of 5 Scale.
</p>
                  </div>
					</div>
			</div>
		</div>
	</div>
</section>
<section class="w3l-testimonials" id="testimonials">
  <div class="customers-6-content py-5">
    <div class="container py-lg-3">
      <div class="heading text-center mx-auto">
        <h3 class="head">What They Says</h3>
        <p class="my-3 head "> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
          Nulla mollis dapibus nunc, ut rhoncus
          turpis sodales quis. Integer sit amet mattis quam.</p>
      </div>
     
      <div id="customerhnyCarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
          <li data-target="#customerhnyCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#customerhnyCarousel" data-slide-to="1"></li>
                      
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner pb-5">

          <div class="carousel-item active">
            <div class="customer row py-5 mt-3">
              <div class="col-lg-4 col-md-6">
                <div class="card">
                 
                  <div class="card-body">
                    <img class="card-img-top img-responsive" src="assets/images/c4.jpg" alt="">
                    <h3 class="card-title mt-2">Sabiano Hasan</h3>
                    <p class="sub-title mb-3">Banker</p>
                    <p class="card-text">  "Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore"
                    </p>
                  
                    
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 off-testi-2">
                <div class="card">
                
                  <div class="card-body">
                    <img class="card-img-top img-responsive" src="assets/images/c5.jpg" alt="">
                    <h3 class="card-title mt-2">Hasan Ibn Abdul Kaiyum</h3>
                    <p class="sub-title mb-3">Businessman</p>
                    <p class="card-text">  "Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore"
                    </p>
                    
                  
                  </div>
                </div>
              </div>
              <div class="col-lg-4 offset-md-3 offset-lg-0 col-md-6 off-testi">
                <div class="card">
                  
                  <div class="card-body">
                    <img class="card-img-top img-responsive" src="assets/images/c6.jpg" alt="">
                    <h3 class="card-title mt-2">Saleh Musa</h3>
                    <p class="sub-title mb-3">Database Administrator</p>
                    <p class="card-text">  "Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore"
                     </p>
                   
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--.item-->

          <div class="carousel-item">
            <div class="customer row py-5 mt-3">
              <div class="col-lg-4 col-md-6">
                <div class="card">
                 
                  <div class="card-body">
                    <img class="card-img-top img-responsive" src="assets/images/c7.jpg" alt="">
                    <h3 class="card-title mt-2">Arif Uddin</h3>
                    <p class="sub-title mb-3">Software Engineer</p>
                    <p class="card-text">  "Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore"
                    </p>
                  
                  
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 off-testi-2">
                <div class="card">
                 
                  <div class="card-body">
                    <img class="card-img-top img-responsive" src="assets/images/c8.jpg" alt="">
                    <h3 class="card-title mt-2">Helal Khan</h3>
                    <p class="sub-title mb-3">Full Stack Software Engineer</p>
                    <p class="card-text">  "Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore"
                     </p>
                  
                    
                  </div>
                </div>
                
                
              </div>
              <div class="col-lg-4 offset-md-3 offset-lg-0 col-md-6 off-testi">
                <div class="card">
                 
                  <div class="card-body">
                    <img class="card-img-top img-responsive" src="assets/images/c1.jpg" alt="">
                    <h3 class="card-title mt-2">Henry Nicholas</h3>
                    <p class="sub-title mb-3">Engineer</p>
                    <p class="card-text"> "Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore"
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
           

        </div>
        <!--.carousel-inner-->
      </div>
    </div>
  </div>
  <!--//customers -->
</section>
 
@endsection