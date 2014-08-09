<?php 
$rate = $_POST["rate"];
$working_hours = $_POST["hours"];

if (is_null($rate)){ $rate=15;}
if (is_null($working_hours)){ $working_hours=40;}

$weeks_in_month=4.345;
$working_hours_in_month=$working_hours*$weeks_in_month;

$pay_week=$working_hours*$rate;
$pay_month=$working_hours_in_month*$rate;
$pay_year=$pay_month*12;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>freelance</title>
	<style>
		.container {
			max-width: 600px;
			width: 100%;
			margin: 0 auto;
		}
	</style>
</head>
<body>
	
	<div class="container">
		<?php echo "<h1>Working $working_hours hours a week ($working_hours_in_month a month) at $$rate/hour, I would make $".number_format($pay_week)." a week ($".number_format($pay_month)." a month).</h1>";?>

		<form method="post" action="<?php echo $PHP_SELF; ?>">
			<input type="text" name="rate" value="<?php echo $rate;?>">hourly rate <br>
			<input type="text" name="hours" value="<?php echo $working_hours;?>">hours / week <br>
			
			<?php if ( is_null($rate) ) { $value="submit"; } else { $value="refresh"; } ;?>
			
			<p><input type="submit" value="<?php echo $value ;?>" name="<?php echo $value ;?>"></p>
		</form>

		<?php 
			echo "rate: $$rate/hour<br>";
			echo "hours: $working_hours/week<br>";
			echo "month pay: $".number_format($pay_month). "/month<br>";
			echo "year pay: $".number_format($pay_year). "/year<br>";
			echo "<p>There are $weeks_in_month weeks in a month.";
		?>
	</div>

	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>