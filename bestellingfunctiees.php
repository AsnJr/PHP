
<?php
function beschikbaar($merk, $os)
{
// deze funtie heeft twee input parameters
// $merk verwijzt naar de erk-hash-array
// $os verwijzt naar de os-hash-array
// deze functie geeft de beschikbaarheid van de laptop met os terug
$beschikbaar = array
(
"Toshiba" => array
(
"xp" => true, "vista" => false, "linux" => true
),
"Acer" => array
(
"xp" => true, "vista" => true, "linux" => true
),
"Hp" => array
(
"xp" => true, "vista" => false, "linux" => false
)
);
return($beschikbaar[$merk][$os]);
}



function bestellingoverzicht()
{

$laptop["toshiba"] = "toshiba";
$laptop["acer"] = "acer";

$info[1] = "product";$info[2] = "merk";
$info[3] = "model";
$info[4] = "os";
$info[5] = "aantal";
$info[6] = "prijs";

echo "<br />
<table width='80%' border='1' >
<caption>
<strong> Bestellingoverzicht </strong>
</caption>
<thead>
<tr>
<th> Product	</th>
<th> Merk		</th>
<th> Model		</th>
<th> OS			</th>
<th> Aantal		</th>
<th> Basisprijs	</th>
</tr>
</thead>
<tbody>";

foreach($laptop as $key => $value)
{
$aantal = $value."aantal";
if($_POST[$aantal] == 0) continue;
$rij = "<tr>";
For($x = 1; $x <= sizeof($info); $x++)
{
$element = $value . $info[$x];
$rij = $rij . "<td>" . $_POST[$element] . "</td>";
}
$rij = $rij . "</tr>";
echo $rij;
}
echo "</tbody></table>";

/*
 $rij = "<tr>";
for($x=1; $x <= sizeof($info); $x++)
{
$rij = $rij . "<td>" . $_POST["toshiba".$info[$x]] ."</td>";
}
$rij = $rij . "<tr>";
echo $rij;
echo "</tbody></table>";
 */
}

?>
