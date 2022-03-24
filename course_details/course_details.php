<?php 
	include '../subprojects/header.php';

	if(isset($_GET['course_details.php'])){
        if(!empty($_GET['course_details.php'])){
            $id = $_GET['course_details.php'];

            $new_course = $getFromP->get_single('comprojects', $id);
			//$projects =  $getFromP->getCompCourse();

        }
    }
?>

<!-- INNER PAGE WRAPPER
============================================= -->	
<div class="inner-page-wrapper">
<!-- BREADCRUMB
============================================= -->
<div id="breadcrumb" class="division">
	<div class="container">
	<div class="row">

	<!-- BREADCRUMB NAV -->
	<div class="col-md-12">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="../index.php">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="http://localhost/stuprojects/subprojects/computerscience.php">Computer Science Projects</a></li>
				<li class="breadcrumb-item active" aria-current="page">Design and Implementation of GP/CGPA Calculator</li>
			</ol>
		</nav>
	</div> 

	</div>	 <!-- End row -->
	</div>	<!-- End container -->		
	</div>	<!-- END BREADCRUMB -->	
</div>

<div class="content mx-5">
	<h3 class="dept_detail">Computer Science Project Topics and Materials</h3>
	<h4 class="dept_details"><?=@$new_course->project_topic;?></h4>
	<p>Department: <span class="dept">Computer Science</span></p>
	<div class="content-body">
		<h5 class="chap-name">Chapter One (1)&nbsp;Design and Implementation of GP/CGPA Calculator</h5>
		<hr>
		<div class="text-body">
		<div class="inner-header">
			<h6>1.0&nbsp;INTRODUCTION</h6>
			<h6>Background of the Study</h6>
			<p>Chapter One of Design and Implementation of GP/CGPA Calculator Materials</p>
		</div>
			<p>The Abstract of this project topic is now THE CALCULATION OF CGPA System has eased the general public who wish to calculate their resultys in. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint facere laudantium cupiditate perspiciatis sapiente impedit aliquam possimus consectetur quaerat quos, excepturi eos similique facilis quas est ipsum nulla iste voluptas!</p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint facere laudantium cupiditate perspiciatis sapiente impedit aliquam possimus consectetur quaerat quos, excepturi eos similique facilis quas est ipsum nulla iste voluptas!. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint facere laudantium cupiditate perspiciatis sapiente impedit aliquam possimus consectetur quaerat quos, excepturi eos similique facilis quas est ipsum nulla iste voluptas!</p>
		</div>
		<div class="text-body">
		<h6>1.1&nbsp;STATEMENT OF THE PROBLEM</h6>
		<P>Owing to:</P>
			<ol type="i">
				<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint facere laudantium cupiditate perspiciatis sapiente impedit aliquam possimus consectetur quaerat quos, excepturi eos similique facilis quas est ipsum nulla iste voluptas!</li>
				<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint facere laudantium cupiditate perspiciatis sapiente impedit aliquam possimus consectetur quaerat quos, excepturi eos similique facilis quas est ipsum nulla iste voluptas!</li>
				<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint facere laudantium cupiditate perspiciatis sapiente impedit aliquam possimus consectetur quaerat quos, excepturi eos similique facilis quas est ipsum nulla iste voluptas!</li>
				<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint facere laudantium cupiditate perspiciatis sapiente impedit aliquam possimus consectetur quaerat quos, excepturi eos similique facilis quas est ipsum nulla iste voluptas!</li>
				<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint facere laudantium cupiditate perspiciatis sapiente impedit aliquam possimus consectetur quaerat quos, excepturi eos similique facilis quas est ipsum nulla iste voluptas!</li>
			</ol>
		</div>
		<div class="text-body">
			<h6>1.2&nbsp;PURPOSE OF STUDY</h6>
			<p>The Abstract of this project topic is now THE CALCULATION OF CGPA System has eased the general public who wish to calculate their resultys in. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint facere laudantium cupiditate perspiciatis sapiente impedit aliquam possimus consectetur quaerat quos, excepturi eos similique facilis quas est ipsum nulla iste voluptas!</p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint facere laudantium cupiditate perspiciatis sapiente impedit aliquam possimus consectetur quaerat quos, excepturi eos similique facilis quas est ipsum nulla iste voluptas!.</p>
		</div>
		<div class="text-body">
			<h6>1.3&nbsp;SIGNIFICANCE OF STUDY</h6>
			<p>The Abstract of this project topic is now THE CALCULATION OF CGPA System has eased the general public who wish to calculate their resultys in. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint facere laudantium cupiditate perspiciatis sapiente impedit aliquam possimus consectetur quaerat quos, excepturi eos similique facilis quas est ipsum nulla iste voluptas!</p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint facere laudantium cupiditate perspiciatis sapiente impedit aliquam possimus consectetur quaerat quos, excepturi eos similique facilis quas est ipsum nulla iste voluptas!.</p>
		</div>
		<div class="text-body">
			<h6>1.4&nbsp;AIMS AND OBJECTIVES</h6>
			<p>The Abstract of this project topic is now THE CALCULATION OF CGPA System has eased the general public who wish to calculate their resultys in. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint facere laudantium cupiditate perspiciatis sapiente impedit aliquam possimus consectetur quaerat quos, excepturi eos similique facilis quas est ipsum nulla iste voluptas!</p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint facere laudantium cupiditate perspiciatis sapiente impedit aliquam possimus consectetur quaerat quos, excepturi eos similique facilis quas est ipsum nulla iste voluptas!.</p>
		</div>
		<div class="text-body">
			<h6>1.5&nbsp;SCOPE OF STUDY</h6>
			<p>The Abstract of this project topic is now THE CALCULATION OF CGPA System has eased the general public who wish to calculate their resultys in. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint facere laudantium cupiditate perspiciatis sapiente impedit aliquam possimus consectetur quaerat quos, excepturi eos similique facilis quas est ipsum nulla iste voluptas!</p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint facere laudantium cupiditate perspiciatis sapiente impedit aliquam possimus consectetur quaerat quos, excepturi eos similique facilis quas est ipsum nulla iste voluptas!.</p>
		</div>
		<div class="text-body">
			<h6>1.6&nbsp;LIMITATION OF STUDY</h6>
			<p>The Abstract of this project topic is now THE CALCULATION OF CGPA System has eased the general public who wish to calculate their resultys in. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint facere laudantium cupiditate perspiciatis sapiente impedit aliquam possimus consectetur quaerat quos, excepturi eos similique facilis quas est ipsum nulla iste voluptas!</p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint facere laudantium cupiditate perspiciatis sapiente impedit aliquam possimus consectetur quaerat quos, excepturi eos similique facilis quas est ipsum nulla iste voluptas!.</p>
		</div>
		<div class="text-body">
			<h6>1.7&nbsp;DEFINITION OF TERMS</h6>
			<p>The Abstract of this project topic is now THE CALCULATION OF CGPA System has eased the general public who wish to calculate their resultys in. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint facere laudantium cupiditate perspiciatis sapiente impedit aliquam possimus consectetur quaerat quos, excepturi eos similique facilis quas est ipsum nulla iste voluptas!</p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint facere laudantium cupiditate perspiciatis sapiente impedit aliquam possimus consectetur quaerat quos, excepturi eos similique facilis quas est ipsum nulla iste voluptas!.</p>
		</div>
	</div>
	<div class="submit my-5">
		<button type="submit" name="addCourse" class="btn btn-md btn-rose tra-black-hover submit">Make Payment and Download Full Writeup</button>&nbsp;&nbsp;&nbsp;
		<button type="submit" name="addCourse" class="btn btn-md btn-rose tra-black-hover submit">Make Payment and Download Complete Software</button>
    </div>
</div>

</div>    <!-- End row -->
</div>	   <!-- End container -->
</section>	<!-- END BANNER-2 -->

<?php 
	include '../subprojects/footer.php';
?>
