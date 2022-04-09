<?php
$department = $_POST["depart"];
echo "$department";



if(isset($_POST["logout"]))
{
$department = $_POST["depart"];
$from=$_POST["date-from"];
$To=$_POST["date-to"];
$Dol=$_POST["dol"];
$Leave_type=$_POST["leave-typ"];
$Leave_Reason=$_POST["date-to"];

    //  header("Location:logout.php");
    //  exit();

    //require 'logout.php';

   //echo "$Department "."$From "."$To "."$Dol "."$Leave_type "."$Leave_Reason";
   echo "log out";

}



?>