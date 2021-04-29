<?php
include("headerView.php");
 ?>




<!DOCTYPE HTML>
<html>
<head>
<script src="../JS/jsvalidation.js" type="text/javascript"></script>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,300;1,400&display=swap" rel="stylesheet">
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
.error {color: #FF0000;}

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
</head>
<body>


<div class="w-100">
      <div class="well my-color">
        <!-- <a class="navbar-brand my-color "> <img src="../image/online-voting.png" alt="logo" style="width:100px"></a> -->
        <p class = "text-info text-center"style="font-weight: bold; color: Aqua; font-size: 50px; float: middle; font-family: 'Poppins', sans-serif; ">Online Voting System</p>

<!--       
<?php 

require_once 'connect.php';



?> -->

<div class="login-box">


<div class="row">
	<div class="w-50 mx-auto">
		<div class="box">




<p><span class="error"> Please Fillup all the required field</span></p>
<h2 style="color: Aqua;">Signup</h2> <br>
<form  style="border:1px; border-style:solid; border-color:gray; padding: 1em;" method="post" action="../Controller/signupUserController.php" autocomplete="off">
  Name: <input type="text" name="name" id="name" class="form-control" onkeyup="checkName()" onblur="checkName()" >
  <span  class="error" id="nameErr"><?php if (!empty($_GET['nameErr'])) {echo $_GET['nameErr'];} ?> </span>
  <br><br>
   E-mail: <input type="text" name="email" id="email" class="form-control" onkeyup="checkEmail()" onblur="checkEmail()">
   <span  class="error" id="emailErr"><?php if (!empty($_GET['emailErr'])) {echo $_GET['emailErr'];} ?> </span>
  <br><br>
  User Name: <input type="text" name="username" id="username" class="form-control" onkeyup="checkUsername()" onblur="checkUsername()" >
  <span  class="error" id="usernameErr"><?php if (!empty($_GET['usernameErr'])) {echo $_GET['usernameErr'];} ?> </span>
  <br><br>
  Password: <input type="password" name="password" id="password" class="form-control" onkeyup="checkPass()" onblur="checkPass()" >
  <span  class="error" id="passwordErr"><?php if (!empty($_GET['passwordErr'])) {echo $_GET['passwordErr'];} ?> </span>
  <br><br>

  Comfirm Password: <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" onkeyup="confirmPass()" onblur="confirmPass()">
  <span  class="error" id="confirmpasswordErr"><?php if (!empty($_GET['confirmpasswordErr'])) {echo $_GET['confirmpasswordErr'];} ?> </span>
  <br><br>

 Date of Birth: <input type="date" size="1" name="birth" id="birth" class="form-control" onkeyup="checkDOB()" onblur="checkDOB()" >
<span  class="error" id="birthErr"><?php if (!empty($_GET['birthErr'])) {echo $_GET['birthErr'];} ?> </span>

  <br><br>
  Gender:
  <input type="radio" name="gender"  value="female">Female
  <input type="radio" name="gender"  value="male">Male
  <input type="radio" name="gender"  value="other">Other
  <span style="color: red;" class="error"><?php if (!empty($_GET['genderErr'])) {echo $_GET['genderErr'];} ?> </span>
  <br><br>

  <input type="submit" name="submit" value="Submit">
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
