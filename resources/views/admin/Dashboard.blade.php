<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Fady Gamil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("css/open-iconic-bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/animate.css")}}">
    <link rel="stylesheet" href="{{asset("css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/owl.theme.default.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/magnific-popup.css")}}">
    <link rel="stylesheet" href="{{asset("css/aos.css")}}">
    <link rel="stylesheet" href="{{asset("css/ionicons.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/flaticon.css")}}">
    <link rel="stylesheet" href="{{asset("css/icomoon.css")}}">
    <link rel="stylesheet" href={{asset("css/style.css")}}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="/">FG.</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>
	          <li class="nav-item"><a href="#skills-section" class="nav-link"><span>Skills</span></a></li>
	          <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Portfolio</span></a></li>
	        </ul>
	      </div>
	    </div>
    </nav>

    <section class="ftco-section ftco-no-pb" id="resume-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
				<div class="col-md-10 heading-section text-center ftco-animate">
					<h1 class="big big-2">Resume</h1>
					<h2 class="mb-4">Resume</h2>
					<p>Experience is the child of thought, and thought is the child of action</p>
				</div>
        	</div>
    		<div class="row">
				@foreach($exps as $exp)
				@if($loop->index % ceil($exp->count()/2) ==0)
					<div class="col-md-6">
				@endif
    				<div class="resume-wrap ftco-animate">
    					<span class="date">{{$exp->startYear}}-{{$exp->endYear}}</span>
    					<h2>{{$exp->position}}</h2>
    					<span class="position">{{$exp->organization}}</span>
    					<p class="mt-4">{{$exp->description}}</p>
                        <div>
							<a href="/admin/edit/{{$exp->id}}"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="/admin/delete/{{$exp->id}}"><i class="fa-solid fa-trash"></i></a>
                        </div>
    				</div>
				@if($loop->index % ceil($exp->count()/2) == ceil($exp->count()/2)-1)
					</div>
				@endif
				@endforeach
			</div>
    		</div>
    		<div class="row justify-content-center mt-5">
    			<div class="col-md-6 text-center ftco-animate">
    				<p><a href="{{asset("Fady-Gamil-Cv.pdf")}}" download="Fady-Gamil-Cv.pdf" class="btn btn-primary py-4 px-5">Download CV</a></p>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section" id="services-section">
    	<div class="container">
    		<div class="row justify-content-center py-5 mt-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Services</h1>
            <h2 class="mb-4">Services</h2>
            <p>“The end of all knowledge should be service to others.”</p>
          </div>
        </div>
    		<div class="row">
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1">
							<span class="icon">
							<i class="fa-solid fa-palette"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">Web Design</h3>
							</div>
						</a>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1">
							<span class="icon">
								<i class="fa-solid fa-code"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">Web Developer</h3>
							</div>
						</a>
					</div>

					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1">
							<span class="icon">
								<i class="fa-solid fa-database"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">Data Analysis</h3>
							</div>
						</a>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1">
							<span class="icon">
								<i class="fa-solid fa-chart-line"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">Data Visualization</h3>
							</div>
						</a>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1">
							<span class="icon">
								<i class="fa-solid fa-circle-nodes"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">API Intgreation</h3>
							</div>
						</a>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1">
							<span class="icon">
								<i class="fa-solid fa-brain"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">Model/experiment flow</h3>
							</div>
						</a>
					</div>
				</div>
    	</div>
    </section>

		
		<section class="ftco-section" id="skills-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Skills</h1>
            <h2 class="mb-4">My Skills</h2>
            <p>“Nobody ever mastered any skill except through intensive persistent and intelligent practice.”</p>
          </div>
        </div>
				<div class="row">
					@foreach($skills as $skill)
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>{{$skill->name}}</h3>
							<div class="progress">
							 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="50"
							  	aria-valuemin="0" aria-valuemax="100" style="width:{{$skill->level}}%">
							    <span>{{$skill->level}}%</span>
							  	</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>
 

    <section class="ftco-section ftco-project" id="projects-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Projects</h1>
            <h2 class="mb-4">My Projects</h2>
            <p>“The greater part of progress is the desire to progress.”</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-4">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-4.jpg);">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3><a href="#">Branding &amp; Illustration Design</a></h3>
	    					<span>Web Design</span>
	    				</div>
    				</div>
  				</div>
  				<div class="col-md-8">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-5.jpg);">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3><a href="#">Branding &amp; Illustration Design</a></h3>
	    					<span>Web Design</span>
	    				</div>
    				</div>
  				</div>

    			<div class="col-md-8">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-1.jpg);">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3><a href="#">Branding &amp; Illustration Design</a></h3>
	    					<span>Web Design</span>
	    				</div>
    				</div>

    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-6.jpg);">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3><a href="#">Branding &amp; Illustration Design</a></h3>
	    					<span>Web Design</span>
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="row">
    					<div class="col-md-12">
		    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-2.jpg);">
		    					<div class="overlay"></div>
			    				<div class="text text-center p-4">
			    					<h3><a href="#">Branding &amp; Illustration Design</a></h3>
			    					<span>Web Design</span>
			    				</div>
		    				</div>
	    				</div>
	    				<div class="col-md-12">
		    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-3.jpg);">
		    					<div class="overlay"></div>
			    				<div class="text text-center p-4">
			    					<h3><a href="#">Branding &amp; Illustration Design</a></h3>
			    					<span>Web Design</span>
			    				</div>
		    				</div>
	    				</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>


    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h1 class="big big-2">Contact</h1>
            <h2 class="mb-4">Contact Me</h2>
            <p>WAYS TO REACH ME</p>
          </div>
        </div>

        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-location-dot"></i>
          		</div>
          		<h3 class="mb-4">Address</h3>
	            <p>King Faisal St - Giza</p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-phone"></i>
          		</div>
          		<h3 class="mb-4">Contact Number</h3>
	            <p><a href="tel://1234567920">+(20)1279792658</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-phone"></i>
          		</div>
          		<h3 class="mb-4">Email Address</h3>
	            <p><a href="mailto:fadygamilha@gmail.com">fadygamilha@gmail.com</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-globe"></i>
          		</div>
          		<h3 class="mb-4">Website</h3>
	            <p><a href="#">yoursite.com</a></p>
	          </div>
          </div>
        </div>

        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="#" class="bg-light p-4 p-md-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div class="img" style="background-image: url(images/about.jpg);"></div>
          </div>
        </div>
      </div>
    </section>
		

    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset("js/jquery.min.js")}}"></script>
  <script src="{{asset("js/jquery-migrate-3.0.1.min.js")}}"></script>
  <script src="{{asset("js/popper.min.js")}}"></script>
  <script src="{{asset("js/bootstrap.min.js")}}"></script>
  <script src="{{asset("js/jquery.easing.1.3.js")}}"></script>
  <script src="{{asset("js/jquery.waypoints.min.js")}}"></script>
  <script src="{{asset("js/jquery.stellar.min.js")}}"></script>
  <script src="{{asset("js/owl.carousel.min.js")}}"></script>
  <script src="{{asset("js/jquery.magnific-popup.min.js")}}"></script>
  <script src="{{asset("js/aos.js")}}"></script>
  <script src="{{asset("js/jquery.animateNumber.min.js")}}"></script>
  <script src="{{asset("js/scrollax.min.js")}}"></script>
  
  <script src="{{asset("js/main.js")}}"></script>
    
  </body>
</html>