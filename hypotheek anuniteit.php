/**
 * Created by PhpStorm.
 * User: WangHo
 * Date: 27-1-2017
 * Time: 10:46
 */

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset=utf-8>
    <meta name=description content="beschrijving van de webpagina">
    <meta name=keywords content="trefwoorden, gescheiden, door, komma's">
    <title>Hypotheek opdracht</title>
    <style>section {float: left; margin-right: 16px;}</style>
</head>
<body>
<h3>hypotheek anuniteit</h3>
<section>
<?php

$aantalJaren = 25;
$periode = 12;
$termijnen = $aantalJaren * $periode;
$jaarRente = 4;
$hypotheekbedrag = 165000;
$rente = $jaarRente / 100;
$maandRente = $rente / $periode;
$termijnaflossing = ($hypotheekbedrag * $maandRente)/(1-(pow(1+$maandRente, -$termijnen )));
$afbetaling = $termijnaflossing;


echo "<table border=1 class=\"tabel2\">"
    . "<caption>"
    . "<strong>annuiteiten hypotheek</strong>"
    . "</caption>"
    . "<thead><tr>"
    . "<th>maand</th>"
    . "<th>afbetaling</th>"
    . "<th>rest</th>"
    . "<th>begin principal</th>"
    . "<th>aflossing</th>"
    . "<th>rente</th>"
    . "<th>termijnbedrag</th></tr>"
    . "</thead>"
    . "<tbody>";

$beginPrincipal = $hypotheekbedrag;

for ($maand=1; $maand <= $termijnen ; $maand++) {
    $tablerow = "<tr>";
    $berekendeRente = $maandRente * $beginPrincipal;
    $aflossing = $termijnaflossing - $berekendeRente;
    $rest = $beginPrincipal - $aflossing;
    $termijnbedrag = $termijnaflossing;
    $tablerow = $tablerow . "<td>" . $maand  . "</td><td>" .
        number_format($afbetaling,2,',','.') . "</td><td>" .
        number_format($rest,2,',','.') ."</td><td>" .
        number_format($beginPrincipal,2,',','.') ."</td><td>"
        .   number_format($aflossing,2,',','.') ."</td><td>" .
        number_format($berekendeRente,2,',','.') . "</td><td>" .
        number_format($termijnbedrag,2,',','.') . "</td>";
    $afbetaling = $afbetaling + $termijnaflossing;
    $tablerow = $tablerow . "</tr>";
    echo $tablerow;
    $beginPrincipal = $rest;


}

echo "</tbody></table>";



?>
</body>
</html>
