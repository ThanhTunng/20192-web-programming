<!DOCTYPE html>
<html>
<head>
	<title>Insert Data Process</title>
</head>
<body>
	<?php
		$description = $_POST['description'];
		$weight = $_POST['weight'];
		$cost = $_POST['cost'];
		$number = $_POST['number'];

		$db_config = include('./db_config.php');
		$server = $db_config['server'];
		$user = $db_config['user'];
		$pass = $db_config['pass'];
		$my_db = 'sale';
		$table_name = 'Products';
		$connect = mysqli_connect($server,$user,$pass,$my_db);

		if($connect->connect_errno){
			die ("Cannot connect to $server using $user");
			exit();
		} else {
			$SQLcmd = "INSERT INTO Products VALUES('0','$description','$cost','weight','$number')";
			mysqli_select_db($connect, $table_name);
			if(mysqli_query($SQLcmd,$connect)){
				echo "Insert into $my_db successful!!<br>";
			} else {
				echo "Insert into $my_db failed!!<br>";
			}
			$connect->close();
		}

	?>
</body>
</html>