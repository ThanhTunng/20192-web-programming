<!DOCTYPE html>
<html>
<head>
	<title>User sorting</title>
</head>
<body>
	<?php 
		function user_sort($a, $b){
			//smart is all important, so sort it first
			if($b=='smarts')
				return 1;
			elseif ($a=='smarts') {
				return -1;
			}
			return ($a==$b)? 0 : (($a<$b)? -1 : 1);
		}
		$values = array('name' => 'Buzz Lightyear',
	                 'email_address' => 'buzz@starcommand.gal',
	                 'age' => 32,
	                 'smarts' => 'some');		

		$submitted = $_POST["submitted"];
		$sort_type = $_POST["sort_type"];
	?>

	<form action="UserSorting.php" method="post">
		 <table>
		 	<tr>
			   <td><input type="radio" name="sort_type" value="sort" checked="checked" />
			                                                           Standard sort<br /></td>
			   <td><input type="radio" name="sort_type" value="rsort" />   Reverse sort<br /></td>
			   <td><input type="radio" name="sort_type" value="usort" />   User-defined sort<br /></td>
			   <td><input type="radio" name="sort_type" value="ksort" />   Key sort<br /></td>
			   <td><input type="radio" name="sort_type" value="krsort" />  Reverse key sort<br /></td>
			</tr>
			<tr>
			   <td><input type="radio" name="sort_type" value="uksort" />  User-defined key sort<br /></td>
			   <td><input type="radio" name="sort_type" value="asort" />  Value sort<br /></td>
			   <td><input type="radio" name="sort_type" value="arsort" /> Reverse value sort<br /></td>
			   <td><input type="radio" name="sort_type" value="uasort" /> User-defined value sort<br /></td>
			</tr>
		</table>
		 <p align="center">
		    <input type="submit" value="Sort" name="submitted" />
		 </p>
	</form>

		<table>
			<tr>
				<td> 	Value unsorted: </td>
				<td> 
					 <ul>
					 	<?php
							foreach ($values as $key => $value) {
								print "<li><b>$key</b> : $value</li>";
							}
						?>
					</ul>
				</td>
				
				<?php	
					if ($submitted) {
						if($sort_type == 'usort' || $sort_type == 'uksort' || $sort_type == 'uasort') {
					     	$sort_type($values, 'user_sort');
					   	} else {
					     	$sort_type($values);
					   	}

					   	echo "<td></td>";
					   	print("<td>Values sorted by $sort_type: </td>");
					  	echo "<td><ul>";

					  	foreach ($values as $key => $value) {
							print "<li><b>$key</b> : $value</li>";
						}
							print "</ul></td>";
					} else {
						print("<td></td>");
					}
				?>
			</tr>
		</table>
</body>
</html>