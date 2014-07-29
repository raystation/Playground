<?php  

	$boxsize=30;
	$times=2000;
	
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
	<style>
		html, body {
			margin: 0;
			padding: 5px;	
			padding-top: 10px;
			padding-bottom: 10px;
		}
		svg, rect, div {
			margin-bottom: -4px;
		}
	</style>
</head>
<body>
	<div class="container">
		<?php  
			for ($i=0; $i < $times ; $i++) { 
				echo '<svg width="'.$boxsize.'" height="'.$boxsize.'" fill="'.three_random_num().'"><rect x="0" y="0" width="'.$boxsize.'" height="'.$boxsize.'"/></svg>';
			}
		;?>
	</div>

	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>