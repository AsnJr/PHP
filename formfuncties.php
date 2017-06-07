<?php
  $email = $_POST["email"];
  $naam = $_POST["naam"];
  $adres = $_POST["adres"];
  $plaats = $_POST["woonplaats"];
  $postcode = $_POST["postcode"];
  $commentaar = $_POST["commentaar"];
  $positief = array("goed", "positief");
  $negatief = array("beter", "slecht");
  function emailcheck()
  {
    global $email;
    if (preg_match('/^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9_\-\.]+\.[a-z-A-Z]{2,3}+$/i' , $email))
    {
      echo ("<br> email adres is correct");
      return(true);
    }
    else {
      echo ("<br> email adres is niet geldig!");
      return(false);
    }
  }

  function postcodecheck()
  {
    global $postcode;
    if (preg_match('/^[0-9]+[A-Z]+$/i' , $postcode))
    {
      echo ("<br> postcode is correct");
      return(true);
    }
    else {
      echo ("<br> postcode is niet geldig!");
      return(false);
    }
  }

  function commentaarevalueren()
  {
    if ($positief > $negatief)
    {
      echo "Commentaar is positief";
      echo "<br> Aantal positieve woorden is: ";
      echo "<br> Aantal negatieve woorden is: ";
    }
    elseif ($positief = $negatief)
    {
      echo "Commentaar is neutraal";
      echo "<br> Aantal positieve woorden is: ";
      echo "<br> Aantal negatieve woorden is: ";
    }
    elseif ($positief < $negatief)
    {
      echo "Commentaar is negatief";
      echo "<br> Aantal positieve woorden is: ";
      echo "<br> Aantal negatieve woorden is: ";
    }
  }
?>
