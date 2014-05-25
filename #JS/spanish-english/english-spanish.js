
// checks to see if spanish is hidden, if so, show spanish
// $(document).ready(function() {

// 	var currentlanguage = localStorage.getItem('userlanguage');

// 	if ( currentlanguage == "english" ) {

// 		$( ".spanish" ).addClass( "hidden" );
// 		$( ".english" ).removeClass( "hidden" );	
// 		console.log( "spanish" );
// 	} 

// 	else if ( currentlanguage == "spanish" ) {
// 		$( ".spanish" ).removeClass( "hidden" );
// 		$( ".english" ).addClass( "hidden" );hjbknkjvj
// 		console.log("english");
// 	} 

// 	else {
// 		localStorage.setItem('userlanguage','english');
// 	}

// });

	$(document).ready(function() {
		$(".button").click(function() {
		$( ".spanish" ).removeClass( "hidden" );
		$( ".english" ).addClass( "hidden" );
		console.log("spanish");
	  });
	});

// $(".button").click(function(){

// 	if ( $(".spanish").hasClass( "hidden" ) ) {
// 	// if ( currentlanguage = "english" ) { 
// 		$( ".spanish" ).removeClass( "hidden" );
// 		$( ".english" ).addClass( "hidden" );
// 		// localStorage.setItem('userlanguage','spanish');
// 		console.log("spanish");
// 	} 

// 	else {
// 		$( ".spanish" ).addClass( "hidden" );
// 		$( ".english" ).removeClass( "hidden" );
// 		// localStorage.setItem('userlanguage','english');
// 		console.log("english");		
// 	};

});