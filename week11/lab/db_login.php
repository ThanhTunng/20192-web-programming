<!DOCTYPE html>
<html>
<head>
	<title>Login configuration</title>
</head>
<body>
	<?php
		require_once "DB.php";
		# Param for connecting "business_service"
		$username = "root";
		$password = "thanhtung98";
		$hostspec = "localhost";
		$database = "business_service";
		$dbtype = 'mysqli';

		# DSN constructed from param
		$dsn = "$dbtype//$username:$password@$hostspec/$database";
		# Establish the connection
		$db = DB::connect($dsn);
		if(DB::isError($db)){
			die($db->getMessage());
		}
	?>
</body>
</html>