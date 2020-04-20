<!DOCTYPE html>
<html>
<head>
	<title>Date Check</title>
</head>
<body>
	<?php
		$date = $_POST["date"];
		$two = '[[:digit:]]{2}';
		$month = '(0[0-9])|(1[0-2])';
		$day = '[0-2][0-9]|3[0-1]';
		$year = "2[[:digit:]]$two";

		if(preg_match("/^$month(\/)$day(\/)$year$/",$date)){
			print("Valid date = $date<br>");
		} else {
			print "Invalid date = $date";
		}
	?>

</body>
</html>