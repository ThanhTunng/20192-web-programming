<!DOCTYPE html>
<html>
<head>
	<title>Date Time Function</title>
</head>
<body>
	<?php 
		function isDate($date) {
		  $tempDate = explode('/', $date);
		  return checkdate($tempDate[1], $tempDate[0], $tempDate[2]);
		}
	?>
	<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="GET">
		<table>
			<tr>
				<td>Input the first person's name: </td>
				<td><input type="text" name="name1"></td>
				<td></td>
				<td>Birthday</td>
				<td><input type="text" name="birth1">
				</td>
			</tr>
			<tr>
				<td>Input the second person's name: </td>
				<td><input type="text" name="name2"></td>
				<td></td>
				<td>Birthday</td>
				<td><input type="text" name="birth2"></td>
			</tr>
			<tr><td><input align="right" type="submit" name="submit"></td></tr>
		</table>
		
	</form>

	<?php
		$name1 = $_GET["name1"];
		$name2 = $_GET["name2"];
		$birth1 = $_GET["birth1"];
		$birth2 = $_GET["birth2"];

		if(!isDate($birth1))
			print("The birthday of the first is not valid<br>");
		else if(!isDate($birth2))
			print("The birthday of the second is not valid<br>");
		else {
			$birth1 = str_replace('/','-',$birth1);
			$birth2 = str_replace('/','-',$birth2);
			$displayBirth1 = date("D, M d, Y",strtotime($birth1));
			$displayBirth2 = date("D, M d, Y",strtotime($birth2));
			print("The birthday of first one: $displayBirth1<br>");
			print("The birthday of second one: $displayBirth2<br>");
			
			$date1 = date_create($birth1);
			$date2 = date_create($birth2);
			$diff = date_diff($date1,$date2);
 			print("Difference: ".$diff->format('%a')." days<br>");
			
			$today = date('d-m-Y');
			$age1 = floor((strtotime($today)-strtotime($birth1))/(365*24*60*60));
			$age2 = floor((strtotime($today)-strtotime($birth2))/(365*24*60*60));
			print("Age of the first: $age1<br>
				Age of the second: $age2<br>
				Difference years: ".$diff->format('%Y'." years<br>"));

		}
	?>
</body>
</html>