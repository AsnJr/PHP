
/**
 * Created by PhpStorm.
 * User: WangHo
 * Date: 16-1-2017
 * Time: 13:12
 */
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset= "UTF-8">
    <title>
        XXL COMPUTER WINKEL
    </title>
</head>
<body>
<h3>php lab 12</h3>
<table border=0 cellpadding=0 cellspacing=0 >
    <form name="orderform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <tr>
            <td>gebruikersnaam:</td>
            <td><input type="text" name="user"  /></td>
            <td><input type="button" name="send" value="inloggen"  /></td>
        </tr>
    </form>
</table>

<?php
if(isset($_POST['user']))
{
    Include("cookiefuncties.php");
    welkom();
}
?>
</body>
</html>



