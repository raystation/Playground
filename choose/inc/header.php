

<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<title>CHOOSE!</title>

	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<!-- STYLESHEETS
	================================================== -->
	
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive-indicator.css">
	<!-- <link rel="stylesheet" href="http://basehold.it/29/"> -->


	<!-- FAVICON
	================================================== -->

	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>

<body>

	<nav>
		<div class="container">
			<logo><a href="index.php">CHOOSE!</a></logo>
			<ul>
				<li>instructions</li>
				<li>about</li>
			</ul>
		</div>
	</nav>
	
	<div class="responsive-indicator"></div>

	<?php 

		session_start();
		$action = "hi";

		date_default_timezone_set('America/Los_Angeles');

		$dayofweek = date('l');
		$month = date('F');
		$monthNo = date('n');
		$day = date('j');
		$year = date('o');

		$hour = date('G'); // military time
		$minutes = date('i');
		$AM = date('A');

		// time options

		if ( $hour < 12 ) {
			$timeofday = "morning";
		}

		elseif ( $hour >= 18 ) {
			$timeofday = "night";
		}

		else {
			$timeofday = "afternoon";
		}

		if ( isset($_SESSION['views']) ) {
			$_SESSION['views']=$_SESSION['views']+1; 
		}

		else {
			$_SESSION['views']=1;
		} 
?>

	<div class="debug">
		<?php 
			echo $hour . ":" . $minutes . "-" . $timeofday . " " . "Views=" . " " . $_SESSION['views']; 
		?>
	</div>
