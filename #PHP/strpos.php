<?php  

	$villians = array("Joker","Penguin","Killer Croc", "Riddler");

	foreach ($villians as $villian) {
	
		$o_position = strpos( $villian, "o");

		if ( $o_position == false ) {
			echo "none\n";
		} else {
			echo $o_position."\n";
		}
	}