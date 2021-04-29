<?php
include("headerView.php");
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <script defer src = "script.js"></script>
    
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
    
      
      

<?php
session_start();
require_once '../Controller/userController.php';



if(isset($_SESSION['username']))
{
$data = fetchStudent($_SESSION['username']);


  if($data!=NULL)
  {
    foreach ($data as $i => $student):

         $name= $student['NAME'] ;
         $email=$student['EMAIL'];
         $username= $student['USERNAME'] ;
         $birth=$student['BIRTH'];
         $gender= $student['GENDER'] ;
    endforeach;

    echo "<br />$name";
    echo "<br />$email";
    echo "<br />$username";
    echo "<br />$birth";
    echo "<br />$gender";
  }
}

else {
  echo "You cannot access this page!!";
}
 ?>
</body>
<footer>
  <?php 
 include 'footer.php';?>

</footer>
</html>