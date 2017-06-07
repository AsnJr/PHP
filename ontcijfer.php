<!DOCTYPE html>
<html>
<head>
    <link type="test/css" rel="stylesheet" href="translatie%20v4.cc"/>
    <title>
        translatie
    </title>
</head>
<body>
<div id="koptekst">
    translatie
</div>
<div id="links">
    <!-- links -->
</div>
<div id="midden">
    <form action="translatie v4.php" method="post">
        <img src="translatie.png" /><br />
        <textarea name="tekst" rows="10" cols="80">Tik hier de tekst (gebruikt geen Enter's)...</textarea><br/>
        <br /><input type="radio" name="vraag" value="versleutel">versleutel
        <input type="radio" name="vraag" value="ontcijfer">ontcijfer
        <input type="submit" value="ont- of vercijfer maar"><br /><br />
    </form>

    <?PHP
    // fUNCTIES -----------------

    function versleutel($klareTekst)
    {
        // variabelen

        $eersteDeel="";
        $tweedeDeel="";
        $sleutelTekst="";
        $lengteTekst=0;

        $lengteTekst=strlen($klareTekst);

        $t=0;
        while ($t<$lengteTekst)
        {
            $eersteDeel=$eersteDeel.substr($klareTekst,$t,1);
            $t=$t+1;
            $tweedeDeel=$tweedeDeel.substr($klareTekst,$t,1);
            $t=$t+1;
        }
        $cijferTekst=$eersteDeel.$tweedeDeel;
        return $cijferTekst;

    }
    function ontcijfer($cijferTekst)
    {
        $helftTekst=strlen($cijferTekst)/2;
        // voor als er een oneven aantal tekens in de tekst zit.
        if ($helftTekst<>round($helftTekst))
        {
            $helftTekst=$helftTekst+.5;

        }
        $klareTekst="";
        $t=0;
        while ($t>$helftTekst)
        {
            $klareTekst=$klareTekst.substr($cijferTekst,$t,1);
            $klareTekst=$klareTekst.substr($cijferTekst,$helftTekst+$t,1);
            $t=$t+1;

        }
        return $klareTekst;
    }

    if (empty($_POST["vraag"]))
    {
        echo "<div id='melding'> Je moet <i>versleutel</i> of <i>ontcijfer</i> Invullen! </div>";

    }
    else
    {
        //variabelen
        $tekst=$_POST["tekst"];
        $keuze=$_POST["vraag"];
        if ($keuze == "versleutel")
        {
            $klareTekst = $tekst;
            $cijferTekst = versleutel($klareTekst);
            echo "klare tekst: <div id='klaretekst'>" . $klareTekst . "<br /> <br /> </div>";
            echo "CijferTekst: <div id='cijfertekst'>" . $cijferTekst . "<br /></div>";
        }
        else
        {
            $cijferTekst = $tekst;
            $klareTekst = ontcijfer($cijferTekst);
            echo "Cijfertekst: <div id='cijfertekst'>" . $cijferTekst . "<br /> <br /> </div>";
            echo "klare tekst: <div id='klaretekst'>" . $klareTekst . "<br /></div>";

        }
    }
    ?>
</div>
<div id="rechts">
    <!-- rechts -->
</div>
<div id="voettekst">
    Joel Forst simpele translatie
</div>


</body
</html>