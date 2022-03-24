<?php 
	include 'header.php';
	//$id = $_GET['id'];

	//$get_dept =  $getFromS->get_single();
	//if(!empty($id)) {
		// $d = $_GET['dept_id'];
		// $dpt = $getFromP->get_single('dept', $d);
?>


<!-- INNER PAGE WRAPPER
============================================= -->	
<div class="inner-page-wrapper">


<?php 
	// if(!empty($_GET['']))
	// $new_course = $getFromCourse->get_single('courses', $id);
?>

<!-- BREADCRUMB
============================================= -->
	<div id="breadcrumb" class="division">
	<div class="container">
	<div class="row">

	<!-- BREADCRUMB NAV -->
	<div class="col-md-12">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="../index.html">Home</a></li>
				<?php 
					// $d = $_GET['id'];
					// $dpt = $getFromP->get_singles_where('dept', 'dept_id', $d);
				?>
				<li class="breadcrumb-item active" aria-current="page">Computer Science Projects</li>
			</ol>
		</nav>
	</div> 

	</div>	 <!-- End row -->
	</div>	<!-- End container -->		
	</div>	<!-- END BREADCRUMB -->	


<!-- PAGE HERO
============================================= -->	
<section class="bg-05 page-hero-section division">
<div class="container">	
<div class="row">	
<div class="col-md-12">
	<div class="hero-txt white-color">

		<!-- Title -->
		<h3 class="h3-xs"><?=@$dpt->dept_name;?> Projects for Final Year Students</h3>

		<!-- Share Icons -->
		<div class="share-list">
			<ul class="share-social-icons text-center clearfix">
				<li><p><span>Over 300 project topics</span> found, 8.4k visitors</p></li>
			</ul>
		</div>

		<!-- Text -->
		<p><span>9,463 students</span> are purchasing projects easily with <span class="company-name">Antumn Softwares</span></p>

		<label class="searchlabel text-center">Search Project Topic:&nbsp;&nbsp;</label><input type="text" class="search2gan" placeholder="Search for any Project Topic?" aria-label="Search">

	</div>
</div>	<!-- END PAGE HERO TEXT -->
</div>    <!-- End row --> 
</div>	   <!-- End container --> 
</section>	<!-- END PAGE HERO -->	




<!-- COURSES-3
============================================= -->
<section id="courses-3" class="wide-60 courses-section division">
<div class="container">


<!-- SECTION TITLE -->	
<div class="row">	
<div class="col-md-12">
	<div class="section-title mb-40">

		<!-- Title 	-->	
		<h4 class="h4-xl">COMPUTER SCIENCE PROJECTS WITH DOCUMENTATION, SOURCE CODES+APPLICATIONS/SOFTWARE </h4>

		<!-- Text -->	
		<p class="p-md">Below are Computer Science Project Topics with available Chapters 1-5. Click on any to preview its Contents.</p>
	</div>	
</div>
</div>


<!-- COURSES HOLDER -->
<div class="row courses-grid">
<?php
		//$projects = $getFromP->get_singles_where('project', 'dept_id', $id);
		$projects = $getFromP->getAllProjects();

		foreach($projects as $projec):
?>
<!-- COURSE #1 -->
<div class="col-md-6 col-lg-4 col-xl-3">
	<div class="cbox-1">
		<a href="../course_details/course_details.php/?id=<?= $projec->dept_id; ?>">
			
			<!-- Image -->
			<img class="img-fluid" src="<?= $projec->prev_img; ?>" alt="course-preview" />

			<!-- Text -->
			<div class="cbox-1-txt">

				<!-- Course Tags -->
				<p class="course-tags">
					<span>Linda J. Ross</span>
					<span>16 Hours</span>
				</p>	

				<!-- Course Title -->
				<h5 class="h5-xs"><?= $projec->title; ?></h5>

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
				<span class="course-price"><span class="old-price">N<?= $projec->amount; ?></span> N<?= $projec->discount; ?></span>

			</div>

		</a>
	</div>
</div>	<!-- END COURSE #1 -->	

<?php endforeach; ?>



</div>	  <!-- END COURSES HOLDER -->
</div>     <!-- End container -->
</section>	<!-- END COURSES-3 -->



<!-- PAGE PAGINATION
============================================= 
-->
<div class="page-pagination division">
<div class="container">
<div class="row">	
<div class="col-md-12">

	<nav aria-label="Page navigation">
		<ul class="pagination justify-content-center">
			<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
			<li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
			<li class="page-item"><a class="page-link" href="#">2</a> </li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item"><a class="page-link" href="#">4</a></li>
			<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
		</ul>	
	</nav>					

</div>
</div>
</div>
</div> <!--	END PAGE PAGINATION -->




<!-- BANNER-3
============================================= -->
<section id="banner-3" class="bg-whitesmoke bg-map banner-section division">
<div class="container">
<div class="banner-3-holder bg-lightdark">
<div class="row d-flex align-items-center">



</div>   <!-- End row -->
</div>    <!-- End banner-3-holder -->
</div>	   <!-- End container -->
</section>	<!-- END BANNER-3 -->


<?php 
	include 'footer.php';
?>
