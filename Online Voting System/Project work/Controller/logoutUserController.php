<?php
session_start();
if(isset($_SESSION['username']))
{
  session_destroy();
  header('Location:../View/loginUserView.php');
}else{
	  header('Location:../View/loginUserView.php');
}

 ?>