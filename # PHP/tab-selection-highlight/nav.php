<!DOCTYPE html>
<html>

<head>

	<title><?php echo $pageTitle; ?></title>

	<style>

		.active {
			background-color: purple;
		}

		.active a {
			color: white;
		}

		nav div {
			background-color: tomato;
			display: inline-block;
			padding: 5px;
		}

	</style>

</head>

<body>

	<nav>
		<div class="button<?php if ( $pageTitle == "test1" ) { echo " active"; } ?>"><a href="test1.php">button1</a></div>
		<div class="button<?php if ( $pageTitle == "test2" ) { echo " active"; } ?>"><a href="test2.php">button2</a></div>
	</nav>

