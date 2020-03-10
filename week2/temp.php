<!DOCTYPE html>
<html>
<head>
	<title>Var example</title>
</head>
<body>
	<?php
		$first_num = 1;	$sec_num = 2;
		$temp = $first_num; $diff = $temp-$sec_num;
		print("sum : $temp+$sec_num <br>
				diff: $diff");

		$banana1 = "banana"; $banana2 = "and banana";
		print("<br> $banana1 + $banana2");
		
		$first_name = "Thanh Tung"; $family_name = "Vu";
		$full_name = $first_name.$family_name;
		$length = strlen($full_name);
		print("<br>Full name: $full_name has length: $length");
	?>
</body>
</html>