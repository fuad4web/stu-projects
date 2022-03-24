<?php 

	if($getFromP->checkStatProject($projectTopic) === true) {
		echo '<script>alert("Project Topic Existing");</script>';
		header('Location: new_course.php?projectExisting');
	} elseif($getFromP->checkStatProject($projectTopic) === false) {
		$id = $getFromP->create('mathandstat', array('project_topic' => $projectTopic, 'discount' => $strikePrice, 'price' => $actualPrice));
		if(isset($_FILES['course_image'])) {
			if(!empty($_FILES['course_image']['name'][0])) {
				$fileRoot = $getFromP->uploadImage($_FILES['course_image']);
				$getFromP->update('mathandstat', $id, array('course_img' => $fileRoot));
			}
			if(isset($_FILES['course_document'])) {
				if(!empty($_FILES['course_document']['name'][0])) {
					$fileDocu = $getFromP->uploadDocument($_FILES['course_document']);
					$getFromP->update('mathandstat', $id, array('documents' => $fileDocu));
					header('Location: new_course.php?successful');
				}
			} else {
				header('Location: new_course.php?documentError');
			}
		} else {
			header('Location: new_course.php?imageError');
		}
	} else {
		header('Location: new_course.php?unsuccessful');
	}
?>
