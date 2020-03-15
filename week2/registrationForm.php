<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<form action="registrationForm.php" method="post">
		<h2>Registration Form</h2>
		<div>
			<table>
				<tr>
					<td>Email: </td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input type="password" name="password"></td>
				</tr>
			</table>
			<input type="submit"  style="text-align: center" name="Submit">
			<input type="reset" style="text-align: center" name="Reset">
		</div>
	</form>

	<?php
		$email = $_POST["email"];
		$pass = $_POST["password"];

		if(strlen($pass)<8)
			echo "<span style='color: red'> password must be longer than 8 letters </span>";
		else
			echo "<span style='color: green'> Register successfuflly! </span>"
	?>

</body>
</html>