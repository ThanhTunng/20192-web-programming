<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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
			$SQLcmd = "SELECT * from $table_name WHERE (Product_desc ='$product')";
			mysqli_select_db($connect, $table_name);
			$result = mysqli_query($SQLcmd,$connect);
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