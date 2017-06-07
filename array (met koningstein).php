<?php

/*
for (startwaarde; voorwaarde; verhoging) {

}

while(voorwaarde) {

}

*/

// $i++ => $i = $i + 1;
// $i-- => $i = $i - 1;

/*
for ($i = 1; $i <= 10; $i++) {
    print "waarde i = ".$i."<br>";
}

*/

/*
$i = 11;
do {
    print $i;
    $i++;
}while($i<=10);
*/
//print $i;

/*
$klassen = ["aow1a", "aow1b", "aow1c"];
foreach($klassen as $value){
    print $value."<br>";
}



$klassen = array ("aow1a" => array("Jan", "Piet"),
    "aow1b" => array("Klaas", "Mohammed"));
// var_dump($klassen);

$leerlingen = array ("Naam" => "Jan",
                     "adres" => "Hoofdstraat 5");

foreach($klassen as $key => $value) {
    print "<h1>".$key. "</h1>";
    foreach ($value as $key => $waarde) {
        print $waarde . "<br/>";
    }
}
*/

$auto = array("sportauto" => array(
                                "Ferrari",
                                "Lamborghini",
                                "Bugatti"
                                  ),
              "cabrio" => array(
                            "Mercedes",
                            "Audi"
                               ),
              "ouwelullenwagen" => array(
                                    "Volvo"
                                        )


);
//var_dump($auto);

foreach($auto as $key => $value){
    print "<h1> $key</h1>";
    foreach($value as $key => $waarde){
            print $waarde . "<br/>";
    }
}

?>