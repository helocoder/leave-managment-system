<?php
if(isset($_POST['log']))
{
    session_start();
    $password = $_POST["pwd"];
    $usrnam = $_POST["nam"];
    if($password == $_SESSION['pass'] && $usrnam == $_SESSION["name"])
    {
        
       echo "session details:";
       echo "<br>";
       echo "Hello Mr. ". $_SESSION['name'] .
        " and Password is ". $_SESSION['pass'] ;
     }
    
    else{
        echo "Username or Password missmatched :( ";
        echo "<br>";
    }
         echo '<br>
        <br>
        <a href ="logout.php"> Logout</a>
        <br>
        <br>';
}
else{
       echo "Please login to see session :( ";
        echo "<br>";
}

?>

