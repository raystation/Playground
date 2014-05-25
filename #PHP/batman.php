
<pre>
<?php

	// PURE PHP
	$villains = array ("Joker", "Penguin", "Two-face", "Catwoman", "Deadshot", "Riddler", "Killer Croc", "Clayface");
	//$villains = sort($villains);
	$villains[] = "Scarface";


	$villainsInfo[0] = array (
			"name" => "Joker",
			"weapon" => "jokes",
			"realName" => "unknown"
		);

	$villainsInfo[1] = array (
			"name" => "Penguin",
			"weapon" => "an umbrella",
			"realName" => "Oswald Cobblepot"
		);

foreach ($villainsInfo as $villainInfo) {
	echo "Batman villain: " . $villainInfo[name] . " (real name: " . $villainInfo[realName] . "). He uses " . $villainInfo[weapon] . " as a weapon. \n";
};

	echo "<h3>Current Batman Villain count: " . count($villains) . "\n" . "</h3>";

	foreach ($villains as $villain) {
		echo $villain . "\n";
	}

?>
</pre>





<!-- HTML & PHP MIX -->
<!-- <!DOCTYPE html>
<html>

<head>

	<title>BATMAN!</title>

</head>

<body>
	
	<?php

		// NA NA NA NA NA
		$villains = array ("Joker", "Penguin", "Two-face", "Catwoman", "Riddler", "Killer Croc", "Clayface");
		$villains[] = "Scarface";
		$villains[] = "Deadshot";

		sort($villains);

	?>

	<h3>Current Batman Villain count: <?php echo count($villains);l ?></h3>
	<ul style="list-style: none;">
	<?php 
		foreach ($villains as $villain) { ?>
			<li><?php echo $villain; ?></li>
	<?php	}
	?>

	<dl>
	  <dt>Coffee</dt>
	    <dd>Black hot drink</dd>
	  <dt>Milk</dt>
	    <dd>White cold drink</dd>
	</dl>

</body> -->

</html>

