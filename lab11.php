<!DOCTYPE html>
<html lang="nl">
<head>
	<!DOCTYPE html>
	<html lang="nl">
	<head>
		<meta charset= "UTF-8">
		<title>

		</title>
	</head>
<body>
</head>
<body>
	<h3>PHP Lab 11 </h3>
	
	<?php
		$GLOBALS['url'] = "www.google.nl";
		// superglobale variabeele
		global $email;
		$email = "wanghoshi95@gmail.com";
		// globale variable
		
		define('ADRES', "Kruislaan 11"); 	//constate
		define('BTW', 0,19);				//constate
		
		echo $email;

		function show()
		{
			global $email;
				//maak de globale variabele hier zichtbaar
			echo "</br>URL: " . $GLOBALS['url'];
			echo "</br>email: " . $email;
		}
		
		function showbezoekers()
		{
			static $aantalbezoekers;
				//static variabele binnen functie
			$aantalbezoekers++;
			echo "</br>Aantal Bezoekers: " . $aantalbezoekers;
		}
		
		show();
		showbezoekers();
		showbezoekers();
		aboutus();

		
		
		function aboutus()
		{
			$bedrijfsnaam = "XXL Computers";
			$bedrijfsadres = "wangshi land 123";
			$telefoonnummer = "0101234567";
			
			echo "</br></br></br> About Us";
			echo "</br>" . $bedrijfsnaam;
			echo "</br>" . $bedrijfsadres;
			echo "</br>" . $telefoonnummer;
		}
	?>
</body>
</html>