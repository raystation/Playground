<html>
<head>
	<style>
	body, html {
		margin: 0;
		padding: 0;
	}
	img {
		width: 100%;
	}
	</style>
</head>
<body>

<?php 

$files = scandir('img');
// var_dump($files);


foreach ($files as $file) {
	if ( strpos( $file,'jpg' ) || strpos( $file,'png' ) ) { 
		echo '<img src=img/' .  $file . '>';
	}
}

 ;?>

 </body>
 </html>