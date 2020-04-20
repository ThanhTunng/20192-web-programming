<!DOCTYPE html>
<html>
<head>
	<title>Create table</title>
</head>
<body>
	<?php
		$server = "localhost:3306";
		$user = 'root';
		$pass = 'thanhtung';
		$mydb = 'demoDB';
		$tablename = 'Products';
		echo "hello";
		$connect = mysqli_connect($tablename, $mydb, $pass, $user);
		echo "string";
		if($connect->connect_errno){
			die("Cannot connect to $server using $user");
			exit();
		} else {
			$SQLcmd = "Create table $tablename (
							ProductID int unsigned not null
								auto_increment primary key,
							Product_desc varchar(50),
							Cost int,
							Weight int,
							Number int )";
			mysqli_select_db($mydb);
			if(mysqli_query($SQLcmd,$connect)){
				print '<font size=4 color="blue">Created Table';
				print "<i>$table_name</i> in database<i>$mydb</i><br></font>"; 
			    print "<br>SQLcmd=$SQLcmd";
			} else {
				die("Table create creation Failed SQLcmd = $SQLcmd");
			}
			
			mysqli_close($connect);
		}
	?>

</body>
</html>