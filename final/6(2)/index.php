<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js">
</script>
</head>
<body>

	<form action="insert.php" method="post">
		rollno : <input type="text" name="rollno" id="rollno">
		name : <input type="text" name="name" id="name">
		<input type="submit" name="submit">
	</form>

	<p id="res"></p>

	<button><a href="display.php">display</a></button>

	<script>
		
		$("form").submit(function(e) {
			e.preventDefault();
			$.post("insert.php",{
				rollno1 : $("#rollno").val(),
				name1 : $("#name").val()
			},function(result){
				if(result=="success"){
					$("#res").html("successful");
				}else{
					$("#res").html("fail");
				}
			});
		});

	</script>

</body>
</html>