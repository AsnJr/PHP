/**
 * Created by PhpStorm.
 * User: WangHo
 * Date: 8-11-2016
 * Time: 13:21
 */

<!doctype html>
<html lang="nl">
<head>
    <title>Mijn php-script</title>
</head>
<body>
<h3>arrays</h3>
<?php
$weekdag =array("maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag","zondag");
echo("De eerste dag is:" . $weekdag[0]."<br />");
echo("De eerste dag is:" . $weekdag[1]."<br />");
echo("De eerste dag is:" . $weekdag[2]."<br />");
echo("De eerste dag is:" . $weekdag[3]."<br />");
echo("De eerste dag is:" . $weekdag[4]."<br />");
echo("De eerste dag is:" . $weekdag[5]."<br />");
echo("De eerste dag is:" . $weekdag[6]."<br />");

$prijs = array("melk"=>2.0, "koffie"=>3.50, "suiker"=>2);

echo($prijs["melk"] . "<br />");
echo($prijs["koffie"]. "<br />");
echo($prijs["suiker"]. "<br />");
?>
</body>
</html>