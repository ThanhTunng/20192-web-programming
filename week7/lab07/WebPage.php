<!DOCTYPE html>
<html>
<head>
	<title>Web Page Processing</title>
</head>
<body>
	<?php
		$email = $_POST["email"];
		$url = $_POST["url"];
		$phone = $_POST["phone"];

		$email_regrex = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$";
		$url_regrex =  '^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$';
		$phone_regrex = "(0)[[:digit:]]{9}";

		if(preg_match("/$email_regrex/", $email)){
			print("valid email = $email");
		} else {
			print("invalid mail = $email");
		}
		echo "<br>";
		if(preg_match("/$url_regrex/", $url)){
			print("Valid url address = $url");
		} else {
			print("Invalid url address = $url");
		}
		echo "<br>";
		if(preg_match("/$phone_regrex/", $phone)){
			print("Valid phone number = $phone");
		} else {
			print("Invalid phone number = $phone");
		}

		
	?>
</body>
</html>