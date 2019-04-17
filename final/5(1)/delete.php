<?php
include_once("config.php");
if(isset($_POST['Submit']))
{
	$id=mysqli_real_escape_string($check,$_POST['eid']);
	if(empty($id))
	{
		echo "<b><font face='cursive' size='3'>Id Field Is Empty!!!</font></b><br>";		
	}
	else
	{
		$result=mysqli_query($check,"DELETE from employees_info WHERE id=$id");
		echo "<b><font color='green' face='cursive' size='3'>Data Successfully Deleted</font></b><br>";
	}
}
?>
<html>
<head>
<title>Employee Database</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
h1
{
	margin-top:10px;
	font-family:cursive;
}
.mybutton
{
	height:5%;
	font-family:cursive;
	background-color:grey;
	font-size:18px;
	border-color:black;
	border-radius:10px;
}
.mybutton1
{
	margin-top:3px;
	font-family:cursive;
	border-color:black;
	margin-bottom:3px;
}
.myform
{
	width:25%;
	background-color:white;
    font-weight: bolder;
    font-family: cursive;
}
.mydiv
{
	margin-top:3%;	
}
</style>
</head>
<body background="img.jpg">
<center>
<h1>Welcome To Employee Database</h1>
<br>
<br>
<form class="myform" action="delete.php" method="POST">
<div class="mydiv">
<label>Employee Id &nbsp;&nbsp;&nbsp;:</label>
<input name="eid" type="text" placeholder="Id" size="20"><br>
</div>
<button name="Submit" class="mybutton1">Submit</button>
</form>
<button class="mybutton" onclick="window.location.href='index.php'">Home</button>
</center>
</body>
</html>