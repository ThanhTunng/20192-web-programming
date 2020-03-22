<!DOCTYPE html>
<html>
<head>
	<title>Convert</title>
</head>
<body>
	<?php
		function RadToDegree($value)
		{
			return $value*180/pi();	
			
		}
		function DegreeToRad($value)
		{
			return $value*pi()/180;	
		}
	?>
	<h3 style="color: blue">Convert Tool</h3>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
		<table>
			<tr>
				<td>Input a number: </td>
				<td>
					<input type="text" name="value">
				</td>
				<td>Unit</td>
				<td>
					<select name="unit">
						<option value="Degree">Degree</option>
						<option value="Radian">Radian</option>
					</select>
				</td>
				<td></td>
				<td><input type="submit" name="Submit"></td>
			</tr>
		</table>
	</form>

	<?php
		$value = $_GET["value"];
		$unit = $_GET["unit"];
		$valueConverted;
		if(is_numeric($value)){
			if(strcmp($unit, "Degree")==0){
				$valueConverted = DegreeToRad($value);
				print("$value degree = $valueConverted rad<br>");
			}
			else if(strcmp($unit, "Radian")==0){
				$valueConverted = RadToDegree($value);
				print("$value rad = $valueConverted degree<br>");
			}
		} else {
			print("Please input a numberic value!!<br>");
		}
	?>
</body>
</html>