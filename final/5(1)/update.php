<?php
include_once("config.php");
if(isset($_POST['Submit']))
{
	$id=mysqli_real_escape_string($check,$_POST['eid']);
	$name=mysqli_real_escape_string($check,$_POST['ename']);
	$age=mysqli_real_escape_string($check,$_POST['eage']);
	$email=mysqli_real_escape_string($check,$_POST['eemail']);
	if(empty($id)||empty($name)||empty($age)||empty($email))
	{
		if(empty($id))
		{
			echo "<b><font face='cursive' size='3'>Id Field Is Empty!!!</font></b><br>";
		}
		if(empty($name))
		{
			echo "<b><font face='cursive' size='3'>Name Field Is Empty!!!</font></b><br>";
		}
		if(empty($age))
		{
			echo "<b><font face='cursive' size='3'>Age Field Is Empty!!!</font></b><br>";
		}
		if(empty($email))
		{
			echo "<b><font face='cursive' size='3'>Email Field Is Empty!!!</font></b><br>";
		}
	}
	else
	{
		$result=mysqli_query($check,"UPDATE employees_info SET name='$name',age='$age',email='$email' WHERE id=$id");
		echo "<b><font color='green' face='cursive' size='3'>Data Successfully Updated</font></b><br>";
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
<form class="myform" action="update.php" method="POST">
<div class="mydiv">
<label>Employee Id &nbsp;&nbsp;&nbsp;:</label>
<input name="eid" type="text" placeholder="Id" size="20"><br>
</div>
<div class="mydiv">
<label>Employee Name :</label>
<input name="ename" type="text" placeholder="Name" size="20"><br>
</div>
<div class="mydiv">
<label>Employee Age &nbsp;&nbsp;:</label>
<input name="eage" type="text" placeholder="Age" size="20"><br>
</div>
<div class="mydiv">
<label>Employee Email&nbsp;:</label>
<input name="eemail" type="text" placeholder="Email" size="20"><br>
</div>
<button name="Submit" class="mybutton1">Submit</button>
</form>
<button class="mybutton" onclick="window.location.href='index.php'">Home</button>
</center>
</body>
</html>