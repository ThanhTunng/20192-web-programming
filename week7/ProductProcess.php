<!DOCTYPE html>
<html>
<head>
	<title>Product Information Results</title>
</head>
<body>
	<?php
		$description = $_POST[description];
		$code = $_POST[code];
		$products = array( 'AB01' => '25-pound Sledgehammer',
						  'AB02' => 'Extra Strong Nails',
						  'AB03' => 'Super Adjustable Wrench',
						  'Ab04' => '3-speed Electric Screwdriver');
		if(preg_match('/boat|plane/', $description)){
			print("Sorry, we dont sell boats or plane anymore");
		} elseif (preg_match('/^AB/', $code)) {
			if(isset($products["$code"])){
				print "Code $code description: $products[$code]";
			} else {
				print("Sorry, product code not found");
			}
		} else {
			print("Sorry, all our products start with \"AB\"");
		}
	?>

</body>
</html>