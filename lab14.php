<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset= "UTF-8">
    <title>
        XXL COMPUTER WINKEL
    </title>
</head>
<body>
<h3>php lab 14</h3>
<table border=0 cellpadding=0 cellspacing=0 width=100%>
    <form name="orderform" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <tr>
            Korting <br />
            <input type="checkbox" name="korting15" value="15%">Student - 15% <br />
            <input type="checkbox" name="korting10" value="10%">Senior - 10% <br />
            <input type="checkbox" name="korting5" value="5%">Klant - 5% <br />
        </tr>
        <hr />
        Betalingswijze:
        <input type="radio" name="betaalwijze" title="wijzepaypal"
               value="Paypal" required>
        <label for="paypal">Paypal</label>

        <input type="radio" name="betaalwijze" title="wijzemastercard"
               value="Mastercard" required>
        <label for="mastercard">Mastercard</label>

        <input type="radio" name="betaalwijze" title="wijzevisa"
               value="Visa" required>
        <label for="visa">Visa</label>
        <hr />
        <tr>
            <td>
                <img src="toshiba.jpg" alt="toshiba laptop"  style=width:300px;height:250px />
            </td>
        </tr>
        <tr>
            <td>
                Toshiba Satellite A100-510 Basisprijs €999,99
            </td>
        </tr>
        <tr>
            <td>
                Operating system:
                <input type="hidden" name="toshibaproduct" value="001" />
                <input type="hidden" name="toshibamerk" value="Toshiba" />
                <input type="hidden" name="toshibamodel" value="Satellite A100-510" />

                <select name = "toshibaos">
                    <option value="xp">     XP </option>
                    <option value="vista">     Vista </option>
                    <option value="linux">     Linux </option>
                </select>


                Aantal: <input type="text" size=2 maxlength=3 name="toshibaaantal" value="0" />
                <input type="hidden" name="toshibaprijs" value="999.99" />
                <input type="submit" name="button" value="bestel">

                <hr />
            </td>
        </tr>

        <tr>
            <td>
                <img src="http://picscdn.redblue.de/doi/pixelboxx-mss-69225831/fee_786_587_png/ACER-Aspire-ES1-571-32EE" style=width:300px;height:250px />
            </td>
        </tr>
        <tr>
            <td>
                Acer Aspire 5735Z	-	Basisprijs : 529.99
            </td>
        </tr>
        <tr>
            <td><!--Shopping Cart Begin van Acer-->
                Operating system:
                <input type="hidden" name="acerproduct" value="001" />
                <input type="hidden" name="acermerk" value="Acer" />
                <input type="hidden" name="acermodel" value="Aspire 5735Z" />

                <select name="aceros">
                    <option value="xp">Windows Xp</option>
                    <option value="vista">Windows Vista</option>
                    <option value="linux">Linux</option>
                </select>



                Aantal: <input type="text" size=2 maxlength=3 name="aceraantal" value="0" />
                <input type="hidden" name="acerprijs" value="529.99" />
                <input type="submit" name="button" value="bestel">
            </td><!--Shopping Cart End-->
        </tr>
</table>
</form>

<?php
// laden functies
include("bestellingfunctiees.php");
include("formfunctiess.php");

//berekening korting
$korting = 0;
if(isset($_POST["korting15"]) || isset($_POST["korting10"]) || isset($_POST["korting5"]))
{

    if(isset($_POST["korting15"]))
    {
        $korting = $korting + 15;
    }
    if(isset($_POST["korting10"]))
    {
        $korting = $korting + 10;
    }
    if(isset($_POST["korting5"]))
    {
        $korting = $korting + 5;
    }
    echo "Korting is: $korting%" . "<br><br>";
}
//Bereken totaal bedrag
$toshibaaantal=0;

if (isset ( $_POST["toshibaaantal"]))
{$toshibaaantal = $_POST["toshibaaantal"];}

$totaalbedrag = $toshibaaantal * 999.99;

echo ("totaalbedrag: " . $totaalbedrag . "<br>");
$totaalbedrag = $totaalbedrag-($totaalbedrag/100 * $korting);
echo ("<br />Het totaalbedrag met korting is : € ".$totaalbedrag."<br />");

//bereken de kredietlimiet
if ($totaalbedrag > 5000)
{
    echo (  "<br /> Kredietlimiet bereikt --- Je bestelling mag
				         maximaal €5000,00 bedragen.  <br />"
    );
}
else
{
    echo ( "<br /> De kredietlimiet is nog niet bereikt
				        --- Je bestelling mag maximaal €5000,00 bedragen. <br /> "
    );
}

//Bereken totaal bedrag
$toshibaaantal=0;

if (isset ( $_POST["aceraantal"]))
{$toshibaaantal = $_POST["aceraantal"];}

$totaalbedrag = $toshibaaantal * 999.99;

echo ("totaalbedrag: " . $totaalbedrag . "<br>");
$totaalbedrag = $totaalbedrag-($totaalbedrag/100 * $korting);
echo ("<br />Het totaalbedrag met korting is : € ".$totaalbedrag."<br />");

//bereken de kredietlimiet
if ($totaalbedrag > 5000)
{
    echo (  "<br /> Kredietlimiet bereikt --- Je bestelling mag
				         maximaal €5000,00 bedragen.  <br />"
    );
}
else
{
    echo ( "<br /> De kredietlimiet is nog niet bereikt
				        --- Je bestelling mag maximaal €5000,00 bedragen. <br /> "
    );
}


//Betalingswijze
$betaalwijze="geen";
if (isset ($_POST["betaalwijze"]))
{$betaalwijze = $_POST["betaalwijze"];
}

echo ("<br /> Uw betaling wordt behandeld via: ". $betaalwijze . "<br />");


switch ($betaalwijze)
{
    case "paypal":
        echo ("Uw betaling wordt behandeld via Paypal");
        break;
    case "mastercard";
        echo ("Uw betaling wordt behandeld via Mastercard");
        Break;
    case "Visa";
        echo ("Uw betaling wordt behandeld via Visa");
        Break;
}

//controlen beschikbaarheid
if (isset($_POST['os']))
{
    $os=$_POST['os'];
    $b = beschikbaarheid("Toshiba", $os);
    if ($b===false)
    {echo "Deze laptop is niet beschikbaar met het "
        .$os. " besturingssyteem.";}
    else
    {echo "Deze laptop is niet beschikbaar";}

}

//controlen beschikbaarheid
if (isset($_POST['os']))
{
    $os=$_POST['os'];
    $b = beschikbaarheid("Acer", $os);
    if ($b===false)
    {echo "Deze laptop is niet beschikbaar met het "
        .$os. " besturingssyteem.";}
    else
    {echo "Deze laptop is niet beschikbaar";}

}


bestellingoverzicht()

?>
</td>
</tr>
<form name="klantgegevens", action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <table border="1">
        <tr>
            <td colspan="2">
                <b>Factuur klantgegevens</b>
            </td>
        </tr>
        <tr>
            <td width="100">Naam: </td>
            <td><input type="text" name="naam" size="55"></td>
        </tr>
        <tr>
            <td>Adres: </td>
            <td><input type="text" name="adres" size="55"></td>
        </tr>
        <tr>
            <td>Woonplaats: </td>
            <td>
                <input type="text" size="34" name="woonplaats">
                Postcode: <input type="text" size="6" name="postcode">
            </td>
        </tr>
        <tr>
            <td>e-mail: </td>
            <td><input type="text" size="55" name="email"></td>
        </tr>
        <tr>
            <td>Feedback: </td>
            <td><textarea cols="40" rows="33" name="commentaar"></textarea>></td>
        </tr>
    </table>
    <input type="submit" name="checkout" value="Checkout">
</form>
<?php
if(isset($_POST['checkout']))
{
    emailcheck();
    postcodecheck();
    commentaarevalueren();
}
?>
</table>
</body>
</html>
