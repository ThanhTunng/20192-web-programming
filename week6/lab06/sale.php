<!DOCTYPE html>
<html>
<head>
	<title>Sale</title>
</head>
<body>
	<h1 style="color: blue">Update Results for Table Products</h1>
	<?php
		$product = $_POST['product'];
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
			$updateSQL = "UPDATE $table_name SET Numb = Numb-1 WHERE (Products_desc = '$product')";
			if($connect->query($updateSQL)){
				echo "Update successfully!!<br>";
			} else {
				echo "Update failed!!<br>";
			}
			echo "<br>";

			$SQLcmd = "SELECT * FROM $table_name";
			mysqli_select_db($connect, $table_name);
			$result = $connect->query($SQLcmd);
			if($result){
				print "<table border=1>";
				print "<th>Num<th>Product<th>Cost<th>Weight<th>Count";
				while($row = mysqli_fetch_row($result)){
					print("<tr>");
					foreach ($row as $value) {
						print("<td>$value</td>");
					}
					print("</tr>");
				}
			} else {
				die ("Query from $my_db failed!!<br>");
			}
			$connect->close();
		}
	?>
</body>
</html>