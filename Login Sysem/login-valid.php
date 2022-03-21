<?php
 //connecting
require 'Db/conn.php';
global $conn;
$username = "";
$password = "";


if(isset($_POST["loglogin"]))
{
     $username = $_POST["logusrname"];
     $password = $_POST["logpassword"];
     
     $sql = "select * from user where email = '$username' and password = '$password' " ;
     $result = mysqli_query($conn,$sql);
     
     $num = mysqli_num_rows($result);
     $row = mysqli_fetch_assoc($result);
     if($num>0)
     {
         $sql_role = "select role from user where email = '$username' and password = '$password'";

         
         if($sql_role == 0)
         {

             echo "Hello ".$row['name']." (Admin)";

         }
         else 
         {

             echo "Hello ".$row['name']." (Employee)";
         }  
     }
       else {
             echo "user not found ";
             echo "<br>";
            }   


}






$sql

?>