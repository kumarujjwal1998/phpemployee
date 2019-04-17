<?php
$UserName="root";
$HostName="localhost";
$Password="";
$Database="employee";#mysql_select_db('employee');
$check=mysqli_connect($HostName,$UserName,$Password,$Database);
if($check)
{
	#echo '<b>Success</b>';
}
else
{
	echo '<b>Failure</b>';
}
?>