<?php

$conn = mysqli_connect("localhost","root","","lms");

if(isset($conn))
{
     echo '<div class="alert alert-sucess
      alert-dismissible fade show" role="alert">
     <strong>SuckSEX with get:) </strong> ready for Proceed.
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>';

}
else{
     echo '<div class="alert alert-danger
      alert-dismissible fade show" role="alert">
     <strong>Connection failed</strong>
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>';
}
?>