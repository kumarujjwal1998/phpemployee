<?php
include_once("config.php");
$id=$_POST['id'];
$name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];
$rep=mysqli_query($check,"INSERT INTO employees_info(id,name,age,email) VALUES('$id','$name','$age','$email')");
if($rep)
{
	echo("Success1");
}
else
{
	echo("Failure");
}
?>