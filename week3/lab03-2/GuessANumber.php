<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Guess an number</title>
</head>
<body>
	<?php
		if(array_key_exists("number", $_SESSION)){
			$number = $_SESSION["number"];
			$count = $_SESSION["count"];
		} else {
			srand((double) microtime()*1000000);
			$_SESSION["number"] = rand(0,100);
			$number = $_SESSION["number"];
			$count = 0;
			$_SESSION["count"] = $count;
		}
	?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
		<p>Input a number: 
			<input type="text" name="guess">
			<input align="left" type="submit" name="submit">
			<input align="right" type="reset" name="reset">
		</p>
	<?php
		if(array_key_exists("guess", $_GET))
			$guess = $_GET["guess"];
		print("Number needs guessing: $number<br>");
		if(!is_numeric($number)){
			if($guess > $number){
				print "You guessed $guess, higher.";
				$count += 1; $_SESSION["count"] = $count;
				print " You tried $count<br>";
			}
			elseif ($guess < $number) {
				print "You guessed $guess, lower.";
				$count += 1; $_SESSION["count"] = $count;
				print " You tried $count<br>";
			}else{
				print 'You got it!!';
				session_unset();
			}
		} else {
			print "You have to input a number!<br>";
		}

	?>
	</form>
</body>
</html>