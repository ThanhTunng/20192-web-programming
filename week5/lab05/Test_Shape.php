
	<?php
		// spl_autoload_register(function ($class_name){
		// 	$root = '';
		// 	$path = $root.$class_name.'php';
		// 	include $path;
		// });

		require 'shape/Rectangle.php';
		require 'shape/Triangle.php';
		require 'shape/Circle.php';
		require 'shape/Color.php';

		$myCollection = array();

		// make a rectangle
		$r = new Rectangle();
		$r->width = 5; $r->height = 7;
		array_push($myCollection, $r);
		unset($r);
		
		// make a triangle
		$t = new Triangle();
		$t->base = 4; $t->height = 5;
		array_push($myCollection, $t);
		unset($t);

		// make a circle
		$c = new Circle();
		$c->radius = 3;
		array_push($myCollection, $c);
		unset($c);

		// make a color
		$c = new Color();
		$c->name = "blue";
		array_push($myCollection, $c);
		unset($c);

		foreach ($myCollection as $s) {
			if($s instanceof Shape)
				print("Area: ".$s->getArea()."<br>");
			if($s instanceof Polygon)
				print("Sides: ".$s->getNumberOfSides()."<br>");
			if($s instanceof Color)
				print("Color: ".$s->name."<br>");
			print("<br>");
		}
	?>