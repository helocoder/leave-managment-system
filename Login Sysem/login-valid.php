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
     $result = mysqli_query($conn,$result);
     
     $row = mysqli_nums_rows($result);
     if($row>0)
     {
         $sql_role = "select role from user where email = '$email' and password = '$password'";

         
         if($sql2 == 0)
         {

             echo "Hello"..

         }
        echo "user found "





     }


}






$sql

?>