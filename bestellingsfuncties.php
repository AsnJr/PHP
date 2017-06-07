<?php
function beschikbaarheid($merk, $os)
{

$beschikbaarheid = array(
"toshiba" => array(
"XP" => true, "vista" => false, "linux" => true),
"acer" => array(
"xp" =>  true, "vista" => true, "linux" => true),
"Hp" => array(
"Xp" => true,"vista" => false, "linux" => false)
);
return($beschikbaarheid[$merk][$os]);
}
?>
