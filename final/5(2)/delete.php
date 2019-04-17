<?php
	
	include_once("config.php");
	if(isset($_POST["submit"])){
	
		$rollno = $_POST["rollno"];
		
		$res = mysqli_query($con, "delete from login where rollno='$rollno'");
	}	
	
?>

<html>
	<head>
		<title>index</title>
	</head>

	<body>
		<form method="post">
			rollno : <input type="text" name="rollno"/><br>
			<input type="submit" name="submit"/>
		</form>
	</body>

</html>
