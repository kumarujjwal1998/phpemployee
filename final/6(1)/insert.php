<?php
include_once("config.php");
$id=$_POST['id'];
$name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];
$result=mysqli_query($check,"INSERT INTO employees_info(id,name,age,email) VALUES('$id','$name','$age','$email')");
if($result)
{
	echo("Success");
}
else
{
	echo("Failure");
}
?>