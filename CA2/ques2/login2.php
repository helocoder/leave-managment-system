<!---||||||||||||||||||||| Form|||||||||||||||||||||-->    
    <div class="container ">
     <h1 class = "text-center " style="color:#0d6efd";>Login </h1>

     <form action = "login2.php" method = "POST" style="display: flex;
    flex-direction: column;
    align-items: center;">
 
 
 <div class="mb-3 col-md-6" >
    <label for="nam" class="form-label">Name</label>
    <input type="name" class="form-control" id="nam" name="nam2">
    <br>
     <br>
  
  </div>

    <div class="mb-3 col-md-6">
    <label for="pwd" class="form-label">Password</label>
    <input type="password" class="form-control" id="pwd" name = "pwd2">
    <br>
     <br>
  
  </div>
  <button type="submit" class="btn btn-primary col-md-6" name = "log2">Login</button>
  
      <div class="session">
        <a href ="session_data.php"> Session data</a>
        <br>
        <br>
      </div>
</form>

<!---||||||||||||||||||||| Form|||||||||||||||||||||--> 

<?php
session_start();

    if(isset($_POST['log2']))
   {
      $uname = $_POST['nam2'];
      $password = $_POST['pwd2'];

       $_SESSION['email'] = "$uname";
       $_SESSION['pass'] = "$password";

    echo "Data Saved :)";
    echo "<br>";
      if($_SESSION['email'] == $uname && $_SESSION['pass']==$password)
     {
            if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $uname))
            {
             echo " Enter Vaid email";
             echo "<br>";
            }
      else{
             echo "validation succsess";
             echo "<br>";
     }
   }
   
     else
     {
       echo "email or password missmatch :)";
       echo "<br>";
     }
}




?>