<?php  

$numbers=array(5,9,10,1,3,4,49,90);

foreach ( $numbers as $number ) {
	if ( $number > 5 ) {
		$greater_than_5[]=$number; //will add this result to the array if you end the array with []
	}
}
echo "<pre>";
var_dump($greater_than_5);
echo "</pre>";