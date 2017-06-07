<!DOCTYPE html>
<html lang="nl">
<head>
	<!--wang-ho shi-->
	<meta charset=utf-8>
	<meta name=description content="beschrijving van de webpagina">
	<meta name=keywords content="trefwoorden, gescheiden, door, komma's">
	<meta name="author" content="Kevin Esser">
	<link rel="stylesheet" href="Home.css">
	<title> LAB06 </title>
</head>
<body>
	<h3>php lab 06</h3>
	<h4>Reiskosten</h4>
		
	<?php
		function reiskosten($vertrek, $bestemming)
		{
			$reiskosten = array();
			$reiskosten[1] = array();
			$reiskosten[2] = array();
			$reiskosten[3] = array();
			$reiskosten[4] = array();
			
			$reiskosten[1][1] = 0;
			$reiskosten[1][2] = 30;
			$reiskosten[1][3] = 60;
			$reiskosten[1][4] = 90;
			
			$reiskosten[2][1] = 30;
			$reiskosten[2][2] = 0;
			$reiskosten[2][3] = 40;
			$reiskosten[2][4] = 20;
			
			$reiskosten[3][1] = 60;
			$reiskosten[3][2] = 40;
			$reiskosten[3][3] = 0;
			$reiskosten[3][4] = 20;
			
			$reiskosten[4][1] = 90;
			$reiskosten[4][2] = 20;
			$reiskosten[4][3] = 10;
			$reiskosten[4][4] = 0;
			
			echo ("De berekende reiskosten: " . $reiskosten[$vertrek][$bestemming] . " Euro's ");
		}
	?>
	
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		Vertrek: 
			<select name="Vertrek">
				<option value="1">Amsterdam</option>
				<option value="2">Utrecht</option>
				<option value="3">Den Haag</option>
				<option value="4">Rotterdam</option>
			</select>
		Bestemming: 
			<select name="Bestemming">
				<option value="1">Amsterdam</option>
				<option value="2">Utrecht</option>
				<option value="3">Den Haag</option>
				<option value="4">Rotterdam</option>
			</select>
		<br>
		<br>
		<input type="submit" name="button" value="berekenen">
	</form>
	<p>-------------------------------------------------------</p>
	<?php
		if(isset($_POST["Vertrek"]) && isset($_POST["Bestemming"]))
		{
			echo reiskosten($_POST["Vertrek"],$_POST["Bestemming"]);
		}
	?>
</body>
</html>