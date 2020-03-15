<!DOCTYPE html>
<html>
<head>
	<title>Receiving input</title>
</head>
<body>
	<font size=5>Thank you: got your input</font>
	<?php
		$email = $_POST["email"];
		$contact = $_POST["contact"];
		print("<br>Email: $email <br>Contact: $contact");
	?>

</body>
</html>