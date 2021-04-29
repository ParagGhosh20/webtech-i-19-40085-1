<?php
include("headerView.php");
 ?>



<?php

session_start();
require_once '../Controller/userController.php';
$data = fetchStudent($_SESSION['username']);
if($data!=NULL)
{
  foreach ($data as $i => $student):

       $name= $student['NAME'] ;
       $email=$student['EMAIL'];
       $birth=$student['BIRTH'];
       $gender= $student['GENDER'] ;
  endforeach;
$birth=str_replace('/','', $birth );
$birthDate=$birth[0].$birth[1];
$birthMonth=$birth[2].$birth[3];
$birthYear=$birth[4].$birth[5].$birth[6].$birth[7];


}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <script src="../JS/jsvalidation.js" type="text/javascript"></script>
  
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
  </style>


<div class="row">
    	<div class="w-50 mx-auto">
	<div class="box"> 
 <form action="../Controller/updateUserController.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label>
  <input value="<?php echo $name ?>" type="text" id="name" name="name" class="form-control" onkeyup="checkName()" onblur="checkName()">
  <br>
  <span class="error" id="nameErr" ><?php if (!empty($_GET['nameErr'])) {echo $_GET['nameErr'];} ?> </span>
  <br>
  <br>
  <label for="email">Email:</label>
  <input value="<?php echo $email ?>" type="text" id="email" name="email" class="form-control" onkeyup="checkEmail()" onblur="checkEmail()">
  <br>
  <span class="error" id="emailErr" ><?php if (!empty($_GET['emailErr'])) {echo $_GET['emailErr'];} ?> </span>
  <br><br>
  <label for="birth"> Date of Birth:</label><br>
   <input value="<?php echo $birth ?>" type="date" id="birth" size="1" name="birth" class="form-control" onkeyup="checkDOB()" onblur="checkDOB()"><br>
  <span class="error" id="birthErr" ><?php if (!empty($_GET['birthErr'])) {echo $_GET['birthErr'];} ?> </span> <br><br>
  <input type="submit" name = "updateStudent" value="Update">
  <input type="reset">
</form>
</div>
<div>
<div>
<footer>
  <?php 
 include 'footer.php';?>

</footer>

</body>
</html>
