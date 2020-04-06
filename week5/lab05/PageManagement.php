<!DOCTYPE html>

	<?php 
		require_once "PageClass.php";
		session_start();
	?>

<html>
<head>
	<title></title>
</head>

<body>
	<h2 align="center">Page Management</h2>

	<?php 
		if(isset($_SESSION['page'])){
			$pages = $_SESSION['page'];
		} else {
			$pages = array();
		}
		
		if(isset($_POST['title']) && isset($_POST['content']) && isset($_POST['copyright'])){
			$title = $_POST['title'];
			$content = $_POST['content'];
			$copyright = $_POST['copyright'];
			$newpage = new page($content,$title,$copyright);
			$pages[] = $newpage;
			// echo $newpage->get();
		}	
	 ?>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<table>
			<tr>
				<td>Title</td>
				<td><input type="text" name="title" size="78"></td>
			</tr>
			<tr>
				<td>Content of page</td>
				<td>
					<textarea rows="5" cols="60" name="content" placeholder="Content of page.."></textarea>
				</td>
			</tr>
			<tr>
				<td>Owner</td>
				<td><input type="text" name="copyright" size="78"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" value="Submit">
					<input type="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>

	<hr>
	<br>
	<h2 align="left">Created page list: </h2>
	<p align="left">Number of pages: <?php echo count($pages); ?></p>
	<ul text-align:left>
	<?php 
		for ($i=1; $i < count($pages); $i++) { 
			 echo '<li><a href="PageManagement.php?index='.$i .'">Page'.$i.'</a></li>';
		}
	 ?>
	</ul>

	<?php
		if(isset($_GET['index'])){
			$curPage = $pages[$_GET['index']-1];
			$curPageContent = $curPage->get();
			echo "<div><h2 align=\"center\">Current page: </h2><br><div>$curPageContent</div></div>";
		}
		$_SESSION['page'] = $pages;
	?>
</body>
</html>

