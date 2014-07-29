<?php  
	
	$list=[];
	
	for ($i=0; $i <= 10; $i++) { 
		$num=rand(0,100);
		array_push($list, $num);	
	}

	function three_random_num() {
		
		$rand1=mt_rand(0,255);
		$rand2=mt_rand(0,255);
		$rand3=mt_rand(0,255);
		
		$color="rgb(".$rand1.",".$rand2.",".$rand3.")";
		return $color;
	}

;?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>sample chart</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<h1>sample chart</h1>	
		<p>Random Colors</p>	
		<?php

			foreach ($list as $value) {
				
				echo '<svg height="10" width="100%" fill="'.three_random_num().'">';
				echo '<rect height="10" width="'.$value.'%">';
				echo '</svg>'."\n";
			}
		;?>

		<p>Dark Color</p>

		<?php

			foreach ($list as $value) {
				$colorValue=100-$value;
				echo '<svg height="10" width="100%" fill="hsl(360,100%,'.$colorValue.'%)">';
				echo '<rect height="10" width="'.$value.'%">';
				echo '</svg>'."\n";
			}
		;?>		

	</div>

	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>