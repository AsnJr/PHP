	<?php
		function welkom()
    {
        global $user;
        $user = $_POST["user"];

        if($user != "wang")
        {
            setcookie("wang", "wangshi");
            echo "Welkom <strong>" . $_POST["user"] . "</strong> ,dit is je eerste bezoek";
        }
        elseif(isset($_COOKIE["wang"]))
         {
            echo "Hallo <strong>" . $_COOKIE["wang"] . "</strong>. Welkom terug bij de XXL Computers website.";
        }
    };
	?>