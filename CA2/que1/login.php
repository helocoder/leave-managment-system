<!---||||||||||||||||||||| Form|||||||||||||||||||||-->    
    <div class="container ">
     <h1 class = "text-center " style="color:#0d6efd";>Login </h1>

     <form action = "session_details.php" method = "POST" style="display: flex;
    flex-direction: column;
    align-items: center;">
 
 
 <div class="mb-3 col-md-6" >
    <label for="nam" class="form-label">Name</label>
    <input type="name" class="form-control" id="nam" name="nam">
    <br>
     <br>
  
  </div>

    <div class="mb-3 col-md-6">
    <label for="pwd" class="form-label">Password</label>
    <input type="password" class="form-control" id="pwd" name = "pwd">
    <br>
     <br>
  
  </div>
  <button type="submit" class="btn btn-primary col-md-6" name = "log">Login</button>
  
      <div class="logout">
        <a href ="logout.php"> Logout</a>
        <br>
        <br>
      </div>
</form>

<!---||||||||||||||||||||| Form|||||||||||||||||||||--> 