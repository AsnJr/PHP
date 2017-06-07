/**
* Created by PhpStorm.
* User: WangHo
* Date: 12-1-2017
* Time: 15:28
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
<h3>hypotheek aflossing</h3>
<section>
    <h4> maand </h4>

    <?php
    for($i = 0; $i <= 300; $i++){

        echo($i . "<br>");

    }
    ?>

</section>

<section>
    <h4> afbetaling </h4>

    <?php

    for($i = 0; $i <= 300; $i++){

        echo( $i * 550 . "<br>");

    }

    ?>

</section>
<section>
    <h4> rest </h4>

    <?php

    for($i = 300; $i >= 0; $i--){

        echo( $i * 550 . "<br>");

    }

    ?>

</section>

<section>
    <h4> rente </h4>

    <?php
    // REST X JAARRENTE / 1200

    for($i = 300; $i >= 0; $i--){

        $rest = $i * 550;
        $jaarrente = 4;

        echo( round( $rest * $jaarrente / 1200, 2) . "<br>");

    }


    ?>

</section>

<section>
    <h4> termijnbedrag </h4>

    <?php
    // afbetaling + rente

    for($i = 0; $i <= 300; $i++){

        $afbetaling = $i * 550;
        $rest = (300 - $i) * 550;
        $rente = $rest * 4 / 1200;

        echo( round($rente + 550, 2) . "<br>");

    }


    ?>



</section>


</body>
</html>