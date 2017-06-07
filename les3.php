/**
* Created by PhpStorm.
* User: WangHo
* Date: 2-11-2016
* Time: 10:45
*/

<!doctype html>
<html lang="nl">
<head>
    <title>Mijn php-script</title>
</head>
<body>
<h3>Variabelen</h3>
<?php
$breedte = 10;
$lengte = 10;
$hoogte = 5;
$oppervlakte = $lengte * 2*$breedte;
$volume = $oppervlakte * $hoogte;
echo("Oppervlakte is:" . $oppervlakte . "<br />");
echo("Volume is:" . $volume . "<br />");
echo("Half volume is:" . $volume / 2 . "<br />");
?>

</body>
</html>