<?php
	
	include_once("config.php");
	if(isset($_POST["submit"])){
	
		$rollno = $_POST["rollno"];
		$name = $_POST["name"];
		
		$res = mysqli_query($con, "insert into login values('$rollno','$name')");
	}	
	
?>

<html>
	<head>
		<title>index</title>
	</head>

	<body>
		<form method="post">
			rollno : <input type="text" name="rollno"/><br>
			name : <input type="text" name="name"/><br>
			<input type="submit" name="submit"/>
		</form>
	</body>

</html>
