<?php
	
	include_once('collegedbinc.php');
	$mysqli = new mysqli('localhost', 'root', '', 'college') or die(mysqli_error($mysqli));

	
	$update=false;
	$college_id=0;
	$college_name='';
	$college_desc='';
	$college_info='';
	$college_type='';
	$college_courses='';
	$college_image='';
	
	if (isset($_POST['save'])){
		$college_name = $_POST['college_name'];
		$college_name = mysqli_real_escape_string($conn,$_POST['college_name']);
		$college_desc = mysqli_real_escape_string($conn,$_POST['college_desc']);
		$college_info = mysqli_real_escape_string($conn,$_POST['college_info']);
		$college_type = mysqli_real_escape_string($conn,$_POST['college_type']);
		$college_courses = mysqli_real_escape_string($conn,$_POST['college_courses']);
		$college_image = mysqli_real_escape_string($conn,$_POST['college_image']);
		
		$mysqli->query("INSERT INTO college_info (college_name, college_desc, college_info, college_type, college_courses, college_image) VALUES('$college_name', '$college_desc', '$college_info', '$college_type', '$college_courses', '$college_image')")or die($mysqli->error);
		
		header("location: admin.php");
		
	}	
		
	if (isset($_GET['delete'])){
		$college_id = $_GET['delete'];
		$mysqli->query("DELETE FROM college_info WHERE college_id=$college_id") or die($mysqli->error());

		header("location: admin.php");
	}
	
	if (isset($_GET['edit'])){
		$college_id = $_GET['edit'];
		$update = true;
		
		$result = $mysqli->query("SELECT * FROM college_info WHERE college_id=$college_id") or die($mysqli->error());
		
			$row = mysqli_fetch_array($result);
			$college_name = $row['college_name'];
			$college_desc = $row['college_desc'];
			$college_info = $row['college_info'];
			$college_type = $row['college_type'];
			$college_courses = $row['college_courses'];
			$college_image = $row['college_image'];
		}
	
	
	
	if (isset($_POST['update'])){
		$college_id = mysqli_real_escape_string($conn,$_POST['college_id']);
		$college_name = mysqli_real_escape_string($conn,$_POST['college_name']);
		$college_desc = mysqli_real_escape_string($conn,$_POST['college_desc']);
		$college_info = mysqli_real_escape_string($conn,$_POST['college_info']);
		$college_type = mysqli_real_escape_string($conn,$_POST['college_type']);
		$college_courses = mysqli_real_escape_string($conn,$_POST['college_courses']);
		$college_image = mysqli_real_escape_string($conn,$_POST['college_image']);
		
		$mysqli->query("UPDATE college_info SET college_name='$college_name', college_desc='$college_desc', college_info='$college_info', college_type='$college_type', college_courses='$college_courses', college_image='$college_image' WHERE college_id=$college_id") or die($mysqli->error);
		
		header('location: admin.php');
	}
?>