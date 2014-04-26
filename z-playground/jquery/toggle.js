console.log("start");

$("#title").hide().fadeIn('2400');

$( ".button" ).click( function() {
	$( "#cat" ).removeClass('.hidden');
	console.log("middle");
});

console.log("end");
