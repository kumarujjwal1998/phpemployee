<html>
<head>
<title>Employee Database</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width,initial-scale=1">
<script src="https://code.jquery.com/jquery-3.2.1.min.js">
</script>
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
<form class="myform" action="insert.php" method="POST">
<div class="mydiv">
<label>Employee Id &nbsp;&nbsp;&nbsp;:</label>
<input id="eid" type="text" placeholder="Id" size="20" required><br>
</div>
<div class="mydiv">
<label>Employee Name :</label>
<input id="ename" type="text" placeholder="Name" size="20" required><br>
</div>
<div class="mydiv">
<label>Employee Age &nbsp;&nbsp;:</label>
<input id="eage" type="text" placeholder="Age" size="20" required><br>
</div>
<div class="mydiv">
<label>Employee Email&nbsp;:</label>
<input id="eemail" type="text" placeholder="Email" size="20" required><br>
</div>
<button name="Submit" class="mybutton1">Submit</button>
</form>
<button class="mybutton" onclick="window.location.href='index.php'">Home</button>
<h1 id="result"></h1>
<h1 id="result"></h1>
</center>
<script>
$("form").submit(function(e){
e.preventDefault();
$.post(
"insert.php",
{
name: $("#ename").val(),
age: $("#eage").val(),
email: $("#eemail").val(),
id: $("#eid").val()
},
function(result)
{
if(result == "Success")
{
 $("#result").html("Data Inserted Successfully...!");
}
else
{
 $("#result").html("Error Occured!");
}
}
);
});
</script>
</body>
</html>