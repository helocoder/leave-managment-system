<?php

global $conn;
 $name = "";
 $username = "";
 $password = "";
 $cpassword = "";

 $role  = false;

      //connection.....//  
   require 'conn.php';


 if(isset($_POST["signup"]))
 {
        $name = $_POST["nam"];
         $username = $_POST["usrname"];
         $password = $_POST["password"];
         $cpassword = $_POST["cpassword"];

     if(isset($_POST["btnemp"]))
     {
         $role = true;

         if($password == $cpassword)
         {
             $sql = "INSERT INTO `user` (`id`, `name`, `email`, `password`,`role`) VALUES (NULL, '$name', '$username', '$password','$role')";
             $result = mysqli_query($conn,$sql);
        }
            else{
                echo "Enter Same Password";
                echo "<br>";
            }
            
    }
        
        // Admin //
        
        else if(isset($_POST["btnadm"]))
        {
            $role = false;

            if($password == $cpassword)
            {
                $sql = "INSERT INTO `user` (`id`, `name`, `email`, `password`,`role`) VALUES (NULL, '$name', '$username', '$password','$role')";
                $result = mysqli_query($conn,$sql);
            }
            else{
                 echo "Enter Same Password";
                 echo "<br>";
                }

        }
        else{
            echo " Select Your Role :( ";
            echo "<br>";
        }
 
}

?>