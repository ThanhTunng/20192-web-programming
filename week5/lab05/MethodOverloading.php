<!DOCTYPE html>
<html>
<head>
	<title>Overloading</title>
</head>
<body>
	<?php

		class MethodTest{
			public function __call($name,$arguments){
				echo "Call object method '$name'".implode(', ', $arguments)."<br>";
			}

			public static function __callStatic($name,$arguments){
				echo "Calling static method '$name' ".implode(', ', $arguments)."<br>";
			}
		}

		$object = new MethodTest();
		$object->runTest('in object context');

		MethodTest::runTest('in static context');

	?>
</body>
</html>