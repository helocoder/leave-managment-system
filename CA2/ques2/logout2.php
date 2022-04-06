<?php

session_start();

session_unset();

session_destroy();
echo "Logout Successfull:)";
echo "<br>";

         echo '<br>
        <br>
        <a href ="login2.php"> Login</a>
        <br>
        <br>';
         
         echo '<br>
        <br>
        <a href ="session_data.php"> Session data </a>
        <br>
        <br>';
      
?>