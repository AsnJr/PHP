/**
 * Created by PhpStorm.
 * User: WangHo
 * Date: 23-1-2017
 * Time: 12:55
 */

<?php

/*

De getallen zeggen of je gewonnen, verloren of gelijk heb gespeeld

(0) = Verloren
(1) = Gewonnen
(2) = Gelijkspel

De getallen van steen, papier en schaar.

(0) = Steen
(1) = Schaar
(2) = Papier

*/


function spelen($speler_1, $speler_2, $gewonnen = array(1, 2, 0)){

    return ($speler_1 != $speler_2) ? ($gewonnen[$speler_1] == $speler_2) ? 1 : 0 : 2 ;

}

if (isset($_POST['submit'])){

    $ik = $_POST['keuze'];
    $computer = rand(0, 2);

    echo '<strong>';
    echo 'De computer had ';

    if ($computer == 0){
        echo 'steen';
    }elseif ($computer == 1){
        echo 'schaar';
    }elseif ($computer == 2){
        echo 'papier';
    }


    echo ' en ik had ';

    if ($ik == 0){
        echo 'steen';
    }elseif ($ik == 1){
        echo 'schaar';
    }elseif ($ik == 2){
        echo 'papier';
    }

    echo '</strong>';
    echo '<br /><br />';

    if(spelen($ik, $computer) == 0){
        echo '<span style="color: red;">Verloren</span>';
    }elseif(spelen($ik, $computer) == 1){
        echo '<span style="color: green;">Gewonnen</span>';
    }elseif(spelen($ik, $computer) == 2){
        echo '<span style="color: black;">Gelijkspel</span>';
    }

    echo '<br /><br />';
    echo '<a href="' . $_SERVER['PHP_SELF'] . '">Speel nog eens!</a>';

}else{

    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <h3>Steen, papier, schaar!</h3>
        <br />

        Maak je keuze:
        <br /><br />

        <select name="keuze">
            <option value="0">Steen</option>
            <option value="1">Schaar</option>
            <option value="2">Papier</option>
        </select>

        <br />

        <input type="submit" name="submit" value="Ok!">

    </form>

    <?php

}

?>

