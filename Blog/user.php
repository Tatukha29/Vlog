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
	Blog
</h2>
<hr>
<h2>
	User name itd
</h2>
<hr>
<div class="flex div">
	<p>Логин</p>
<p>
	<?php 
		echo $database[$index]['user']
	 ?>
</p>
</div>
<div class="flex div">
	<p>Имя</p>
<p>
	<?php 
		echo $database[$index]['name']
	 ?>
</p>
</div>
<div class="flex div">
	<p>Дата регистрации</p>
<p>
	<?php 
		echo $database[$index]['num']
	 ?>
</p>
</div>
</body>
</html>