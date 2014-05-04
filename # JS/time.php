

<pre>

<?php
	date_default_timezone_set('America/Los_Angeles');
	
	$birthYear = 1980;
	$dayofweek = date('l');
	$month = date('F');
	$monthNo = date('n');
	$day = date('j');
	$year = date('o');

	$hour = date('h');
	$minutes = date('i');
	$AM = date('A');

		// someone else's code to find calculate days to an event
		$target = mktime(0, 0, 0, 5, 17, 2014) ;
		$today = time () ;
		echo "time from epoch: " . $today . "\n"; 
		$difference = ($target-$today) ;
		$days = (int) ($difference/86400) ;
		echo "Our event will occur in " . $days . " days" . "\n\n";

	echo "Today is " . $dayofweek . ", " . $month . " " . $day . ", " . $year . "\n";
	echo "The time is now " . $hour . ":" . $minutes . $AM;

	// finds my age based on month, not day
		// $age = date('o') - $birthYear;
		// if (date('n') > 5) {
		// 	echo "my age is " . $age . "\n";
		// } else {
		// 	$age = $age - 1;
		// 	echo "my age is " . $age . "\n";
		// }

	$friends[] = array ("Ray",5,17,1980);
	$friends[] = array ("Sarah",7,23,1975);

		// $friends[ray] = array (
		// 	"name" => "Ray",
		// 	"birthMonth" => 5,
		// 	"birthDay" => 17,
		// 	"birthYear" => 1980
		// );

		// $friends[sarah] = array (
		// 	"name" => "Sarah",
		// 	"birthMonth" => 7,
		// 	"birthDay" => 23,
		// 	"birthYear" => 1975
		// );

			// FLAVORS ARRAY EXAMPLE
			//$flavors = array ("Vanilla","chocolate","cookie dough");

			// foreach ($flavors as $flavor) {
			// 	echo $flavor;
			// }

	// foreach ($friends as $friend) {
		
	// 	$age = $year - $friend[3];
		
	// 	if ($friend[1] == $monthNo && $friend[2] == $day) {
	// 		echo "Happy Birthday, " . $friend[0] . "\n";
	// 	}
	// 	elseif ($friend[1] => $monthNo && $friend[2] > $day) {
	// 		echo $friend[0] . " is " . $age . " years old." . "\n";
	// 	} else { 
	// 		$age = $age - 1;
	// 		echo $friend[0] . " is " . $age . " years old." . "\n";
	// 	}		

	// };

	// $friend = array("Sarah",2,11,1975);
	// // var_dump($friend);
	// // echo "test: ". $friend[1];

	// if ($friend[1] == $monthNo && $friend[2] == $day) {
	// 		echo "Happy Birthday, " . $friend[0] . "\n";
	// 	} else {
	// 	echo "poop";
	// }

	// foreach ($friends as $friend) {
		
	// 	$age = $year - $friend[3];

	// 	if ( $month == $friend[1] AND $day == $friend[2]) {
	// 		echo "Happy Birthday, " . $friend[0] . "\n";
	// 	} 

	// 	elseif ( $month => $friend[1] AND $day > $friend[2]) {
	// 		echo $friend[0] . " is " . $age . " years old." . "\n";
	// 	} 

	// 	else { 
	// 		$age = $age - 1;
	// 		echo $friend[0] . " is " . $age . " years old." . "\n";
	// 	}		

	// };

	// proves conditions can use "and"
	echo "\n";
	$random = 92;
	if ($random > 1 && $random < 5 ) {
		echo "1-4";
	} elseif ( $random >= 5 && $random < 10 ){
		echo "5-10";
	}	else {
		echo "poop";
	}


	// var_dump($friends);
?>

</pre>