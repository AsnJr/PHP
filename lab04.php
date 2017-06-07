<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        XXL COMPUTER WINKEL
    </title>
</head>
<body>
<h3>php lab 04</h3>
<table border=0 cellpadding=0 cellspacing=0 width=100%>
    <form name="orderform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <tr>
            Korting <br />
            <input type="checkbox" name="korting15" value="15%">Studenten - 15% <br />
            <input type="checkbox" name="korting10" value="10%">Ouderen - 10% <br />
            <input type="checkbox" name="korting5" value="5%">Klanten korting - 5% <br />
        </tr>
        <hr />
        <tr>
            <td>
                <img src="toshiba.jpg" alt="toshiba laptop"  style=width:300px;height:250px />
            </td>

        </tr>
        <tr>
            <td>Toshiba Satellite A100-510	Basisprijs 999.999</td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="toshibaproduct" value="001" />
                <input type="hidden" name="toshibamerk" value="Toshiba" />
                <input type="hidden" name="toshibamodel" value="Satellite A100-510" />
                Aantal: <input type="text" size=2 maxlength=3 name="toshibaaantal" value="0" />
                <input type="hidden" name="toshibaprijs" value="999.99" />
                <input type="image" src="bestel.jpg" style=width:100px;height:40px border=0 value="bestellen" />
            </td>
        </tr>
    </form>
</table>
<hr />
<?php
if(isset($_POST["korting15"]) || isset($_POST["korting10"]) || isset($_POST["korting5"]))
{
    $korting = 0;
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
    echo "Korting is: $korting%";
}
?>
</html><?php
/**
 * Created by PhpStorm.
 * User: WangHo
 * Date: 24-11-2016
 * Time: 14:21
 */ 