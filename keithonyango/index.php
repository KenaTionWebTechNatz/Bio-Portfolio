<?php

session_start();
require "dbConnect.php";



print $_POST["messages"];
if(isset($_POST["messages"])){

    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $messages =  $_POST["messages"];
    
    require "phpmailer/PHPMailerAutoload.php";
    $user_insert = "INSERT INTO messages(fullname, email,subject, messages) VALUES('$fullname','$email','$subject','$messages')";

    if($conn->query($user_insert) === TRUE){
               header("Location: index.html");
                exit();
              
    }else{
        print $conn->error;
    }
}
?>


<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Keith Onyango</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700,900" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>

	<!-- Start Preloader Area -->
	<!--<div class="preloader-area">
		<div class="loader-box">
			<div class="loader"></div>
		</div>
	</div>-->
	<!-- End Preloader Area -->


	<!-- Start Header Area -->
	<header id="header">
		<div class="container main-menu">
			<div class="row align-items-center d-flex">
				<div id="logo">
					<a href="index.html"><img src="" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li><a href="#home-section">Home</a></li>
						<li><a href="#about-section">About Me</a></li>
						<li><a href="#portfolio-section">My Portfolio</a></li>
						<li><a href="#service-section">Service</a></li>
						<li><a href="#contact-section">Contact</a></li>
						
						<!--<li class="menu-has-children"><a href="#">Pages</a>
							<ul>
								<li><a href="elements.html">Elements</a></li>
							
								<li><a href="portfolio-details.html">Portfolio Details</a></li>
							</ul>
						</li>-->
						<!--<li class="menu-has-children"><a href="">Blog</a>
							<ul>
								<li><a href="blog-home.html">Blog Home</a></li>
								<li><a href="blog-single.html">Blog Single</a></li>
							</ul>
						</li>-->
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- End Header Area -->


	<!-- start banner Area -->
	<section class="home-banner-area" id="home-section" style="background-image: url('img/homepage/3.jpg">
		<div class="container">
			<div class="row fullscreen d-flex align-items-center" >
				<div class="banner-content col-lg-6 col-md-12 justify-content-center " >
					<div class="me wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.2s">Hi! I'm</div>
					<h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s">KEITH ONYANGO</h1>
					<div class="designation mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">
						
						<span class="designer">A Kenyan Based</span>
						
						<span class="developer">Full-Stack Website Developer</span>
					</div>
					<a href="#" class="primary-btn" data-text="Hire Me">
						<span>H</span>
						<span>i</span>
						<span>r</span>
						<span>e</span>
						<span> </span>
						<span>M</span>
						<span>e</span>
					</a>
				</div>
				<div class="banner-img col-lg-6 col-md-6 align-self-end">
					<img class="img-fluid" src="" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->


	<!-- Start brands Area -->
	<!--<section class="brands-area">
		<div class="container">
			<div class="brand-wrap">
				<div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
					<div class="col single-brand">
						<a href="#"><img class="mx-auto" src="img/brand/b1.png" alt=""></a>
					</div>
					<div class="col single-brand">
						<a href="#"><img class="mx-auto" src="img/brand/b2.png" alt=""></a>
					</div>
					<div class="col single-brand">
						<a href="#"><img class="mx-auto" src="img/brand/b3.png" alt=""></a>
					</div>
					<div class="col single-brand">
						<a href="#"><img class="mx-auto" src="img/brand/b4.png" alt=""></a>
					</div>
					<div class="col single-brand">
						<a href="#"><img class="mx-auto" src="img/brand/b5.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</section>-->
	<!-- End brands Area -->


	<!-- Start About Area -->
	<section class="about-area section-gap" id="about-section">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6 about-left">
					<img class="img-fluid" src="img/kenation.jpg" alt="">
				</div>
				<div class="col-lg-5 col-md-12 about-right">
					<div class="section-title">
						<h2>ABOUT ME</h2>
					</div>
					<div class="mb-50 wow fadeIn" data-wow-duration=".8s">
						<p>
							Being a Full-Stack Website developer is not only a passion but a dream to me as getting to create skillfull, elegant and beautiful websites based from the users idea that i value most is what i am happy to say i am proud of.<br>	  
					
					My main aim is to get to create ideas into reality that are able to have a positive impact towards the society and the world.</h4>
					  
						</p>
						<p>
							I am currently an undergraduate student at the Strathmore University doing a Bachelor of Business Information and Technology.
						</p>
					</div>
					<a href="#" class="primary-btn white" data-text="Social Links">
						<span>S</span>
						<span>o</span>
						<span>c</span>
						<span>i</span>
						<span>a</span>
						<span>l</span>
						<span> </span>
						<span>L</span>
						<span>i</span>
						<span>n</span>
						<span>k</span>
						<span>s</span>
					</a>
					<a href="#" class="primary-btn" data-text="Resume">
						<span>R</span>
						<span>e</span>
						<span>s</span>
						<span>u</span>
						<span>m</span>
						<span>e</span>
					</a>
				
				</div>
			</div>
		</div>
	</section>
	<!-- End About Area -->


	<!-- Start Work Area Area -->
	<section class="work-area section-gap-top section-gap-bottom-90" id="portfolio-section">
		<div class="container">
			<div class="row d-flex justify-content-between align-items-end mb-80">
				<div class="col-lg-6">
					<div class="section-title">
						<h2>SAMPLE PROJECTS TACKLED</h2>
						<p>A brief sample fo the projects i have been able to work on.</p>
					</div>
				</div>

				<!--<div class="col-lg-6">
					<div class="filters">
						<ul>
							<li class="active" data-filter=".all">All Categories</li>
							<li data-filter=".branding">Branding</li>
							<li data-filter=".creative">Creative Work</li>
							<li data-filter=".web-design">Web Design</li>
						</ul>
					</div>
				</div>-->
			</div>

			<div class="filters-content">
				<div class="row grid">

					<div class="single-work col-lg-4 col-md-6 col-sm-12 all creative wow fadeInUp" data-wow-duration="2s">
						
						<div class="relative">
							
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="img/screenshot--64-.png" alt="">
							</div>
							<div class="middle">
								<h4>My Portfolio</h4>
								<div class="cat">Personal Project</div>
							</div>
							<a class="overlay" href="portfolio-details.html"></a>
						</div>
					</div>
					
					<div class="single-work col-lg-4 col-md-6 col-sm-12 all creative wow fadeInUp" data-wow-duration="2s">
						
						<div class="relative">
							
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="img/pic18.png" alt="">
							</div>
							<div class="middle">
								<h4>KENATION TECHnologies</h4>
								<div class="cat">Organization Project</div>
							</div>
							<a class="overlay" href="portfolio-details.html"></a>
						</div>
					</div>
					<div class="single-work col-lg-4 col-md-6 col-sm-12 all web-design branding wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="img/screenshot--33-.png" alt="">
							</div>
							<div class="middle">
								<h4>AuTo Hire</h4>
								<div class="cat">Client Project</div>
							</div>
							<a class="overlay" href="portfolio-details.html"></a>
						</div>
					</div>
					<div class="single-work col-lg-4 col-md-6 col-sm-12 all branding web-design wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="img/screenshot--35-.png" alt="">
							</div>
							<div class="middle">
								<h4>Safari Super Shine</h4>
								<div class="cat">Client Project</div>
							</div>
							<a class="overlay" href="portfolio-details.html"></a>
						</div>
					</div>
					<div class="single-work col-lg-4 col-md-6 col-sm-12 all web-design wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="img/screenshot--38-.png" alt="">
							</div>
							<div class="middle">
								<h4>IDONATE</h4>
								<div class="cat">Client Project</div>
							</div>
							<a class="overlay" href="portfolio-details.html"></a>
						</div>
					</div>
				
					</div>
				
				</div>
			</div>
		</div>
	</section>
	<!-- End Work Area Area -->


	<!-- Start Job History Area Area -->
	<!--<section class="job-area section-gap-top section-gap-bottom-90">
		<div class="container">
			<div class="row d-flex">
				<div class="col-lg-12">
					<div class="section-title">
						<h2>Job History</h2>
						<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see
							some for as low as $.17 each.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6">
					<div class="single-job">
						<div class="top-sec d-flex justify-content-between">
							<div class="top-left">
								<h4>Senior Creative Design</h4>
								<p>Old Bird IT, New Yorkt</p>
							</div>
							<div class="top-right">
								<a href="#" class="primary-btn" data-text="Jul '15 to Present">
									<span>J</span><span>u</span><span>l</span>
									<span>'</span><span>1</span><span>5</span>
									<span>t</span><span>o</span>
									<span>P</span><span>r</span><span>e</span><span>s</span><span>e</span><span>n</span><span>t</span>
								</a>
							</div>
						</div>
						<div class="bottom-sec wow fadeIn" data-wow-duration="2s">
							All users on MySpace will know that there are millions of people out there. Every day besides. All users on My will know
							that there are millions of people out of the field there.
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="single-job">
						<div class="top-sec d-flex justify-content-between">
							<div class="top-left">
								<h4>Senior Visualiser</h4>
								<p>Old Bird IT, New Yorkt</p>
							</div>
							<div class="top-right">
								<a href="#" class="primary-btn" data-text="Jul '15 to Present">
									<span>J</span><span>u</span><span>l</span>
									<span>'</span><span>1</span><span>5</span>
									<span>t</span><span>o</span>
									<span>P</span><span>r</span><span>e</span><span>s</span><span>e</span><span>n</span><span>t</span>
								</a>
							</div>
						</div>
						<div class="bottom-sec wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
							All users on MySpace will know that there are millions of people out there. Every day besides. All users on My will know
							that there are millions of people out of the field there.
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="single-job">
						<div class="top-sec d-flex justify-content-between">
							<div class="top-left">
								<h4>Junior Visualiser</h4>
								<p>Old Bird IT, New Yorkt</p>
							</div>
							<div class="top-right">
								<a href="#" class="primary-btn" data-text="Jul '15 to Present">
									<span>J</span><span>u</span><span>l</span>
									<span>'</span><span>1</span><span>5</span>
									<span>t</span><span>o</span>
									<span>P</span><span>r</span><span>e</span><span>s</span><span>e</span><span>n</span><span>t</span>
								</a>
							</div>
						</div>
						<div class="bottom-sec wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
							All users on MySpace will know that there are millions of people out there. Every day besides. All users on My will know
							that there are millions of people out of the field there.
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="single-job">
						<div class="top-sec d-flex justify-content-between">
							<div class="top-left">
								<h4>Intern Designer</h4>
								<p>Old Bird IT, New Yorkt</p>
							</div>
							<div class="top-right">
								<a href="#" class="primary-btn" data-text="Jul '15 to Present">
									<span>J</span><span>u</span><span>l</span>
									<span>'</span><span>1</span><span>5</span>
									<span>t</span><span>o</span>
									<span>P</span><span>r</span><span>e</span><span>s</span><span>e</span><span>n</span><span>t</span>
								</a>
							</div>
						</div>
						<div class="bottom-sec wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
							All users on MySpace will know that there are millions of people out there. Every day besides. All users on My will know
							that there are millions of people out of the field there.
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>-->
	<!-- End Job Historyt Area Area -->


	<!-- Start Service Area -->
	<section class="service-area section-gap" id="service-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<h2>SKILLED SERVICES</h2>
						<p></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="single-service wow fadeInUp" data-wow-duration="1s">
						<span class="lnr lnr-screen"></span>
						<h4>
							<span>WEBSITE</span> DEVELOPMENT
						</h4>
						<p>  
							Here im skilled at both back-end and front-end website development that are highly dependant on HTML5, CSS, Javascript, MySQL and PHP. Based on your idea that i value i create the idea into a reality website that is to have a positive impact towards the society.
				 </p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-service wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
						<span class="lnr lnr-laptop-phone"></span>
						<h4><span>WEBSITE</span> DESIGNING
						</h4>
						<p> Here im skilled at looking at the current website design trends and ensure to implement them to the clients project to have a beautiful look and feel appearance as the end result.
							.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-service wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
						<span class="lnr lnr-screen"></span>
						<h4><span>WEBSITE</span> PORTFOLIOS
						</h4>
						<p>Portfolios offer a platform to get to describe more about yourself and what your business offers. If your interested in a business or personal portfolio i am the right guy for you </p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-service wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
						<span class="lnr lnr-laptop-phone"></span>
						<h4><span>WEBSITE</span> BLOGS
						</h4>
						<p>If your in need of either a Personal Blog, Automobile Blog, Ecommerce Blog, Organization Blog or any other preference blog of your choice then i am the right developer for you.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Service Area -->


	<!-- Start Testimonials Area -->
	<!--<section class="testimonials_area section-gap">
		<div class="container">
			<div class="testi_slider owl-carousel">
				<div class="item">
					<div class="testi_item">
						<img src="img/quote.png" alt="">
						<h4>Fanny Spencer</h4>
						<ul class="list">
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
						</ul>
						<div class="wow fadeIn" data-wow-duration="1s">
							<p>
								As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel
								across her face <br> and She is the host to your journey.
							</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="testi_item">
						<img src="img/quote.png" alt="">
						<h4>Fanny Spencer</h4>
						<ul class="list">
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
						</ul>
						<div class="wow fadeIn" data-wow-duration="1s">
							<p>
								As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel
								across her face <br> and She is the host to your journey.
							</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="testi_item">
						<img src="img/quote.png" alt="">
						<h4>Fanny Spencer</h4>
						<ul class="list">
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
						</ul>
						<div class="wow fadeIn" data-wow-duration="1s">
							<p>
								As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel
								across her face <br> and She is the host to your journey.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>-->
	<!-- End Testimonials Area -->


	<!-- Start Contact Area -->
	
	<section class="contact-area section-gap" id="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="contact-title">
						<h2>Contact Me</h2>
						<p>Get in Touch with me if you want me to build you a website</p>
					</div>
				</div>
			</div>

			<div class="row mt-80">
				<div class="col-lg-4 col-md-4">
					<div class="contact-box">
						<h4>+254 708190804</h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="contact-box">
						<h4>kenation215@gmail.com</h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="contact-box">
						<h4>info@keithonyango.com</h4>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="#" class="primary-btn mt-50" data-text="Hire Me">
						<span>H</span>
						<span>i</span>
						<span>r</span>
						<span>e</span>
						<span> </span>
						<span>M</span>
						<span>e</span>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End Contact Area -->

	
	<!-- Start contact-page Area -->
	<section class="contact-page-area section-gap-top" >
		<div class="container">
			<div class="row">
				<div class="col-lg-4 d-flex flex-column address-wrap">
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-home"></span>
						</div>
						<div class="contact-details">
							<h5>Nairobi, Kenya</h5>
							<p>
								
							</p>
						</div>
					</div>
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-phone-handset"></span>
						</div>
						<div class="contact-details">
							<h5>+254 708190804</h5>
							<p></p>
						</div>
					</div>
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-envelope"></span>
						</div>
						<div class="contact-details">
							<h5>kenation215@gmail.com</h5>
							<p>Get in Touch with me !</p>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<form class="form-area " id="myForm" action="contactprocess.php" method="post" class="contact-form text-right">
						<div class="row">
							<div class="col-lg-6 form-group form-group-top">
								<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
								 class="common-input mb-20 form-control" id="fullname" type="text">

								<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control"  id="email" type="email">

								<input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'"
								 class="common-input mb-20 form-control"  id="phone" type="text">
							</div>
							<div class="col-lg-6 form-group">
								<textarea class="common-textarea form-control" name="messages" id="messages" placeholder="message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'message'"
								 required=""></textarea>
							</div>
							<div class="col-lg-12">
								<div class="alert-msg" style="text-align: left;"></div>

								<button class="primary-btn" style="float: right;" data-text="Send Message">
									<span>S</span>
									<span>e</span>
									<span>n</span>
									<span>d</span>
									<span> </span>
									<span>M</span>
									<span>e</span>
									<span>s</span>
									<span>s</span>
									<span>a</span>
									<span>g</span>
									<span>e</span>

								</button>
							</div>
						</div>
					</form>
				</div>

				<!--<div class="col-lg-12">
					<div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
				</div>-->
			</div>
		</div>
	</section>
	<!-- End contact-page Area -->

	<!-- start footer Area -->
	<footer class="footer-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="footer-top flex-column">
						<div class="footer-logo">
							<a href="#">
								<img src="" alt="">
							</a>
							<h4>SOCIAL LINKS</h4>
						</div>
						<div class="footer-social">
						
							<a href="https://github.com/KenaTionWebTechNatz"><i class="fa fa-github"></i></a>
							<a href="https://www.linkedin.com/in/keith-onyango-8a2a71199/"><i class="fa fa-linkedin"></i></a>
							<a href="https://twitter.com/KeithNathanOny2"><i class="fa fa-twitter"></i></a>
							<a href="https://www.instagram.com/_kenation_/"><i class="fa fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer-bottom justify-content-center">
				<p class="col-lg-8 col-sm-12 footer-text">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made  by <a href="" target="_blank">Keith Onyango</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<!-- ####################### Start Scroll to Top Area ####################### -->
	<div id="back-top">
		<a title="Go to Top" href="#">
			<i class="lnr lnr-arrow-up"></i>
		</a>
	</div>
	<!-- ####################### End Scroll to Top Area ####################### -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/mn-accordion.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/jquery.circlechart.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>