<!DOCTYPE html>
<html>
<head>
	<title>Coin Flip</title>
</head>
<body>
	<font size="4" color="blue">Please pick Heads or Tails</font>
	
	<form action="GotFlip.php" method="POST">
		<?php
			print ' <input type="radio" name="pick" value=0>Heads ';
			print ' <input type="radio" name="pick" value=1>Tails ';
			print ' <br> ';
		?>

		<input type="submit" value="submit">
		<input type="reset" value="reset">
	</form>

</body>
</html>