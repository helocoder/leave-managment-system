<?php

    session_start();
        
       echo "session details:";
       echo "<br>";
       echo "Hello your are logged in with email: ". $_SESSION['email'] .
        "and Password : ". $_SESSION['pass'] ;
        
         echo '<br>
        <br>
        <a href ="logout2.php"> Logout</a>
        <br>
        <br>';


?>

