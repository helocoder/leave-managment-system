<!---||||||||||||||||||||| Form|||||||||||||||||||||-->    
    <div class="container ">
     <h1 class = "text-center " style="color:#0d6efd";>Login </h1>

     <form action = "login3.php" method = "POST" style="display: flex;
    flex-direction: column;
    align-items: center;">
 
 
 <div class="mb-3 col-md-6" >
    <label for="nam" class="form-label">Name</label>
    <input type="name" class="form-control" id="nam" name="nam3">
    <br>
     <br>
  
  </div>

    <div class="mb-3 col-md-6">
    <label for="pwd" class="form-label">Password</label>
    <input type="password" class="form-control" id="pwd" name = "pwd3">
    <br>
     <br>
  
  </div>
  <button type="submit" class="btn btn-primary col-md-6" name = "log3">Login</button>
 
</form>

<!---||||||||||||||||||||| Form|||||||||||||||||||||--> 


<!-- session init -->
<?php
if(isset($_POST["log3"]))
{
session_start();
$uname = $_POST["nam3"];
$password = $_POST["pwd3"];

$_SESSION['email'] = "$uname";

$_SESSION['pass'] = "$password";

    echo "Data Saved :)";
    echo "<br>";
    if(isset($_POST['log3']))
   {
      if($_SESSION['email'] == $uname && $_SESSION['pass'] ==$password)
     {
          require 'confirmation.php';
         
     }

     else
     {
       echo "email or password missmatch :)";
       echo "<br>";
     }
   }
}


?>

