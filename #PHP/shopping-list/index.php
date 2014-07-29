<?php

	$list_shopping=array(
		"potatoes",
		"onions",
	);
	
	$list_inventory=array(
		"eggs", 
		"bacon", 
	 	"broccoli",
	 	"pineapple juice",
	 	"cheese",
	 	"milk",
	 	"grapefruit",
	);
;?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>shopping list</title>
	<style>
		.container {
			max-width: 1000px;
			width: 100%;
			margin: 0 auto;
			background-color: whitesmoke;
			text-align: center;
		}
	</style>
</head>
<body>
	
	<div class="container">

		<h2>shopping list</h2>
		<?php  
			foreach ($list_shopping as $item) {
				echo "<p>".$item."</p>";
			}
		;?>

		<h2>inventory</h2>
		<?php  
			foreach ($list_inventory as $item) {
				echo "<p>".$item."</p>";
			}
		;?>
	</div>

	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>