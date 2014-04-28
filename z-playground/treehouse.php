<?php 

function mimic_array_sum ($array) {

  $element = 0;
  foreach ($array as $element) {
		// echo "F: " . $element;			
		$sum = $element + $sum;
  }
  return $sum;

}


$palindromic_primes = array(11, 757, 16361);
$count = mimic_array_sum($palindromic_primes);
echo "the count is " . $count;
?>