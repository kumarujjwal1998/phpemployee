<html>
<head>
<title>Employee Database</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
.mydiv
{
	text-align:center;
}
h1
{
	margin-top:10px;
	font-family:cursive;
}
.mybutton
{
	width:10%;
	height:8%;
	margin-top:10px;
	font-family:cursive;
	background-color:grey;
	font-size:28px;
	border-color:black;
	border-radius:10px;
}
table,th,td
{
	border:2px solid black;
}
th
{
	width:15%;
	font-family:cursive;
	background-color:grey;
}
td
{
	width:15%;
	font-family:cursive;
	background-color:white;
}
</style>
</head>
<body background="img.jpg">
<div class="mydiv">
<h1>Welcome To Employee Database</h1>
<br>
<br>
<center>
<table width="60%">
<tr>
<th>Id</th>
<th>Name</th>
<th>Age</th>
<th>E-mail</th>
</tr>
<?php
include_once("config.php");
$result=mysqli_query($check,"SELECT * FROM employees_info");
while($res=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>".$res[0]."</td>";
echo "<td>".$res[1]."</td>";
echo "<td>".$res[2]."</td>";
echo "<td>".$res[3]."</td>";
echo "</tr>";
}
?>
</table>
</center>
<button class="mybutton" onclick="window.location.href='index.php'">Home</button>
</div>
</body>
</html>