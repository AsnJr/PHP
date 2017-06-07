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
<?
$naam = "Carl";
$adres ="Kruislaan 111";
$woonplaats ="Utrecht";
$naw =$naam . $adres . $woonplaats;
//resultaat "Carl Kruislaan 111 Utrecht"
echo("Gegevens: $naw");
echo <<<EIND
Salaris specificatie<br />$maand: november $jaar:2010
$plaats:$woonplaats<br />
Algemene gegevens:
EIND;

$werkdagen = 5;
echo("<br />$werkdagen:" . $uurtarief);
//resultaat uurtarief is:13.432

printf("<br />$uurtarief is:" %.2f", $uurtarief);
//resultaat uurtarief is:13.43
?>
</body>
</html>