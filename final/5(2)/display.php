<html>

	<head>
		<title>display</title>
	</head>

	<body>
	
		<table>
			<tr>
				<td>rollno</td>
				<td>name</td>
			</tr>
			<?php
				include_once("config.php");
				$result = mysqli_query($con, "select * from login");
				while($res=mysqli_fetch_array($result)){
					echo "<tr>";
					echo "<td>".$res['rollno']."</td>";
					echo "<td>".$res['name']."</td>";
					echo "</tr>";
				}
			?>
		</table>	
	
	</body>

</html>
