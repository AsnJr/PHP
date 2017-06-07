<?php

/*
string openssl_encrypt ( string $data , string $method , string $password
                            [, int $options = 0 [, string $iv = "" ]] )
*/

$klareTekst="morgen aanvallen";
$method="AES-256-CBC";
$wachtwoord="geheim";
$cijferTekst="";
$options = 0;
$iv="0000000000000000"; // 16 bytes verplicht

echo "klare tekst: "    .$klareTekst ."<br />";
echo "cijfermethode: " .$method ."<br />";
echo "wachtwoord: "    .$wachtwoord ."<br />";
echo "cijfertekst: "   .$cijferTekst ."<br />";
echo "opties: "        .$options ."<br />";
echo "init vector: "   .$iv ."<br />";

$cijferTekst = openssl_encrypt($klareTekst, $method, $wachtwoord, $options, $iv);

echo "cijfertekst: "    .$cijferTekst ."<br />";

$ontcijferTekst = openssl_decrypt ($cijferTekst, $method, $wachtwoord, $options, $iv);
echo "ontcijfertekst: " .$ontcijferTekst ."<br />";

?>