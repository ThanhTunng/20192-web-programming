<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Declaration Form Action</title>
</head>
<body>
	<h2>Student Declaration</h2>
	<?php	
		$name = $_POST["name"];
		$class = $_POST["class"];
		$gender = $_POST["gender"];
		$uni = $_POST["university"];

		print("<br> Hello $name,
			   <br> Class: $class <br> University: $uni
			   <br> Gender: $gender
			   <br> Hobbies: ");
			   if(!empty($_POST["Hobby"])){
					foreach ($_POST["Hobby"] as $check)
						print("$check, ");
				}
	?>
</body>
</html>