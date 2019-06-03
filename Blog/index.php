<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
	<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	include 'db.php';

	 ?>
<h2>
	Blog
</h2>
<hr>
<img src="">
<?php 
	for($i=0;$i<count($database);$i++){
		?>
		<div>
			<?php  
			echo '<h2>' . $database[$i]['header'] . '</h2>';
		echo '<p>' . $database[$i]['short text'] . '</p>';
		echo '<img src=" ' . $database[$i]['img'] . '"</img>';
		echo '<br>';
		echo '<a href="page.php?index=' . $i .'">Next</a>';
		echo '<br>';
		echo '<a href="user.php?index=' . $i .'">' . $database[$i]['user'] . '</a>';
		echo '<hr>'
		?>
	</div>
	<?php 
	} 
?>
</body>
</html>