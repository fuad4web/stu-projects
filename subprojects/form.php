<?php 
	include 'header.php';
	$get_dept =  $getFromS->getAllDept();



	//student send mail
	if(isset($_POST['pro_pay'])) {
		$stuName = $_POST['first_name'];
		$stuLast = $_POST['last_name'];
		$sendMailto = $_POST['mail'];
		$stuNumber = $_POST['phone_number'];
		$stuInst = $_POST['institution'];
        $stuDept = $_POST['dept'];
		$sender = "From: zfuad6454@gmail.com";

		if(empty($stuName) || empty($stuLast) || empty($sendMailto) || empty($stuNumber) || empty($stuInst) || empty($stuDept)) {
	?>

			<div class="alert alert-danger alert-center">
				<?php echo "All Input Fields are required"; ?>
			</div>

	<?php
		} else {
			$stuName = $getFromP->checkInput($stuName);
            $stuLast = $getFromP->checkInput($stuLast);
            $sendMailto = $getFromP->checkInput($sendMailto);
            $stuNumber = $getFromP->checkInput($stuNumber);
            $stuInst = $getFromP->checkInput($stuInst);
            $stuDept = $getFromP->checkInput($stuDept);

			if(mail($stuName, $stuLast, $sendMailto, $stuNumber, $stuInst, $stuDept, $sender)) {
				// if(sendmail($to, $subject, $body)) {

				// }
	?>

			<div class="alert alert-success alert-center">
				<?php echo "Information filled Sent to $sendMailto Successfully"; ?>
			</div>

	<?php
			}
		}
	}
?>



<!-- BANNER-2
============================================= -->
<section id="banner-2" class="bg-01 wide-60 banner-section">
<div class="container">
<div class="row d-flex align-items-center">


<!-- BANNER TEXT -->
<div class="col-md-7">
	<div class="banner-2-txt white-color">

		<!-- Title -->	
		<h3 class="h3-lg">Pay now and get <span>your complete Project</span>. You have nothing to lose when you do business with us.</h3>

		<!-- COUNTDOWN ELEMENT -->
		<div class="countdown"><span class="countdown-txt">Ends in</span> <div id="clock"></div></div>

	</div>
</div>


<!-- REGISTER FORM -->
<div class="col-md-5">
	<div id="register-form">

		<!--<form class="row register-form" action="course_validate/stu_validate.php" method="POST">-->
		<form class="row admin-edit" name="studentMail" id="admin-edit" action="course_validate/stu_validate.php" enctype="multipart/form-data" method="POST">
		<!--<form class="row admin-edit" name="studentMail" id="admin-edit" action="" enctype="multipart/form-data" method="POST">-->

			<!-- Form Input -->
			<div id="input-name" class="col-md-12">
				<h6><label for="First Name">First Name*</label></h6>
                <input type="text" name="first_name" class="form-control" id="firstName" placeholder="First Name" required>
			</div>
				
			<!-- Form Input -->       
			<div id="input-email force" class="col-md-12 force">
				<h6><label for="Last Name">Last Name*</label></h6>
				<input type="text" name="last_name" class="form-control" id="lastName" placeholder="Last Name" required>
			</div>

			<!-- Form Input -->       
			<div id="input-email force" class="col-md-12 force">
				<h6><label for="E-mail">E-mail*</label></h6>
				<input type="text" name="email" class="form-control" id="email" placeholder="E-mail" required>
			</div>

			<!-- Form Input -->
			<div id="input-phone force" class="col-md-12 force">
				<h6><label for="Phone Number">Phone Number*</label></h6>
				<input type="text" name="phone_number" class="form-control" id="phoneNumber" placeholder="Phone Number" required> 
			</div>	

			<!-- Form Input -->       
			<div id="input-inst force" class="col-md-12 force">
				<h6><label for="Institution">Institution*</label></h6>
				<select id="custom-select" name="institution" class="form-control custom-select deptCourse" required>
					<option value=""></option>
					<option value="Abia State University">Abia State University</option>
					<option value="Abubakar Tafawwa Balewa University">Abubakar Tafawwa Balewa University</option>
					<option value="Achievers University, Owo">Achievers University, Owo</option>
					<option value="Adamawa State University">Adamawa State University</option>
					<option value="Adekunle Ajasin University">Adekunle Ajasin University</option>
					<option value="Adeleke University">Adeleke University</option>
					<option value="Admiralty University of Nigeria">Admiralty University of Nigeria</option>
					<option value="Afe Babalola University">Afe Babalola University</option>
					<option value="African University of Science and Technology">African University of Science and Technology</option>
					<option value="Ahmadu Bello University">Ahmadu Bello University</option>
					<option value="Ajayi Crowther University">Ajayi Crowther University</option>
					<option value="Akwa-Ibom University">Akwa-Ibom University</option>
					<option value="Alex Ekwueme Federal University, Ndufu-Alike">Alex Ekwueme Federal University, Ndufu-Alike</option>
					<option value="Al-Hikmah University">Al-Hikmah University</option>
					<option value="Al-Qalam University">Al-Qalam University</option>
					<option value="Ambrose Alli University">Ambrose Alli University</option>
					<option value="American University of Nigeria">American University of Nigeria</option>
					<option value="Anchor University, Lagos">Anchor University, Lagos</option>
					<option value="Arthur Jarvis University">Arthur Jarvis University</option>
					<option value="Atiba University">Atiba University</option>
					<option value="Augustine University">Augustine University</option>
					<option value="Babcock University">Babcock University</option>
					<option value="Bauchi State University">Bauchi State University</option>
					<option value="Bayero University, Kano">Bayero University, Kano</option>
					<option value="Baze University">Baze University</option>
					<option value="Bells University of Technology">Bells University of Technology</option>
					<option value="Benson Idhosa University">Benson Idhosa University</option>
					<option value="Benue State University">Benue State University</option>
					<option value="Bingham University">Bingham University</option>
					<option value="Borno State University of Nigeria">Borno State University of Nigeria</option>
					<option value="Bowen University">Bowen University</option>
					<option value="Caleb University">Caleb University</option>
					<option value="Caritas University">Caritas University</option>
					<option value="Chrisland University">Chrisland University</option>
					<option value="Christopher University">Christopher University</option>
					<option value="Chukwuemeka Odumegwu Ojukwu University">Chukwuemeka Odumegwu Ojukwu University</option>
					<option value="Clifford University">Clifford University</option>
					<option value="Coal City University">Coal City University</option>
					<option value="Covenant University">Covenant University</option>
					<option value="Crawford University">Crawford University</option>
					<option value="Crescent University, Abeokuta">Crescent University, Abeokuta</option>
					<option value="Cross River University of Technology">Cross River University of Technology</option>
					<option value="Crown Hill University">Crown Hill University</option>
					<option value="Delta State University, Abraka">Delta State University, Abraka</option>
					<option value="Dominican University, Ibadan">Dominican University, Ibadan</option>
					<option value="Eastern Palm University">Eastern Palm University</option>
					<option value="Ebonyi State University">Ebonyi State University</option>
					<option value="Edo University">Edo University</option>
					<option value="Edwin Clark University">Edwin Clark University</option>
					<option value="Ekiti State University, Ado-Ekiti">Ekiti State University, Ado-Ekiti</option>
					<option value="Eko University of Medical and Health Sciences">Eko University of Medical and Health Sciences</option>
					<option value="Elizade University">Elizade University</option>
					<option value="Enugu State University of Science and Technology">Enugu State University of Science and Technology</option>
					<option value="Evangel University, Akaeze">Evangel University, Akaeze</option>
					<option value="Federal University of Agriculture, Abeokuta">Federal University of Agriculture, Abeokuta</option>
					<option value="Federal University of Petroleum Resources">Federal University of Petroleum Resources</option>
					<option value="Federal University of Technology, Akure">Federal University of Technology, Akure</option>
					<option value="Federal University of Technology, Minna">Federal University of Technology, Minna</option>
					<option value="Federal University of Technology, Owerri">Federal University of Technology, Owerri</option>
					<option value="Federal University, Birnin Kebbi">Federal University, Birnin Kebbi</option>
					<option value="Federal University, Duse">Federal University, Duse</option>
					<option value="Federal University, Dutsin-Ma">Federal University, Dutsin-Ma</option>
					<option value="Federal University, Gashua">Federal University, Gashua</option>
					<option value="Federal University, Kashere">Federal University, Kashere</option>
					<option value="Federal University, Lafia">Federal University, Lafia</option>
					<option value="Federal University, Lokoja">Federal University, Lokoja</option>
					<option value="Federal University, Otuoke">Federal University, Otuoke</option>
					<option value="Federal University, Oye-Ekiti">Federal University, Oye-Ekiti</option>
					<option value="Federal University, Wukari">Federal University, Wukari</option>
					<option value="Fountain University, Osogbo">Fountain University, Osogbo</option>
					<option value="Glorious Vision University">Glorious Vision University</option>
					<option value="Godfrey Okoye University">Godfrey Okoye University</option>
					<option value="Gombe State University">Gombe State University</option>
					<option value="Gombe State University of Science & Technology">Gombe State University of Science & Technology</option>
					<option value="Gregory University">Gregory University</option>
					<option value="Hallmark University, Ijebu-Itele">Hallmark University, Ijebu-Itele</option>
					<option value="Hezekiah University">Hezekiah University</option>
					<option value="Ibrahim Badamasi Babangida University">Ibrahim Badamasi Babangida University</option>
					<option value="Igbinedion University Okada">Igbinedion University Okada</option>
					<option value="Ignatius Ajuru University of Education">Ignatius Ajuru University of Education</option>
					<option value="Imo State University">Imo State University</option>
					<option value="Joseph Ayo Babalola University">Joseph Ayo Babalola University</option>
					<option value="Kaduna State University">Kaduna State University</option>
					<option value="Kano University of Science & Technology">Kano University of Science & Technology</option>
					<option value="Kebbi State University of Science & Technology">Kebbi State University of Science & Technology</option>
					<option value="Kings University">Kings University</option>
					<option value="Kogi State University">Kogi State University</option>
					<option value="Kola Daisi University">Kola Daisi University</option>
					<option value="Kwara State University">Kwara State University</option>
					<option value="Kwararafa University, Wukari">Kwararafa University, Wukari</option>
					<option value="Ladoke Akintola University of Technology">Ladoke Akintola University of Technology</option>
					<option value="Lagos State University">Lagos State University</option>
					<option value="Landmark University">Landmark University</option>
					<option value="Lead City University">Lead City University</option>
					<option value="Legacy University, Okija">Legacy University, Okija</option>
					<option value="Madonna University, Okija">Madonna University, Okija</option>
					<option value="McPherson University">McPherson University</option>
					<option value="Micahel & Cecilia Ibru University">Micahel & Cecilia Ibru University</option>
					<option value="Micahel Okpara University of Agriculture">Micahel Okpara University of Agriculture</option>
					<option value="Modibo Adama University of Technology">Modibo Adama University of Technology</option>
					<option value="Moshood Abiola University of Science & Technology, Abeokuta">Moshood Abiola University of Science & Technology, Abeokuta</option>
					<option value="Mountain Top University">Mountain Top University</option>
					<option value="Nasarawa State University">Nasarawa State University</option>
					<option value="Niger Delta University">Niger Delta University</option>
					<option value="Nigeria Maritime University, Okerenkoko">Nigeria Maritime University, Okerenkoko</option>
					<option value="Nile University of Nigeria">Nile University of Nigeria</option>
					<option value="Nnamdi Azikwe University">Nnamdi Azikwe University</option>
					<option value="Novena University">Novena University</option>
					<option value="Obafemi Awolowo University">Obafemi Awolowo University</option>
					<option value="Obong University">Obong University</option>
					<option value="Oduduwa University">Oduduwa University</option>
					<option value="Olabisi Onabanjo University">Olabisi Onabanjo University</option>
					<option value="Ondo State University of Science & Technology">Ondo State University of Science & Technology</option>
					<option value="Osun State University">Osun State University</option>
					<option value="PAMO University of Medical Sciences">PAMO University of Medical Sciences</option>
					<option value="Pan-Atlantic University">Pan-Atlantic University</option>
					<option value="Paul University">Paul University</option>
					<option value="Plateau State University">Plateau State University</option>
					<option value="Precious Cornerstone University">Precious Cornerstone University</option>
					<option value="Redeemer's University">Redeemer's University</option>
					<option value="Rennaisance University">Rennaisance University</option>
					<option value="Rhema University">Rhema University</option>
					<option value="Ritman University">Ritman University</option>
					<option value="Rivers State University">Rivers State University</option>
					<option value="Salem University">Salem University</option>
					<option value="Skyline University, Nigeria">Skyline University, Nigeria</option>
					<option value="Sokoto State University">Sokoto State University</option>
					<option value="Southwestern University, Nigeria">Southwestern University, Nigeria</option>
					<option value="Spirital University, Nneochi">Spirital University, Nneochi</option>
					<option value="Sule Lamido University">Sule Lamido University</option>
					<option value="Summit University Offa">Summit University Offa</option>
					<option value="Tai Solarin University of Education">Tai Solarin University of Education</option>
					<option value="Tansian University">Tansian University</option>
					<option value="Taraba State University">Taraba State University</option>
					<option value="The Technical University">The Technical University</option>
					<option value="Umaru Musa Yar'Adua University">Umaru Musa Yar'Adua University</option>
					<option value="University of Abuja">University of Abuja</option>
					<option value="University of Africa">University of Africa</option>
					<option value="University of Agriculture, Makurdi">University of Agriculture, Makurdi</option>
					<option value="University of Benin">University of Benin</option>
					<option value="UNiversity of Calabar">University of Calabar</option>
					<option value="University of Ibadan">University of Ibadan</option>
					<option value="University of Ilorin">University of Ilorin</option>
					<option value="University of Jos">University of Jos</option>
					<option value="University of Lagos">University of Lagos</option>
					<option value="University of Maiduguri">University of Maiduguri</option>
					<option value="University of Medical Sciences">University of Medical Sciences</option>
					<option value="University of Mkar">University of Mkar</option>
					<option value="University of Nigeria">University of Nigeria</option>
					<option value="University of Port Harcourt">University of Port Harcourt</option>
					<option value="University of Uyo">University of Uyo</option>
					<option value="Usman Danfodio University">Usman Danfodio University</option>
					<option value="Veritas University">Veritas University</option>
					<option value="Wellspring University">Wellspring University</option>
					<option value="Wesley University of Science and Technology">Wesley University of Science and Technology</option>
					<option value="Western Delta University">Western Delta University</option>
					<option value="Yobe State University">Yobe State University</option>
					<option value="Yusuf Maitama Sule University Kano">Yusuf Maitama Sule University Kano</option>
					<option value="Zamfara University">Zamfara University</option>


					
					<option value="Akanu Ibiam Federal Polytechnic, Unwana, Ebonyi-State">Akanu Ibiam Federal Polytechnic, Unwana, Ebonyi-State</option>
					<option value="Auchi Polytechic, Auchi, Edo-State">Auchi Polytechic, Auchi, Edo-State</option>
					<option value="Federal Polytechnic, Ado-Ekiti">Federal Polytechnic, Ado-Ekiti</option>
					<option value="Federal Polytechnic Bali, Taraba-State">Federal Polytechnic Bali, Taraba-State</option>
					<option value="Federal Polytechnic Bauchi, Bauchi-State">Federal Polytechnic Bauchi, Bauchi-State</option>
					<option value="Federal Polytechnic Bida, Niger State">Federal Polytechnic Bida, Niger State</option>
					<option value="Federal Polytechnic Damaturu, Yobe-State">Federal Polytechnic Damaturu, Yobe-State</option>
					<option value="Federal Polytechnic Daura, Katsina-State">Federal Polytechnic Daura, Katsina-State</option>
					<option value="Federal Polytechnic Ede, Osun-State">Federal Polytechnic Ede, Osun-State</option>
					<option value="Federal Polytechnic Ekowe, Bayelsa-State">Federal Polytechnic Ekowe, Bayelsa-State</option>
					<option value="Federal Polytechnic Idah, Kogi-State">Federal Polytechnic Idah, Kogi-State</option>
					<option value="Federal Polytechnic Ilaro, Ogun-State">Federal Polytechnic Ilaro, Ogun-State</option>
					<option value="Federal Polytechnic Ile-Oluji, Ondo-State">Federal Polytechnic Ile-Oluji, Ondo-State</option>
					<option value="Federal Polytechnic Kaura Namoda, Zamfara-State">Federal Polytechnic Kaura Namoda, Zamfara-State</option>
					<option value="Federal Polytechnic Kaltungo, Gombe-State">Federal Polytechnic Kaltungo, Gombe-State</option>
					<option value="Federal Polytechnic Mubi, Adamawa-State">Federal Polytechnic Mubi, Adamawa-State</option>
					<option value="Federal Polytechnic Nassarawa, Nassarawa-State">Federal Polytechnic Nassarawa, Nassarawa-State</option>
					<option value="Federal Polytechnic Nekede, Owerri, Imo-State">Federal Polytechnic Nekede, Owerri, Imo-State</option>
					<option value="Federal Polytechnic Offa, Kwara-State">Federal Polytechnic Offa, Kwara-State</option>
					<option value="Federal Polytechnic Oko, Anambra-State">Federal Polytechnic Oko, Anambra-State</option>

					<option value="University of Agriculture, Makurdi">University of Agriculture, Makurdi</option>
					<option value="University of Benin">University of Benin</option>
					<option value="UNiversity of Calabar">UNiversity of Calabar</option>
					<option value="University of Ibadan">University of Ibadan</option>
					<option value="University of Ilorin">University of Ilorin</option>
					<option value="University of Jos">University of Jos</option>
					<option value="University of Lagos">University of Lagos</option>
					<option value="University of Maiduguri">University of Maiduguri</option>
					<option value="University of Medical Sciences">University of Medical Sciences</option>
					<option value="University of Mkar">University of Mkar</option>
					<option value="University of Nigeria">University of Nigeria</option>
					<option value="University of Port Harcourt">University of Port Harcourt</option>
					<option value="University of Uyo">University of Uyo</option>
					<option value="Usman Danfodio University">Usman Danfodio University</option>
					<option value="Veritas University">Veritas University</option>
					<option value="Wellspring University">Wellspring University</option>
					<option value="Wesley University of Science and Technology">Wesley University of Science and Technology</option>
					<option value="Western Delta University">Western Delta University</option>
					<option value="Yobe State University">Yobe State University</option>
					<option value="Yusuf Maitama Sule University Kano">Yusuf Maitama Sule University Kano</option>
					<option value="Zamfara University">Zamfara University</option>
				</select>
			</div>

			<!-- Form Input -->       
			<div id="input-email force" class="col-md-12 force">
				<h6><label for="Department">Department*</label></h6>
				<select id="custom-select" name="dept" class="form-control custom-select deptCourse" required>
					<option value=""></option>
					<?php foreach($get_dept as $see_dept): ?>
						<option value="<?=@$see_dept->dept_name;?>"><?=@$see_dept->dept_name;?></option>
					<?php endforeach; ?>
                </select>
			</div>

			<!-- Form Button -->
			<div class="col-md-12 form-btn">  
				<button type="submit" name="pro_pay" class="btn btn-md btn-rose tra-black-hover submit force">Procceed Payment</button>
			</div>
														
			<!-- Form Message -->
			<div class="col-md-12 register-form-msg text-center">
				<span class="loading"></span>
			</div>  
								
			
		</form>
	</div>
</div>	<!-- END REGISTER FORM -->


</div>    <!-- End row -->
</div>	   <!-- End container -->
</section>	<!-- END BANNER-2 -->

<?php 
	include 'footer.php';
?>
