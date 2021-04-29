<?php
include("headerView.php");
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="../JS/jsvalidation.js" type="text/javascript"></script>
    <style >
      .error {color: #FF0000;}
    </style>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,300;1,400&display=swap" rel="stylesheet">



  </head>
  <body>
  <style>
body{
  position: relative;
	height: 100%;
	width:100%;
	background: url('Capture.PNG');
 background-size: 100% 100%; 
	background-position: center;
	background-attachment: fixed;
  font-family: sans-serif;
  
}
.login-box{
width: 500px;
  background: rgba(0, 0, 0, 0.4);
  padding: 60px;
  text-align: center;
  margin: auto;
  margin-top: 0%;
  color: white;
  font-family: 'Century Gothic',sans-serif;

}
.form-control{
    border-radius:1rem;
}
  
  </style>

  <div class="login-box">

    <p><h3>Change Password</h3></p>
    <form style="border:3px; border-style:solid; border-color:gray; padding: 1em;" method="post" action="../Controller/changePasswordUserController.php">
        Current Password: <input type="text" name="cpassword" id="password" class="form-control" onkeyup="checkPass()" onblur="checkPass()">
         <span class="error" id="passwordErr"><?php if (!empty($_GET['cpasswordErr'])) {echo $_GET['cpasswordErr'];} ?> </span>
        <br><br>
        <span style="color:purple">New Password:</span>
        <input type="text" name="npassword" id="npassword" class="form-control"  onkeyup="changePass()" onblur="changePass()">
         <span class="error" id="npasswordErr"><?php if (!empty($_GET['npasswordErr'])) {echo $_GET['npasswordErr'];} ?> </span>
        <br><br>
        <span style="color:Purple">Retype New Password:</span>
        <input type="text" name="rnpassword" id="rnpassword" class="form-control" onkeyup="retypePass()" onblur="retypePass()" >
         <span class="error" id="rnpasswordErr"><?php if (!empty($_GET['rnpasswordErr'])) {echo $_GET['rnpasswordErr'];} ?> </span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <br><br>


    </form>
    </div>
    <footer>
  <?php 
 include 'footer.php';?>

</footer>
    
  </body>
</html>
