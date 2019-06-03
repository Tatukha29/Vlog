<!DOCTYPE html>
<html>
<head>
	<title>Page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	include 'db.php';

	 ?>
<?php 
 $index= $_GET['index']
 ?>
<h2>
	<?php 
		echo $database[$index]['header']
	 ?>
</h2>
<p>
	<?php 
		echo $database[$index]['long text']
	 ?>
</p>
<?php 
echo '<img src=" ' . $database[$index]['img'] . '"</img>';
 ?>
</body>
</html>