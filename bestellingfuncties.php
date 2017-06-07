<?php
function beschikbaarheid($merk, $os)
{
$beschikbaar = array(
"Toshiba" => array(
"xp" => true, "vista" => false, "linux" => true),
"Acer" => array(
"xp" => true, "vista" => true, "linux" => true),
"Hp" => array(
"xp" => true, "vista" => false, "linux" => false));
return($beschikbaar[$merk][$os]);
}
?>
<?php
function bestellingoverzicht()
{
$info[1] = "product";
$info[2] = "merk";
$info[3] = "model";
$info[4] = "os";
$info[5] = "aantal";
$info[6] = "prijs";
echo "<br />
<table width='80%' border='1' >
<caption>
<strong>Bestellingoverzicht</strong>
</caption>
<thead>
<tr><th>Product</th><th>Merk</th><th>Model</th><th>OS</th><th>Aantal</th><th>Basisprijs</th>
</tr>
</thead>
<tbody>";
$reij = "<tr>";
for($x=1; $x<=sizeof($info); $x++)
{
$reij = $reij . "<td>" .
$_POST["toshiba.$info[$x]"] . "</td>";
}
$reij = $reij . "</tr>";
echo $reij;
echo "</tbody></table>";
}
?>