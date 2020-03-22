<!DOCTYPE html>
<html>
<head>
	<title>Date Time Processing</title>
</head>
<body>

	<font size="5" color="green">Enter your name and select date and time for the appointment</font>

	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
		<table>
			<?php
				if(array_key_exists("day", $_GET)){
					$year = $_GET["year"];
					$month = $_GET["month"];
					$day = $_GET["day"];
					$hour = $_GET["hour"];
					$minute = $_GET["minute"];
					$second = $_GET["second"];
				} else {
					$year = 0; $month = 0; $day = 0;
					$hour = 0; $minute = 0; $second = 0;
				}
			?>
			<tr>
				<td>Your name</td> 
				<td colspan="3"><input type="text" name="name"></tr></td>
			<tr>
				<td>Date</td>
				<td>
					<select name=day>
						<?php
							for ($i=1; $i < 32; $i++) { 
								if($day == $i)
									print "<option selected>$i</option>";
								else
									print "<option>$i</option>";
							}
						?>
					</select>
				</td>
				<td>
					<select name="month">
						<?php
							for ($i=1; $i <= 12; $i++) {
								if($month == $i)
									print "<option selected>$i</option>";
								else
									print "<option>$i</option>";
							}
						?>
					</select>
				</td>
				<td>
					<select name="year">
						<?php
							for ($i=2020; $i>0; $i--) { 	 
								if($year == $i)
									print "<option selected>$i</option>";
								else
									print "<option>$i</option>";
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Time </td>
				<td>
					<select name="hour">
						<?php
							for ($i=0; $i < 24; $i++) {  
								if($hour == $i)
									print "<option selected>$i</option>";
								else
									print "<option>$i</option>";
							}
						?>
					</select>
				</td>
				<td>
					<select name="minute">
						<?php
							for ($i=0; $i <= 60; $i++) {  
								if($minute == $i)
									print "<option selected>$i</option>";
								else
									print "<option>$i</option>";
							}
						?>
					</select>
				</td>
				<td>
					<select name="second">
						<?php
							for ($i=0; $i <= 60; $i++) {  
								if($second == $i)
									print "<option selected>$i</option>";
								else
									print "<option>$i</option>";
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td align="right"><input type="submit" value="submit"></td>
				<td align="left"><input type="reset" value="reset"></td>
			</tr>
		</table>
	</form>

	<?php
		if(array_key_exists("name", $_GET)){
			$year = $_GET["year"];
			$month = $_GET["month"];
			$day = $_GET["day"];
			$hour = $_GET["hour"];
			$minute = $_GET["minute"];
			$second = $_GET["second"];
			print "Hi $name<br>";
			print "You have choosen to have an appointment on $hour:$minute:$second, $day/$month/$year<br>";

			if($hour>12){
				$hour = $hour-12;
				print "More information<br><br>In 12 hours, the time and date is $hour:$minute:$second PM, $day/$month/$year<br><br>";				
			}
			else
				print "More information<br><br>In 12 hours, the time and date is $hour:$minute:$second AM, $day/$month/$year<br><br>";	

			$numDayInMonth;
			switch ($month) {
				case 2:
					if($year%400==0 || ($year%4==0 && $year%100!=0))
						$numDayInMonth = 29;
					else
						$numDayInMonth = 28;
					break;
				case 4: case 6: case 9: case 11:
					$numDayInMonth = 30;
					break;
				case 1: case 3: case 5: case 7: case 8: case 10: case 10: case 12:
					$numDayInMonth = 31;
					break;
				default:
					print "Invalid month"; 
			}

			print "This month has $numDayInMonth days<br>";
		}
	?>
</body>
</html>