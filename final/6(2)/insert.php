<?php
	$rollno = $_POST['rollno1'];
	$name = $_POST['name1'];

	$con = mysqli_connect("localhost","root","123","database");

	$stmt = mysqli_query($con,"insert into login values('$rollno','$name')");

	if($stmt){
		echo "success";
	}else{
		echo "fail";
	}
?>