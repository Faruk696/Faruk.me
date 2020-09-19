@extends('layout');

@section('content')
<div class="wrapper"> 

<section class="w3l-about-breadcrum">
  <div class="breadcrum-bg">
    <div class="container py-5">
      <p><a href="index.html">Home</a> &nbsp; / &nbsp; About</p>
     </div>
  </div>
</section>
<!-- w3l-content-photo-5 -->
<div class="w3l-content-photo-5 py-5" id="about">
	<div class="content-main pt-lg-5 pt-md-3 pb-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 content-photo">
					<a href="#"><img src="assets/images/22.jpg" class="img-fluid" alt="content-photo"></a>
				</div>
				<div class="col-lg-7 content-left mt-lg-0 mt-5 pl-lg-5">
					<h3>I Believe Failure Is The Condiment That Gives Sucess  It'S Flavour</h3>
          <p class="mb-0">This is Md. Omor Faruk - Software Engineer, I have completed my Msc in computer science from Jahangirnagar University and Bsc in computer science and software engineering from American International University - Bangladesh.Currently i m working in ACME Laboratories Ltd. as an IT executive.Here i m working with root level customer data.</p>
          <br>
          <p>I have a favourite qoute "Prayers r invisible but they make impossible things possible.It is Allah's job to do the wonder,Our part is the most simple...Pray...Believe...and wait."</p>
					<a href="{{ route('services') }}" class="btn-theme2 btn mt-lg-5 mt-4">More about me</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //w3l-content-photo-5 -->
<!-- home page service grids -->

<!-- //home page service grids -->

<!-- specifications -->
<section class="w3l-specifications-9">
    <div class="main-w3 py-5" id="stats">
        <div class="container py-md-3">
            
           <div class="main-cont-wthree-fea row ">
                <div class="grids-speci1 col-lg-3 col-6">
                    <div class="spec-2 text-center">
                     
                    <h3 class="title-spe">820</h3>
                    <p>Hours of Works</p>
                </div>
                </div>
                <div class="grids-speci1 midd-eff-spe col-lg-3 col-6">
                    <div class="spec-2 text-center">
                  
                    <h3 class="title-spe">25</h3>
                    <p>Projects Done</p>
                    </div>
                </div>
                <div class="grids-speci1 las-but col-lg-3 col-6  mt-lg-0 mt-4">
                    <div class="spec-2 text-center">
                    
                    <h3 class="title-spe">4</h3>
                    <p>Satisfied Customers</p>
                    </div>
                </div>
                <div class="grids-speci1 las-t col-lg-3 col-6  mt-lg-0 mt-4">
                    <div class="spec-2 text-center">
                     
                        <h3 class="title-spe">2 </h3>
                        <p>Awards Winning</p>
                        </div>
                    </div>
            </div>
            
        </div>
    </div>
    <!-- //specifications -->
</section>

</div>
@endsection