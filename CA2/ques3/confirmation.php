<?php
                           //---------confirmation and mail script-------------//

       //Regex for email validation//
     $uemail = $_SESSION['email'];                       
    if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $uemail)){
          echo " Enter Vaid email";
      }
      else{
    // ---------------------------mail ----------------------//
            // $to = $uemail; // Send email to our user
            $to = 'vaidyaabhi3@gmail.com';
            $subject = 'Login alert'; // Give the email a subject 
            $message = 'You are successfull logged in :)';

          //  $header = 'From:vaidyaabhi3@gmail.com'.'\n'; //set from headers
           echo " mail($to,$subject,$message)"; // send our email //
     // ---------------------------mail ----------------------//

       echo "logged in successfully";
       echo "<br>";
       echo "<br>";
       echo "<br>";

       require 'uploadfile.php';
    
      }

   


?>