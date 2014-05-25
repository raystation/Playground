<html>
<head>
	<title>Test CMS</title>
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

foreach ($files as $file) {
	if ( strpos( $file,'jpg' ) || strpos( $file,'png' ) ) { 
		$alt_text = ( str_replace("-", " ", $file ) );
		$alt_text = ( str_replace(".jpg", "", $alt_text ) );
		$alt_text = ( str_replace(".png", "", $alt_text ) );
		echo '<img src=img/' .  $file . ' alt="'.  $alt_text . '">'."\n";
	}
}

 ;?>

 </body>
 </html>