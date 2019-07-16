<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/form1.css">
	<link rel="stylesheet" type="text/css" href="assets/css/form2.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			
				<span class="contact100-form-title">
					College Details
				</span>
				
				<?php require_once 'process.php';?>
				<form action="process.php" method="POST">

				<input type="hidden" name="college_id" value="<?php echo $college_id; ?>">
				
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
					<span class="label-input100">College Name</span>
					<input class="input100" type="text" name="college_name" value="<?php echo $college_name; ?>" placeholder="Enter College Name ">
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">College Courses</span>
					<input class="input100" type="text" name="college_courses" value="<?php echo $college_courses; ?>" placeholder="Enter College Courses">
				</div>
				
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">College Type</span>
					<input class="input100" type="text" name="college_type" value="<?php echo $college_type; ?>" placeholder="Enter College Type">
				</div>
				
				<div class="wrap-input100 validate-input bg1">
					<span class="label-input100">College's Image Link</span>
					<input class="input100" type="text" name="college_image" value="<?php echo $college_image; ?>" placeholder="Enter College's Image Link">
				</div>

				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" >
					<span class="label-input100">College Description</span>
					<textarea class="input100" name="college_desc" placeholder="Enter College Description"><?php echo $college_desc; ?></textarea>
				</div>
				
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" >
					<span class="label-input100">College Info</span>
					<textarea class="input100" name="college_info" placeholder="Enter College Info"><?php echo $college_info; ?></textarea>
				</div>

				<div class="container-contact100-form-btn">
				<?php if($update == true):?>
					<button type="submit" name="update" class="contact100-form-btn"><span>Update <i class="fa fa-rotate-left m-l-7" aria-hidden="true"></i></span></button>
				<?php else: ?>
					<button type="submit" name="save" class="contact100-form-btn"><span>Save <i class="fa fa-floppy-o m-l-7" aria-hidden="true"></i></span></button>
				<?php endif; ?>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
