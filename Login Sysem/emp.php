<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Employee page</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      
  
<div class="container">
    <div class="card">
        <div class="parent">
            <div class ="top-div">
                <h3>Few step far......<h3>
                <!-- <?php
                echo'
                <h3><$_SESSION[loguser] </h3>';
                ?> -->
            </div>
            <ul class="progress-bar">
                <li class="active"></li>
                <li></li>
                <li></li>
                <!--<li></li>-->
            </ul>
        </div>

        <div class="main active">
            
            <div class="content">
                <h4>Welcome!</h4>
                
                <div class="input-text"> <input type="text" placeholder="IT , Marketing , SDE" id="full-name" name = "depart" require> <span>Which Department ?</span> </div>
                  <br> 
                <div class="date-grp">
                <form action="emp.php" method="POST">       
                    <h6>From date</h6>
                    <div class="input-group date" data-provide="datepicker" id='datetimepicker1'>
                        <input type="date" class="form-control" name = "date-from">
                        <div class="input-group-addon">
                            </div>
                        </div>
                        
                       <h6>To date</h6>
                        <div class="input-group date" data-provide="datepicker" id='datetimepicker2'>
                            <input type="date" class="form-control" name = "date-to">
                            <div class="input-group-addon">
                                </div>
                            </div>
                 </div>

            </div>
     </form>
            <div class="button"> <button class="create-workspace"name="save1">Save</button> </div>
        </div>
        
        <div class="main">
            <div class="content">
                <h4>Select days for leave</h4>
            </div>
            <br>
             <form action="emp.php" method="POST">       
            <input type="number" class="form-control col-3" id="exampleInputEmail1" aria-describedby="emailHelp">  Days
            </form>
            <div class="button button_gap"> <button class="back-click">Back</button> <button class="next-click" name="save2">Next</button> </div>
        </div>
        <div class="main">
            <div class="content">
                <h4>Leave Type</h4>
                            <form action="emp.php" method="POST"> 
                  <input type="text" class="form-control col-3" name = "leave-typ"id="exampleInputEmail1" aria-describedby="emailHelp">
                  <br>
                  <h4>Leave Reason</h4>
                  <textarea type="text" class="form-control col-3 " style="resize:none;" rows="4" cols="35" name = "leave-rsn"id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
            </div>
     <!-- dropdown start -->
  
     <!-- dropdown closed -->
    </form>



            <div class="button button_gap1"> <button class="back-click">Back</button> <button class="finish-click">Finish</button> </div>
        </div>
        <div class="main"> <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" /> </svg>
            <div class="content">
                <h2>Congratulations! <span id="shown_name"></span></h2>
                <p>Leave Request Sent successfully to Admin
                    Hope u will get your leave as soon as possible :) 
                </p>
            </div>
     <form action="emp.php" method="POST">       

            <div class="button launch"> <button name="logout">Logout</button> </div>
    </form>       

        </div>

    </div>

</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

<?php
if(isset($_POST["logout"]))
{
     header("Location:C:\xampp\htdocs\proj\PHP\Login Sysem\logout.php");
     exit();
}



?>
<!-- script  -->


 <script type="text/javascript" src="script.js"></script>

 

