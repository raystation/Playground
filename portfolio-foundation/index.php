<?php include 'inc/header.php';?>
<?php //workthumb() ;?>
<?php 
	echo "\t".'<div class="row center">'."\n";
	
	$count = count( $works );
	$manual = 0;

	foreach( $works as $work ) {
		$manual = $manual + 1;

	  if ( $count == $manual ) {
	  	echo "\t\t".'<div class="small-6 columns medium-3 portfolio-piece end"><img src="img/'.$work["path"].'/'.$work["thumb"].'"><p>'.$work["name"].'</p></div>'."\n";
	  } else {
	  	echo "\t\t".'<div class="small-6 columns medium-3 portfolio-piece"><img src="img/'.$work["path"].'/'.$work["thumb"].'"><p>'.$work["name"].'</p></div>'."\n";
	  }
		if ( $manual % 4 == 0 ) {
			echo "\t"."</div>\n\t<div class=\"row center\">\n";
		}	  
	}

	echo "\t"."</div>";	

;?>

<?php include 'inc/footer.php';?>
