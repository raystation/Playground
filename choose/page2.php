
<?php 
	include('inc/header.php'); 
?>

	<div class="container">

		<?php 
			$_GET["action"];

			if ( $_GET["action"] == "bus" ) { ?>
						<p>
							You get onto the bus and realize that you don't recognize anybody. Most of the seats in the front are taken, but there are a few in the back where the big kids are sitting. The bus starts to move and you can hear your mom outside yelling and waving goodbye. You get a little embarrased. 
						</p>
						<p>
							You hear from the large woman in the front, "Please take a seat! The bus is moving!"
						</p>

						<ul class="choice center">
							<li><a href="#">sit in the front</a></li>
							<li><a href="page2.php?action=dead">take your chances in the back</a></li>
						</ul> 
						<?php 
			}

			else if ( $_GET["action"] == "hide") { ?>
						<p>
							You find a nice spot behind your neighbor's toolshed. You see the bus pull in, then out just as your mom is coming out with the camera. She snaps a quick photo and waves at the bus. Does she even care that I'm no on the bus?? Oh momm. Your mom thinks your went to school so she would never think to look for you here.
						</p>
						<p>
							You take a look at this lunch. There is a sandwich, a juice box and some crackers. 
						</p>
					

						<ul class="choice center">
							<li><a href="#">eat your lunch</a></li>
							<li><a href="#">see what your neighbors are doing</a></li>
						</ul> 
				<?php
			}

			else if ( $_GET["action"] == "dead" ) { ?>
				<p>
					You walk to the back of the bus and someone decides that they don't like you and hits you in the face with a lunch pail. 
				</p>

				<p class="the-end">The End.</p>

				<?php
			}
		?>
		


	</div>

</body>

</html>