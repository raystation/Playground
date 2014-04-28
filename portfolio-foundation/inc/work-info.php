<?php 

//order of the portfolio pieces

$works = array(
	array( "name" => "The 3", 										"path" => "the3", 											"thumb" => "thumb.svg" ), //done
	array( "name" => "Indiginauts", 									"path" => "indiginauts", 									"thumb" => "thumb.jpg" ), //copy
	array( "name" => "100 Principles of Game&nbsp;Design", 		"path" => "100-principles-of-game-design", 			"thumb" => "thumb.jpg" ), //done
	array( "name" => "Storymaps", 									"path" => "storymaps",									"thumb" => "thumb.jpg" ), //copy
	array( "name" => "Abriendo Puertas",								"path" => "abriendo-puertas",							"thumb" => "thumb.jpg" ), //copy
	array( "name" => "Monkey Mo, Monkey&nbsp;Go!",		 		"path" => "monkey-mo",									"thumb" => "thumb.jpg" ), 
	array( "name" => "Scavenger Hunt", 								"path" => "scavenger-hunt",								"thumb" => "thumb.jpg" ), //done
	array( "name" => "Chronicles of Old&nbsp;London", 				"path" => "chronicles-of-old-london",					"thumb" => "thumb.jpg" ), //images
	array( "name" => "Sarah Walko ",									"path" => "sarah-walko-wordpress",						"thumb" => "thumb.jpg" ), //copy
	array( "name" => "Chronicles of Old&nbsp;Rome",			 	"path" => "chronicles-of-old-rome",						"thumb" => "thumb.jpg" ),
	array( "name" => "Animore", 										"path" => "animore", 										"thumb" => "thumb.jpg" ), //done
	array( "name" => "Edgeware", 									"path" => "edgeware",										"thumb" => "thumb.jpg" ), //copy
	array( "name" => "Art+Paris",										"path" => "art-and-paris",								"thumb" => "thumb.jpg" ),  //images
	// array( "name" => "idibon", 										"path" => "idibon",										"thumb" => "thumb.jpg" ),
	array( "name" => "Chronicles of Old New&nbsp;York", 			"path" => "chronicles-of-old-new-york",					"thumb" => "thumb.jpg" ),  //images
	array( "name" => "Color Chameleon", 							"path" => "color-chameleon",								"thumb" => "thumb.jpg" ), 
	array( "name" => "Malado Baldwin Wordpress", 					"path" => "malado-baldwin-wordpress",					"thumb" => "thumb.jpg" ),  //done
	array( "name" => "Egg Baby", 										"path" => "egg-baby",										"thumb" => "thumb.jpg" ),  //more images
	array( "name" => "Chronicles of Old New&nbsp;Boston", 			"path" => "chronicles-of-old-boston",					"thumb" => "thumb.jpg" ), //done
	array( "name" => "Chronicles of Old New&nbsp;Las Vegas", 		"path" => "chronicles-of-old-las-vegas",					"thumb" => "thumb.jpg" ), //done
	array( "name" => "City Style", 										"path" => "city-style",										"thumb" => "thumb.jpg" ), //done
	//array( "name" => "Tiger, Tiger, Tail on Fire!",					"path" => "temp",											"thumb" => "thumb.jpg" ),
	//array( "name" => "Arceus: Jewel of&nbsp;Life",					"path" => "temp",											"thumb" => "thumb.jpg" ),
	//array( "name" => "Mystery Dungeon 2", 						"path" => "temp",											"thumb" => "thumb.jpg" ),
	//array( "name" => "Battle Revolution", 							"path" => "temp",											"thumb" => "thumb.jpg" ),
	//array( "name" => "Pocket Pokedex", 							"path" => "temp",											"thumb" => "thumb.jpg" ),
	//array( "name" => "Pokemon 15th Anniv", 						"path" => "temp",											"thumb" => "thumb.jpg" ),
	array( "name" => "Malado Baldwin",								"path" => "malado-baldwin-indexhibit",					"thumb" => "thumb.jpg" ), //done
	//array( "name" => "Toy Fair", 									"path" => "temp",											"thumb" => "thumb.jpg" ),
	//array( "name" => "Featured Shops", 							"path" => "temp",											"thumb" => "thumb.jpg" )
);


//order of the projects

$projects = array(
	array( "name" => "Tesla", 																"path" => "", 																"thumb" => "thumb.jpg" ),
	array( "name" => "Palin comics", 													"path" => "", 													"thumb" => "thumb.jpg" ),
	array( "name" => "GIF Drawings", 													"path" => "", 													"thumb" => "thumb.jpg" ),
	array( "name" => "GIFS", 													"path" => "", 													"thumb" => "thumb.jpg" )
);

// fills in the div with links to the thumbnail and title

function workthumb() {

	global $works;
	$count = 1;

	foreach($works as $work){

	  //check to see if the count is divisible by 4 with no modulo
	  $test = $count / 4;

	  if ($count == 1) {
	    echo '<div class="row">';
	  }
	  echo '<div class="small-6 columns medium-3 portfolio-piece"><img src="img/' . $work["path"] . '/' . $work["thumb"]. '"></div>';
	  //echo '<div class="small-6 columns medium-3 portfolio-piece"><img class="scale-with-grid" src="http://placehold.it/500x400&text='. $count .'"></div>';

	  if ( is_int( $test ) ) {
	    echo '</div><div class="row">';
	  }

	  $count  = $count + 1;
	}
} 



