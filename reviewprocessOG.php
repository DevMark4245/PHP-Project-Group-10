<?php
print_r(error_get_last());
	include('collegedbinc.php'); 
	$mysqli = new mysqli('localhost', 'root', '', 'college') or die(mysqli_error($mysqli));
	print_r(error_get_last());
	$college_id=0;
	$review_name='';
	$review_email='';
	$review_text='';
	$review_rating=0;	
	print_r(error_get_last());
	
	if (isset($_POST['update'])){
		
		$college_id = mysqli_real_escape_string($conn,$_POST['college_id']);
		$review_name = mysqli_real_escape_string($conn,$_POST['review_name']);
		$review_email = mysqli_real_escape_string($conn,$_POST['review_email']);
		$review_text = mysqli_real_escape_string($conn,$_POST['review_text']);
		$review_rating = mysqli_real_escape_string($conn,$_POST['review_rating']);
		
		$mysqli->query("INSERT INTO reviews (college_id, review_name, review_email, review_text, review_rating) VALUES('$college_id', '$review_name', '$review_email', '$review_text', '$review_rating')")or die($mysqli->error);
		
		header("location: admin.php");
		
	}	
?>