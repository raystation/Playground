<?php  
	$divisions=10;
;?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>bars</title>
	<style>
		.container {
			width: 100%;
			max-width: 1000px;
			margin: 0 auto;
			background-color: whitesmoke;
		}

		body {
			padding-top: 10px;
			padding-bottom: 10px;
		}
		svg {
			margin: 0;
			padding: 0;
			margin-right: -4px;
		}
	</style>
</head>
<body>
	
	<div class="container">
		<?php 
			for ($i=0; $i < $divisions ; $i++) {
				echo '<svg width="'.$divisions.'%" height="20"><rect width="100%" height="20" fill="rgba(0,0,255,0.'.$alpha.')"></svg>'."\n";
				$alpha=$alpha+$divisions;
			}
		;?>
	</div>

	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>	
</body>
</html>