<?php

global $conn;
 $name = "";
 $username = "";
 $password = "";
 $cpassword = "";

      //connection.....//  
   require 'conn.php';


 if(isset($_POST["signup"]))
 {


     if(isset($_POST["btnemp"]))
     {
         $name = $_POST["nam"];
         $username = $_POST["usrname"];
         $password = $_POST["password"];
         $cpassword = $_POST["cpassword"];

         if($password == $cpassword)
         {
             $sql = "INSERT INTO `employee` (`id`, `name`, `email`, `password`) VALUES (NULL, '$name', '$username', '$password')";
             $result = mysqli_query($conn,$sql);
        }
            else{
                echo "Enter Same Password";
                echo "<br>";
            }
            
    }
        
        // Admin table //
        
        if(isset($_POST["btnadm"]))
        {
            $name = $_POST["nam"];
            $username = $_POST["usrname"];
            $password = $_POST["password"];
            $cpassword = $_POST["cpassword"];
            
            if($password == $cpassword)
            {
                $sql = "INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES (NULL, '$name', '$username', '$password')";
                $result = mysqli_query($conn,$sql);
            }
            else{
                 echo "Enter Same Password";
                 echo "<br>";
                }
   

        }
        else{
            echo " Selct Your Role :( ";
            echo "<br>";
        }
 
}

?>