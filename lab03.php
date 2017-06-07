/**
 * Created by PhpStorm.
 * User: WangHo
 * Date: 8-11-2016
 * Time: 14:09
 */

/**
* Created by PhpStorm.
* User: WangHo
* Date: 8-11-2016
* Time: 13:40
*/
<!doctype html>
<html lang="nl">
<head>
    <title>Mijn php-script</title>
</head>
<body>
<h3>php lab 03</h3>
<?php
$toshiba["merk"] = " Toshiba Satellite ";
$toshiba["model"] = " A100 ";
$toshiba["os"] = " Windows XP ";
$toshiba["voorraad"] = " 80 ";
$toshiba["prijs"] = " 999 ";

$acer["merk"] = " Acer Aspire ";
$acer["model"] = " 5732Z ";
$acer["os"] = " Linux ";
$acer["voorraad"] = " 0 ";
$acer["prijs"] = " --- ";

if ($acer["voorraad"]<=0)
{$acer["drukvoorraad"] ="uit voorraad";}
else
{$drukvoorraad =$acer["voorraad"];}


$hp["merk"] = " HP ";
$hp["model"] = " 200X ";
$hp["os"] = " Vista ";
$hp["voorraad"] = " 50 ";
$hp["prijs"] = " 777 ";

$totaal=$totaal=$toshiba["prijs"] + $acer["prijs"] + $hp["prijs"] ;

echo("<table border='1'> " .
    "<Caption>
 <strong>SML laptops</strong>
 </Caption>
 <thead>
 <tr><th>Merk</th><th>Model</th><th>Operating system
 </th><th>Voorraad</th><th>Prijs</th></tr>
 </thead>
 <tbody>
 <tr>
<td>" .      $toshiba["merk"]. "</td>" .
    "<td>" . $toshiba["model"] ."</td>" .
    "<td>" . $toshiba["os"] ."</td>" .
    "<td>" . $toshiba["voorraad"] . "</td>" .
    "<td>" . $toshiba["prijs"] . "</td>" .
    "</tr>
 
<tr>
<td>" .      $acer["merk"]. "</td>" .
    "<td>" . $acer["model"] ."</td>" .
    "<td>" . $acer["os"] ."</td>" .
    "<td>" . $acer["drukvoorraad"] . "</td>" .
    "<td>" . $acer["prijs"] . "</td>" .
    "</tr>
<td>" .      $hp["merk"]. "</td>" .
    "<td>" . $hp["model"] ."</td>" .
    "<td>" . $hp["os"] ."</td>" .
    "<td>" . $hp["voorraad"] . "</td>" .
    "<td>" . $hp["prijs"] . "</td>" .
    "</tr>
 
<tfoot>
<tr><td colspan='4'>Totaal</td><td>" . $totaal . "
</td></tr></tfoot></table>");



?>
</body>
</html><?php
