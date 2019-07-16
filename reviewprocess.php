<?php
	include('collegedbinc.php'); 
	$mysqli = new mysqli('localhost', 'root', '', 'college') or die(mysqli_error($mysqli));
	
	$college_id=0;
	$review_name='';
	$review_email='';
	$review_id=0;
	$review_text='';
	$review_rating=0;	
	
	if (isset($_POST['save'])){
		$college_id = $_POST['college_id'];
		$review_name = mysqli_real_escape_string($conn,$_POST['review_name']);
		$review_email = mysqli_real_escape_string($conn,$_POST['review_email']);
		$review_id = $_POST['review_id'];
		$review_title = mysqli_real_escape_string($conn,$_POST['review_title']);
		$review_text = mysqli_real_escape_string($conn,$_POST['review_text']);
		$review_rating = $_POST['review_rating'];
		
		$mysqli->query("INSERT INTO reviews (college_id, review_name, review_email, review_id, review_text, review_rating, review_title) VALUES('$college_id', '$review_name', '$review_email', '$review_id', '$review_text', '$review_rating', '$review_title')")or die($mysqli->error);
		
		header('location: reviewall.php');
	}
?>
