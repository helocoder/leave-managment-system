<!---||||||||||||||||||||| Form|||||||||||||||||||||-->    
    <div class="container ">
     <h1 class = "text-center " style="color:#0d6efd";>Signup for continue </h1>

     <form action="form.php"  method="POST" style="display: flex;
    flex-direction: column;
    align-items: center;">
 
 
 <div class="mb-3 col-md-6" >
    <label for="nam" class="form-label">Name</label>
    <input type="name" class="form-control" id="nam" name="nam">
    <br>
     <br>
  
  </div>

   <div class="mb-3 col-md-6" >
    <label for="age" class="form-label">Age</label>
    <input type="date" class="form-control" id="age" name="age">
     <br>
     <br>
  
  </div>


  <div class="mb-3 col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name = "password">
    <br>
     <br>
  
  </div>



<div class="group-link">

    <div class="session">
        <a href ="session_details.php"> Session_details</a>
        <br>
        <br>
    </div>

    <div class="logout">
        <a href ="logout.php"> Logout</a>
        <br>
        <br>
</div>

    <div class="login">
        <a href ="login.php"> login</a>
        <br>
        <br>
</div>
    
</div>

  <button type="submit" class="btn btn-primary col-md-6" name = "signup">Save</button>
</form>

<!-- session init -->
<?php
if(isset($_POST["signup"]))
{
session_start();
$uname = $_POST["nam"];
$password = $_POST["password"];

$_SESSION['name'] = "$uname";

$_SESSION['pass'] = "$password";

    echo "Data Saved :)";
    echo "<br>";
}


?>
