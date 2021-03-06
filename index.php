<?php 
	include 'core/init.php';
	$id = $_SESSION['proj_id'];
	$get_dept =  $getFromS->getAllDept();
?>

<!DOCTYPE html>
<!-- Leading Import Export Business Company in Nigeria | 3Timpex design by Jthemes -->
[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]
[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]
[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]
[if (gte IE 9)|!(IE)]>
<html lang="en">


<head>

<base href="<?php BASE_URL ?>">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="author" content="Jthemes"/>	
<meta name="description" content="Developing and Designing of Projects"/>
<meta name="keywords" content="Creating Projects throughout Nigeria">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<!-- SITE TITLE -->
<title>Guiding and making Projects easy for all Nigeria Students</title>

<!-- FAVICON AND TOUCH ICONS  -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="icon" href="images/apple-touch-icon.png" type="image/x-icon">

<!-- GOOGLE FONTS -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">		
<link href="https://fonts.googleapis.com/css?family=Muli:400,600,700,800,900&amp;display=swap" rel="stylesheet">

<!-- BOOTSTRAP CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- FONT ICONS -->
<link href="https://use.fontawesome.com/releases/v5.11.0/css/all.css" rel="stylesheet" crossorigin="anonymous">		
<link href="css/flaticon.css" rel="stylesheet">

<!-- PLUGINS STYLESHEET -->
<link href="css/menu.css" rel="stylesheet">	
<link id="effect" href="css/dropdown-effects/fade-down.css" media="all" rel="stylesheet">
<link href="css/magnific-popup.css" rel="stylesheet">	
<link href="css/flexslider.css" rel="stylesheet">
<link href="css/owl.carousel.min.css" rel="stylesheet">
<link href="css/owl.theme.default.min.css" rel="stylesheet">

<!-- ON SCROLL ANIMATION -->
<link href="css/animate.css" rel="stylesheet">

<!-- TEMPLATE CSS -->
<link href="css/style.css" rel="stylesheet">
<link href="css/style2.css" rel="stylesheet">

<!-- RESPONSIVE CSS -->
<link href="css/responsive.css" rel="stylesheet"> 

</head>

<body>


<!-- PRELOADER SPINNER
============================================= -->		
<div id="loader-wrapper">
<div id="loading">
<div id="loading-center">
<div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
</div>
</div>
</div>




<!-- PAGE CONTENT
============================================= -->	
<div id="page" class="page">




<!-- HEADER
============================================= -->
<header id="header" class="header white-menu navbar-dark">
<div class="header-wrapper">


<!-- MOBILE HEADER -->
<div class="wsmobileheader clearfix">	
<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>	    	
<span class="smllogo smllogo-black"><img src="images/logo.png" width="172" height="40" alt="mobile-logo"/></span>
<span class="smllogo smllogo-white"><img src="images/logo-white.png" width="172" height="40" alt="mobile-logo"/></span>
</div>



<!-- NAVIGATION MENU -->
<div class="wsmainfull menu clearfix">
<div class="wsmainwp clearfix">


<!-- LOGO IMAGE -->
<!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 344 x 80 pixels) -->
<div class="desktoplogo"><a href="#hero-1" class="logo-black"><img src="images/logo.png" width="172" height="40" alt="header-logo"></a></div>
<div class="desktoplogo"><a href="#hero-1" class="logo-white"><img src="images/logo-white.png" width="172" height="40" alt="header-logo"></a></div>


<!-- MAIN MENU -->
<nav class="wsmenu clearfix">
	<ul class="wsmenu-list">
		<li class="nl-simple" aria-haspopup="true"><a href="#hero-1">Home</a></li>
		<li aria-haspopup="true"><a href="#courses-3">Projects <span class="wsarrow"></span></a>
			<ul class="sub-menu">
				<?php foreach($get_dept as $see_dept): ?>
					<li aria-haspopup="true"><a href="subprojects/computerscience.php?id=<?=@$see_dept->dept_id;?>"><?=@$see_dept->dept_name;?> Projects</a></li>
				<?php endforeach; ?>
			</ul>
		</li>	
	</ul>
</nav>	<!-- END MAIN MENU -->

<div class="phone-menu">
	<ul class="allmenus">
		<li class="allmenu"><a href="index.php">Home</a></li>
		<li class="allmenu"><a href="subprojects/computerscience.php">Computer Science</a></li>
		<li class="allmenu"><a href="subprojects/mathandstat.php">Math and Stat</a></li>
	</ul>
</div>


</div>
</div>	<!-- END NAVIGATION MENU -->


</div>     <!-- End header-wrapper -->
</header>	<!-- END HEADER -->


<!-- HERO-1
============================================= -->	
<section id="hero-1" class="hero-section division">


<!-- SLIDER -->
<div class="slider">
<ul class="slides">


<!-- SLIDE #1 -->
<li id="slide-1">

<!-- Background Image -->
<img src="images/slider/slide-1.jpg" alt="slide-background">

<!-- Image Caption -->
<div class="caption d-flex align-items-center left-align">
<div class="container">
<div class="row">
<div class="col-md-8 col-lg-7">
<div class="caption-txt">

	<!-- Title -->
	<h2 class="h2-sm">PROFESSIONAL & COMPLETE PROJECTS FROM ANTUMN SOFTWARES</h2>
	
	<!-- Text -->
	<p class="p-lg">We create and design Professional Projects according to the students requirements and needs and we also Provide Projects report, Synopsis and Documentation.</p>

</div>
</div>
</div>  <!-- End row -->
</div>  <!-- End container -->
</div>	<!-- End Image Caption -->

</li>	<!-- END SLIDE #1 -->

<!-- SLIDE #2 -->
<li id="slide-2">

<!-- Background Image -->
<img src="images/video-1-img.jpg" class="slide2-img" alt="slide-background">

<!-- Image Caption -->
<div class="caption d-flex align-items-center left-align">
<div class="container">
<div class="row">
<div class="col-md-8 col-lg-7">
<div class="caption-txt">

	<!-- Title -->
	<h2 class="h2-sm slider2-header mt-5">Why should you create Projects with Antumn Software</h2>
	
	<!-- Text -->
	<p class="p-lg slider2-text">We Provide Computer Science and Math&Stat projects according to the student requirement and needs. Final Year students can get unique and cognitive educational Projects with Source code and Database in different Programming Language.</p><p class="slider2-text">Our vision is to be the foremost and best platform for students to consult for their Projects throughout Nigeria and explore the outside World also. </p>

</div>
</div>
</div>  <!-- End row -->
</div>  <!-- End container -->
</div>	<!-- End Image Caption -->

</li>	<!-- END SLIDE #2 -->


<!-- SLIDE #3 -->
<li id="slide-3">

<!-- Background Image -->
<img src="images/slider/slide-3.jpg" alt="slide-background">

<!-- Image Caption -->
<div class="caption d-flex align-items-center right-align">
<div class="container">
<div class="row">
<div class="col-md-8 col-lg-7">
<div class="caption-txt">

	<!-- Title -->
	<h2 class="h2-sm">High quality courses from the leading experts</h2>

	<!-- Text -->
	<p class="p-lg">Build your Projects with experts having local & International exposures in different Programming languages with aggregate experience of over 20years.
	</p>

</div>
</div>
</div>  <!-- End row -->
</div>  <!-- End container -->
</div>	<!-- End Image Caption -->

</li>	<!-- END SLIDE #3 -->

</ul>
</div>	<!-- END SLIDER -->


</section>	<!-- END HERO-1 -->	




<!-- ABOUT-1
============================================= -->
<section id="about-1" class="bg-05 about-section division">
<div class="container white-color">
<div class="row d-flex align-items-center">


<!-- ABOUT BOX #1 -->		
<div class="col-md-4">
<div class="abox-1 icon-xs">

<!-- Icon --> 
<span class="flaticon-004-computer"></span>

<!-- Text -->
<div class="abox-1-txt">
<h5 class="h5-md">70+ Project Topics</h5>
<p class="p-md">Explore a variety of standard and completed Project topics with all the documentations</p>
</div>

</div>
</div>	<!-- END ABOUT BOX #1 -->	


<!-- ABOUT BOX #2 -->		
<div class="col-md-4">
<div class="abox-1 icon-xs">

<!-- Icon --> 
<span class="flaticon-028-learning-1"></span>

<!-- Text -->
<div class="abox-1-txt">
<h5 class="h5-md">Expert instruction</h5>
<p class="p-md">Get professional guidance on how to set projects up with little or no difficulties even if you have Zero knowledge about it before.</p>
</div>

</div>
</div>	<!-- END ABOUT BOX #2 -->	


<!-- ABOUT BOX #3 -->		
<div class="col-md-4">
<div class="abox-1 icon-xs">

<!-- Icon --> 
<span class="flaticon-032-tablet"></span>

<!-- Text -->
<div class="abox-1-txt">
<h5 class="h5-md">Ease of Communication</h5>
<p class="p-md">Student who finds it difficult can contact us through our contact page</p>
</div>

</div>
</div>	<!-- END ABOUT BOX #3 -->	


</div>    <!-- End row --> 	
</div>	   <!-- End container --> 	
</section>	<!-- End ABOUT-1 --> 

<div class="searchProject">
	<form action="#" class="searchForm">
		<input type="text" class="search2gan search" placeholder="Search for any Project Topic?" aria-label="Search">
	</form>
</div>



<!-- COURSES-3
============================================= -->
<section id="courses-3" class="bg-lightgrey wide-60 courses-section division">
<div class="container">


<!-- SECTION TITLE -->	
<div class="row">	
<div class="col-md-12">
<div class="section-title mb-60">

<!-- Title 	-->	
<h3 class="h3-sm">Most Purchased Computer Science Projects</h3>	

<!-- Text -->	
<p class="p-md">Our projects are designed for students, engineers & business agents and  trade professionals in international trade.</p>

<!-- Button -->	
<div class="title-btn">
<a href="subprojects/computerscience.php" class="btn btn-tra-grey rose-hover">View All Projects</a>
</div>

</div>	
</div>
</div>


<!-- COURSES HOLDER -->
<div class="row courses-grid">


<!-- COURSE #1 -->
<div class="col-md-6 col-lg-4 col-xl-3">
<div class="cbox-1">


<a href="course-details.html">

<!-- Image -->
<img class="img-fluid" src="images/courses/gppics.jpg" alt="course-preview" />

<!-- Text -->
<div class="cbox-4-txt">	

<!-- Course Tags -->
<p class="course-tags">
<span>2 months</span>
<span>60 hours</span>
</p>


<!-- Course Title -->
<h5 class="h5-xs">Design and Implementation of GP/CGPA in Nigeria</h5>

<!-- Course Rating -->
<div class="course-rating clearfix">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
<span>4.5 (26 Ratings)</span>
</div>

<!-- Course Price -->
<span class="course-price"><span class="old-price">N20,000</span> N15,000</span>

</div>

</a>
</div>
</div>	<!-- END COURSE #1 -->	


<!-- COURSE #2 -->
<div class="col-md-6 col-lg-4 col-xl-3">
<div class="cbox-1">
<a href="course-details.html">

<!-- Image -->
<img class="img-fluid" src="images/courses/gppics.jpg" alt="course-preview" />

<!-- Text -->
<div class="cbox-4-txt">	

<!-- Course Tags -->
<p class="course-tags">
<span>3 months</span>
<span>60 hours</span>
</p>

<!-- Title -->
<h5 class="h5-xs">Design and Implementation of GP/CGPA in Nigeria</h5>

<!-- Course Rating -->
<div class="course-rating clearfix">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<span>5 (118 Ratings)</span>
</div>

<!-- Course Price -->
<span class="course-price"><span class="old-price">N25,000</span> N17,500</span>

</div>

</a>
</div>
</div>	<!-- END COURSE #2 -->							


<!-- COURSE #3 -->
<div class="col-md-6 col-lg-4 col-xl-3">
<div class="cbox-1">
<a href="course-details.html">

<!-- Image -->
<img class="img-fluid" src="images/courses/gppics.jpg" alt="course-preview" />

<!-- Text -->
<div class="cbox-4-txt">

<!-- Course Tags -->
<p class="course-tags">
<span>3 months</span>
<span>60 hours</span>
</p>

<!-- Title -->
<h5 class="h5-xs">Design and Implementation of GP/CGPA in Nigeria</h5>												
<!-- Course Rating -->
<div class="course-rating clearfix">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
<span>4.5 (72 Ratings)</span>
</div>

<!-- Course Price -->
<span class="course-price"><span class="old-price">N18,000</span> N12,000</span>

</div>

</a>
</div>
</div>	<!-- END COURSE #3 -->							


<!-- COURSE #4 -->
<div class="col-md-6 col-lg-4 col-xl-3">
<div class="cbox-1">
<a href="course-details.html">

<!-- Image -->
<img class="img-fluid" src="images/courses/gppics.jpg" alt="course-preview" />

<!-- Text -->
<div class="cbox-4-txt">

<!-- Course Tags -->
<p class="course-tags">
<span>3 months</span>
<span>60 hours</span>
</p>

<!-- Title -->
<h5 class="h5-xs">Design and Implementation of GP/CGPA in Nigeria</h5>

<!-- Course Rating -->
<div class="course-rating clearfix">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<span>5 (281 Ratings)</span>
</div>

<!-- Course Price -->
<span class="course-price">Free Course</span>

</div>

</a>
</div>
</div>	<!-- END COURSE #4 -->								


<!-- COURSE #5 -->
<div class="col-md-6 col-lg-4 col-xl-3">
<div class="cbox-1">
<a href="course-details.html">

<!-- Image -->
<img class="img-fluid" src="images/courses/gppics.jpg" alt="course-preview" />

<!-- Text -->
<div class="cbox-4-txt">

<!-- Course Tags -->
<p class="course-tags">
<span>6 months</span>
<span>2-3 hours</span>
<span>Saturdays</span>
</p>

<!-- Title -->
<h5 class="h5-xs">Design and Implementation of GP/CGPA in Nigeria</h5>

<!-- Course Rating -->
<div class="course-rating clearfix">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<span>4.15 (58 Ratings)</span>
</div>

<!-- Course Price -->
<span class="course-price"><span class="old-price">N30,000</span> N25,500</span>

</div>

</a>
</div>
</div>	<!-- END COURSE #5 -->						


<!-- COURSE #6 -->
<div class="col-md-6 col-lg-4 col-xl-3">
<div class="cbox-1">
<a href="course-details.html">

<!-- Image -->
<img class="img-fluid" src="images/courses/gppics.jpg" alt="course-preview" />

<!-- Text -->
<div class="cbox-4-txt">

<!-- Course Tags -->
<p class="course-tags">
<span>6 months</span>
<span>2-3 hours</span>
<span>Saturdays</span>
</p>

<!-- Title -->
<h5 class="h5-xs">Design and Implementation of GP/CGPA in Nigeria</h5>

<!-- Course Rating -->
<div class="course-rating clearfix">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<span>5 (31 Ratings)</span>
</div>

<!-- Course Price -->
<span class="course-price"><span class="old-price">N10,000</span> N9,000</span>

</div>

</a>
</div>
</div>	<!-- END COURSE #6 -->	


<!-- START COURSE #7-->
<div class="col-md-6 col-lg-4 col-xl-3">
<div class="cbox-1">
<a href="course-details.html">

<!-- Image -->
<img class="img-fluid" src="images/courses/gppics.jpg" alt="course-preview" />

<!-- Text -->
<div class="cbox-4-txt">

<!-- Course Tags -->
<p class="course-tags">
<span>6 months</span>
<span>2-3 hours</span>
<span>Saturdays</span>
</p>

<!-- Title -->
<h5 class="h5-xs">Design and Implementation of GP/CGPA in Nigeria</h5>

<!-- Course Rating -->
<div class="course-rating clearfix">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<span>4.15 (58 Ratings)</span>
</div>

<!-- Course Price -->
<span class="course-price"><span class="old-price">N30,000</span> N25,500</span>

</div>

</a>
</div>
</div>						

<!-- END COURSE #7-->

<!-- COURSE #5 -->
<div class="col-md-6 col-lg-4 col-xl-3">
<div class="cbox-1">
<a href="course-details.html">

<!-- Image -->
<img class="img-fluid" src="images/courses/gppics.jpg" alt="course-preview" />

<!-- Text -->
<div class="cbox-4-txt">

<!-- Course Tags -->
<p class="course-tags">
<span>6 months</span>
<span>2-3 hours</span>
<span>Saturdays</span>
</p>

<!-- Title -->
<h5 class="h5-xs">Design and Implementation of GP/CGPA in Nigeria</h5>

<!-- Course Rating -->
<div class="course-rating clearfix">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<span>4.15 (58 Ratings)</span>
</div>

<!-- Course Price -->
<span class="course-price"><span class="old-price">N30,000</span> N25,500</span>

</div>

</a>
</div>
</div>	<!-- END COURSE #5 -->						



</div>	  <!-- END COURSES HOLDER -->
</div>     <!-- End container -->
</section>	<!-- END COURSES-3 -->

<!-- ABOUT-3
============================================= -->
<section id="about-3" class="pt-100 about-section division">
<div class="container">
<div class="row d-flex align-items-center">


</div>    <!-- End row --> 	
</div>	   <!-- End container --> 	
</section>	<!-- End ABOUT-3 --> 




<!-- TESTIMONIALS-3
============================================= -->
<section id="reviews-3" class="bg-01 reviews-section division">
<div class="container">
<div class="row">
<div class="col-md-12">


<!-- TESTIMONIAL TEXT -->
<div class="review-3">

<!-- Quote Icon -->
<div class="quote-ico"><img src="images/left-quote.png" alt="quote-image" /></div>

<!-- Testimonial Text -->
<p>I recommend Antumn Softwares for those that want to create  various kinds of Projects with different programming Language easily with little or no stress as our objective is to reduce the waste of time and money.</p>		

<!-- Testimonial Author -->
<div class="review-3-author">

<!-- Rating -->
<div class="tst-rating clearfix">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>	

<h5 class="h5-md">Aliu Adedigba</h5>	
<span>CEO Antumn Software</span>
</div>	

</div>	<!-- END TESTIMONIAL TEXT -->	


</div>
</div>	   <!-- End row -->
</div>	    <!-- End container -->
</section>	 <!-- END TESTIMONIALS-3 -->


<!-- VIDEO-3
============================================= -->	
<section id="video-3" class="bg-scroll video-section division">

<!-- VIDEO-3 BRANDS -->
<div class="video-3-brands division">
<div class="container">	
<div class="row">
<div class="col text-center">	

<!-- Title -->
<p class="p-md">Student Reviews:</p>

<!-- Brands Carousel -->
<div class="owl-carousel brands-carousel">
									
<!-- BRAND LOGO IMAGE -->
<div class="brand-logo">
<img class="img-fluid first" src="images/1.jpg" alt="brand-logo" />
<div class="text-fluid">
<p class="student-name">"I love Antumn, my software is very easy for me that I didn't recieve any complaint from my stubborn lecturer"</p>
<div class="student-review">Abdulhammed Fu'ad</div>
<p class="user-occupation">Student</p>
</div>
</div>
			
<!-- BRAND LOGO IMAGE -->
<div class="brand-logo">
<img class="img-fluid" src="images/2.jpg" alt="brand-logo" />
<div class="text-fluid">
<p class="student-name">"I love Antumn, my software is very easy for me that I didn't recieve any complaint from my stubborn lecturer"</p>
<div class="student-review">Abdulhammed Fu'ad</div>
<p class="user-occupation">Student</p>
</div>
</div>
			
<!-- BRAND LOGO IMAGE -->
<div class="brand-logo">
<img class="img-fluid" src="images/brand-3.png" alt="brand-logo" />
<div class="text-fluid">
<p class="student-name">"I love Antumn, my software is very easy for me that I didn't recieve any complaint from my stubborn lecturer"</p>
<div class="student-review">Abdulhammed Fu'ad</div>
<p class="user-occupation">Student</p>
</div>
</div>
			
<!-- BRAND LOGO IMAGE -->
<div class="brand-logo">
<img class="img-fluid" src="images/brand-4.png" alt="brand-logo" />
<div class="text-fluid">
<p class="student-name">"I love Antumn, my software is very easy for me that I didn't recieve any complaint from my stubborn lecturer"</p>
<div class="student-review">Abdulhammed Fu'ad</div>
<p class="user-occupation">Student</p>
</div>
</div>
			
<!-- BRAND LOGO IMAGE -->
<div class="brand-logo">
<img class="img-fluid" src="images/brand-5.png" alt="brand-logo">
<div class="text-fluid">
<p class="student-name">"I love Antumn, my software is very easy for me that I didn't recieve any complaint from my stubborn lecturer"</p>
<div class="student-review">Abdulhammed Fu'ad</div>
<p class="user-occupation">Student</p>
</div>
</div>
			
<!-- BRAND LOGO IMAGE -->
<div class="brand-logo">
<img class="img-fluid" src="images/brand-6.png" alt="brand-logo" />
<div class="text-fluid">
<p class="student-name">"I love Antumn, my software is very easy for me that I didn't recieve any complaint from my stubborn lecturer"</p>
<div class="student-review">Abdulhammed Fu'ad</div>
<p class="user-occupation">Student</p>
</div>
</div>

<!-- BRAND LOGO IMAGE -->
<div class="brand-logo">
<img class="img-fluid" src="images/brand-7.png" alt="brand-logo" />
<div class="text-fluid">
<p class="student-name">"I love Antumn, my software is very easy for me that I didn't recieve any complaint from my stubborn lecturer"</p>
<div class="student-review">Abdulhammed Fu'ad</div>
<p class="user-occupation">Student</p>
</div>
</div>
					
<!-- BRAND LOGO IMAGE -->
<div class="brand-logo">
<img class="img-fluid" src="images/brand-4.png" alt="brand-logo" />
<div class="text-fluid">
<p class="student-name">"I love Antumn, my software is very easy for me that I didn't recieve any complaint from my stubborn lecturer"</p>
<div class="student-review">Abdulhammed Fu'ad</div>
<p class="user-occupation">Student</p>
</div>
</div>

<!-- BRAND LOGO IMAGE -->
<div class="brand-logo">
<img class="img-fluid" src="images/brand-5.png" alt="brand-logo" />
<div class="text-fluid">
<p class="student-name">"I love Antumn, my software is very easy for me that I didn't recieve any complaint from my stubborn lecturer"</p>
<div class="student-review">Abdulhammed Fu'ad</div>
<p class="user-occupation">Student</p>
</div>
</div>

</div><!-- Brands Carousel -->

</div>  <!-- End col -->
</div>  <!-- End row -->
</div>  <!-- End container -->
</div>	<!-- END VIDEO-3 BRANDS -->


</section>	<!-- END VIDEO-3 -->


<!-- FOOTER-2
============================================= -->
<footer id="footer-2" class="footer division bg-whitesmoke">
<div class="container ">


<!-- FOOTER CONTENT -->
<div class="row">


<!-- FOOTER INFO -->
<div class="col-md-5 col-lg-5 col-xl-4">
<div class="footer-info mb-40">

<!-- Footer Logo -->
<!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 344 x 80 pixels) -->
<img src="images/logo.png" width="172" height="40" alt="footer-logo">

<!-- Text -->	
<p>Block D10, Unity Hall of residence. The Polytechnic, Ibadan<br>
Alh Adebisi street, opp Amao Estate,<br>Orogun Ibadan.
<br>info@antumsoft.com
<br> +234 816 7381 819<br>+234 813 9149 971<br>+234 904 8576 588
</p>

</div>	
</div>	


<!-- FOOTER PRODUCTS LINKS -->
<div class="col-md-3 col-lg-3 col-xl-2">
<div class="footer-links mb-40">

<!-- Title -->
<h5 class="h5-md">Quick Links</h5>

<!-- Footer Links -->
<ul class="foo-links clearfix">
<li><a href="about.html">Courses Catalog</a></li>
<li><a href="categories-list.html">Upcoming Events</a></li>
<li><a href="pricing.html">Our Blog</a></li>
<li><a href="blog-listing.html">Our Store</a></li>								
</ul>

</div>
</div>


<!-- FOOTER COMPANY LINKS -->
<div class="col-md-4 col-lg-4 col-xl-3">
<div class="footer-links mb-40">

<!-- Title -->
<h5 class="h5-md">Quick Links</h5>

<!-- Footer Links -->
<ul class="clearfix">
<li><a href="#">FAQ</a></li>
<li><a href="#">Contact</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Other Services</a></li>
</ul>

</div>
</div>


<!-- FOOTER NEWSLETTER FORM -->
<div class="col-md-7 col-xl-3">
<div class="footer-form mb-20">

<!-- Title -->
<h5 class="h5-md">Stay in Touch</h5>

<!-- Newsletter Form Input -->
<form class="newsletter-form">

<div class="input-group">
<input type="email" autocomplete="off" class="form-control" placeholder="Your Email Address" required id="s-email">								
<span class="input-group-btn">
<button type="submit" class="btn btn-rose black-hover">Subscribe</button> 
</span>
</div>

<!-- Newsletter Form Notification -->		
<label for="s-email" class="form-notification"></label>
	
</form>
			
</div>
</div>	<!-- END FOOTER NEWSLETTER FORM -->


</div>	  <!-- END FOOTER CONTENT -->


<!-- BOTTOM FOOTER -->
<div class="bottom-footer">
<div class="row">


<!-- FOOTER COPYRIGHT -->
<div class="col-lg-8">
<ul class="bottom-footer-list">
<li><p>&copy; Copyright Antum Software 2021</p></li>
<li><p><a href="tel:+2348091244449

">+234 816 7381 819 +234 813 9149 971 +234 904 8576 588									</a></p></li>
<li><p class="last-li"><a href="mailto:info@antumsoft.com
">info@antumsoft.com
</a></p></li>
</ul>
</div>


<!-- FOOTER SOCIALS LINKS -->
<div class="col-lg-4 text-right">
<ul class="foo-socials text-center clearfix">

<li><a href="#" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#" class="ico-twitter"><i class="fab fa-twitter"></i></a></li>	
<li><a href="#" class="ico-google-plus"><i class="fab fa-google-plus-g"></i></a></li>
<li><a href="#" class="ico-tumblr"><i class="fab fa-tumblr"></i></a></li>			
																								
<!--
<li><a href="#" class="ico-behance"><i class="fab fa-behance"></i></a></li>	
<li><a href="#" class="ico-dribbble"><i class="fab fa-dribbble"></i></a></li>									
<li><a href="#" class="ico-instagram"><i class="fab fa-instagram"></i></a></li>	
<li><a href="#" class="ico-linkedin"><i class="fab fa-linkedin-in"></i></a></li>
<li><a href="#" class="ico-pinterest"><i class="fab fa-pinterest-p"></i></a></li>								
<li><a href="#" class="ico-youtube"><i class="fab fa-youtube"></i></a></li>										
<li><a href="#" class="ico-vk"><i class="fab fa-vk"></i></a></li>
<li><a href="#" class="ico-yelp"><i class="fab fa-yelp"></i></a></li>
<li><a href="#" class="ico-yahoo"><i class="fab fa-yahoo"></i></a></li>
-->	

</ul>
</div>


</div>
</div>	<!-- END BOTTOM FOOTER -->


</div>	   <!-- End container -->										
</footer>	<!-- END FOOTER-2 -->




</div>	<!-- END PAGE CONTENT -->




<!-- EXTERNAL SCRIPTS
============================================= -->	
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>	
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.easing.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/menu.js"></script>
<script src="js/materialize.js"></script>	
<script src="js/jquery.scrollto.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>	
<script src="js/register-form.js"></script>	
<script src="js/comment-form.js"></script>	
<script src="js/jquery.validate.min.js"></script>	
<script src="js/jquery.ajaxchimp.min.js"></script>	

<!-- Custom Script -->		
<script src="js/custom.js"></script>

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!-- [if lt IE 9]>
<script src="js/html5shiv.js" type="text/javascript"></script>
<script src="js/respond.min.js" type="text/javascript"></script>
<![endif] -->

<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->	
<!--
<script>
window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
ga('create', 'UA-XXXXX-Y', 'auto');
ga('send', 'pageview');
</script>
<script async src='https://www.google-analytics.com/analytics.js'></script>
-->
<!-- End Google Analytics -->



</body>




<!-- Mirrored from jthemes.net/themes/html/etreeks/files/demo-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Jan 2021 04:05:21 GMT -->
</html>	
