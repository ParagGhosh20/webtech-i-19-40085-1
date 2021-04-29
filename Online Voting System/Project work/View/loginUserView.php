<?php
include("headerView.php");
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="../JS/jsvalidation.js" type="text/javascript"></script>
    <meta charset="utf-8">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,300;1,400&display=swap" rel="stylesheet">


  </head>
  <body>

  

<div class="w-100">
      <div class="well my-color">
        <!-- <a class="navbar-brand my-color "> <img src="../image/online-voting.png" alt="logo" style="width:100px"></a> -->
        <p class = "text-info text-center"style="font-weight: bold; color: Aqua; font-size: 50px; float: middle; font-family: 'Poppins', sans-serif; ">Online Voting System</p>

      


<?php 

require_once 'connect.php';



?>

  
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
  
  .row.content {
    height: 550px
    }

  .sidenav {

    height: 100%;
  }
  .form-control{
    border-radius:1rem;
}
  
      
  
   
    </style>



<div class="login-box">

  <div class="row">
	<div class="w-50 mx-auto">
		<div class="box">


    <form style="border:2px; border-style:solid; border-color:gray; padding: 1em;" name= "myform"onclick="validateform()" method="post" action="../Controller/loginUserController.php">
<h2 style="color: Aqua;">Login</h2> <br>


        User Name: <input type="text" name="username" id="username" class="form-control" onkeyup="checkUsername()" onblur="checkUsername()" >
        <span class="error" id="usernameErr"><?php if (!empty($_GET['usernameErr'])) {echo $_GET['usernameErr'];} ?> </span>
        <br><br>
        Password: <input type="text" name="password" id="password" class="form-control"onkeyup="checkPass()" onblur="checkPass()" >
        <span class="error" id="passwordErr" ><?php if (!empty($_GET['passwordErr'])) {echo $_GET['passwordErr'];} ?> </span>

        <br><br>
        <br>
        <input type="checkbox"  name="remember" value="remembered">
         <label for="remember">Remember Me</label>
         <br><br>
         <input type="submit" name="submit" value="Submit">
          <meta ><a href ="changePasswordUserView.php">Forget Password? </a></meta>

    </form>
</div>
</div>
</div>
</div>
<footer>
  <?php 
 include 'footer.php';?>

</footer>
  </body>
</html>
