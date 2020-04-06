<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		class ObjectTracker {
			private static $nextSerial = 0;
			private $id, $name;

			function __construct($name){
				$this->name = $name;
				$this->id = ++self::$nextSerial;
			}

			function __clone(){
				$this->name = "Clone of $this->name";
				$this->id = ++self::$nextSerial;
			}

			function getID(){
				return $this->id;
			}

			function getName(){
				return $this->name;
			}

			function setName($name){
				$this->name = $name;
			}
		}

		$oj = new ObjectTracker("Tung's object");
		$oj2 = clone $oj;
		$oj2->setName("Another object");

		print("Object 1 id: ".$oj->getId()." ".$oj->getName()."<br>");
		print("Object 2 id: ".$oj2->getId()." ".$oj2->getName()."<br>");
	?>
</body>
</html>