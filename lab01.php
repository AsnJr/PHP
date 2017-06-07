
/**
 * Created by PhpStorm.
 * User: WangHo
 * Date: 2-11-2016
 * Time: 11:23
 */
<!doctype html>
<html lang="nl">
<head>
    <title>Mijn php-script</title>
</head>
<body>
<h3>php lab 01</h3>
<?php
$merk = " Toshiba Satellite ";
$model = " A100 ";
$os = " Windows XP ";
$voorraad = 80;
$prijs = 999;
$totaal = 0;
$totaal += $prijs;

$merk1 = " Acer Aspire ";
$model1 = " 57327 ";
$os1 = " Linux ";
$voorraad1 = 0;
$prijs1 = 888;
$totaal1 = 0;
$totaal1 += $prijs;
$totaal=$prijs+$prijs1 ;

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
<td>" . $merk . "</td>" .
"<td>" . $model ."</td>" .
 "<td>" . $os ."</td>" .
 "<td>" . $voorraad . "</td>" .
 "<td>" . $prijs . "</td>" .
 "</tr>
 
  <tr>
<td>" . $merk1 . "</td>" .
    "<td>" . $model1 ."</td>" .
    "<td>" . $os1 ."</td>" .
    "<td>" . $voorraad1 . "</td>" .
    "<td>" . $prijs1 . "</td>" .
    "</tr>
 
<tfoot>
<tr><td colspan='4'>Totaal</td><td>" . $totaal . "
</td></tr></tfoot></table>");

?>
</body>
</html>