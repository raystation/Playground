<!DOCTYPE html>
<html>

<head>

	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="style.css">

	<script src="jquery.min.js"></script>
	
	<script>

		// window.onload = languagecheck;
		var language, $currentlanguage
		$currentlanguage = localStorage.getItem('language');

		if ( $currentlanguage == null ) {
			localStorage.setItem('language','english');	
			console.log( "no language was set. default language set to " + localStorage.getItem('language') );
			var $currentlanguage = localStorage.getItem('language');
		}

		else if ( $currentlanguage == 'spanish' ) {
			$( ".spanish" ).removeClass( "hidden" );
			$( ".english" ).addClass( "hidden" );
			console.log( "language checked. it's " + localStorage.getItem('language') );		
			var $currentlanguage = localStorage.getItem('language');
		}

		else if ( localStorage.getItem('language') == 'english' ) {
			$( ".spanish" ).addClass( "hidden" );
			$( ".english" ).removeClass( "hidden" );
			console.log( "language checked. it's " + localStorage.getItem('language') );
			var $currentlanguage = localStorage.getItem('language');
		} 

		else {
			console.log( "poop" );														
			var $currentlanguage = "poop";
		}

		function languagechange() {

			if ( $(".spanish").hasClass( "hidden" ) ) {
				$( ".spanish" ).removeClass( "hidden" );
				$( ".english" ).addClass( "hidden" );
				
				localStorage.setItem('language','spanish');
				console.log( "current language changed to " + localStorage.getItem('language') );
				var $currentlanguage = localStorage.getItem('language');
				return $currentlanguage;
			} 

			else {
				$( ".spanish" ).addClass( "hidden" );
				$( ".english" ).removeClass( "hidden" );

				localStorage.setItem('language','english');
				console.log( "current language changed to " + localStorage.getItem('language') );
				var $currentlanguage = localStorage.getItem('language');
				return $currentlanguage;
			}

		}

	</script>

</head>

<body>
