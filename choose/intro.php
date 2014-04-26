
<?php 
	include('inc/header.php'); 
?>

	<div class="container">
		
		<p>
			It's your first day of school! Your mom gets your clothes ready as you start to brush your teeth. You are super nervous about school! What sort of people will you meet? Will they be mean like your neighbor Alex who always takes your toys? When will you get to see your mom again? This is scary. You walk up your driveway and look around. No bus yet. "Oh, I forgot the camera!" Your mom runs back inside. 
		</p>
		<p> 
			As you see the school bus approaching, you get super scared. 

			<?php if ( $timeofday == "afternoon" ) { ?>I wonder what my mom packed for lunch? I could just <a href="#">sneak into our neighbor's yard and eat it</a>. <?php ;}?>

			<?php if ( $timeofday == "night" ) { ?>You can't take this anymore. You <a href="#">hide out in the forest</a> until school's over.<?php ;}?> 
		</p>

		<ul class="choice center">
			<li><a href="page2.php?action=bus">get on the bus</a></li>
			<li><a href="page2.php?action=hide">go hide in the backyard</a></li>
		</ul>

	</div>

</body>

</html>